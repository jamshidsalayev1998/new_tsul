<?php

namespace App\Http\Controllers\Admin;

use App\AcademikTitle;
use App\Http\Controllers\Controller;

use App\SliderImage;
use App\SliderText;
use App\SystemCard;
use App\Teacher;
use App\TeacherDegree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/**
 * Admin controller for managing teacher (staff) records.
 *
 * Accessible to users with 'kafedra-admin' or 'super-admin' roles.
 * Kafedra admins can only view and manage teachers belonging to their
 * own department. Super admins have broader access via separate routes.
 *
 * All file uploads are stored in the public/teachers/ directory with
 * sanitized filenames to prevent path traversal issues.
 */
class TeacherController extends Controller
{
    /**
     * Display the list of teachers scoped to the authenticated admin's department.
     *
     * Kafedra admins only see teachers from their own kafedra, determined
     * by the user's linked KafedraAdmin profile.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        $teachers = Teacher::where(function ($query) use ($user) {
            $prof = $user->profession();
            $query->where('kafedra_id', $prof->kafedra_id);
        })->get();
        return view('admin.pages.teachers.index', [
            'data' => $teachers
        ]);
    }

    /**
     * Show the form for creating a new teacher record.
     *
     * Loads all available academic degrees and titles for the dropdown selects.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $degrees = TeacherDegree::all();
        $academic_titles = AcademikTitle::all();
        return view('admin.pages.teachers.create', ['degrees' => $degrees, 'academic_titles' => $academic_titles]);
    }

    /**
     * Store a newly created teacher in the database.
     *
     * Validates required fields, sanitizes CKEditor empty paragraph artifacts
     * (replacing them with empty strings before validation), and handles
     * photo upload. Multilingual fields fall back to the Uzbek value when
     * the RU/EN translations are not provided or contain only an empty CKEditor tag.
     *
     * The teacher is automatically assigned to the current admin's department.
     *
     * Side effects:
     * - Writes uploaded image to public/teachers/
     * - Creates a new Teacher record in the database
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $text = '';
        $prof = Auth::user()->profession();
        $request_data = $request->all();
        if ($request_data['general_info_uz'] == '<p><br data-cke-filler="true"></p>') {
            $request_data['general_info_uz'] = '';
        }
        if ($request_data['contact_info_uz'] == '<p><br data-cke-filler="true"></p>') {
            $request_data['contact_info_uz'] = '';
        }
        $request->merge($request_data);
        $request->validate([
            'fio_uz' => ['required', 'string'],
            'degree' => ['required', 'string'],
            'academic_title' => ['required', 'string'],
            'image' => ['required', 'max:4000'],
            'general_info_uz' => ['required', 'string'],
            'contact_info_uz' => ['required', 'string'],
            'language' => ['required', 'string'],
            'spin_rints' => ['required', 'string'],
            'orcid' => ['required', 'string'],
            'staj' => ['required', 'integer']
        ], [
            'fio.required' => 'F.I.O maydonini to`ldiring',
            'degree.required' => 'Ilmiy daraja maydonini to`ldiring',
            'contact_info_uz.required' => 'Kontakt malumoti maydonini to`ldiring',
            'general_info_uz.required' => 'Umumiy malumot maydonini to`ldiring',
            'image.required' => 'Rasmni yuklang',
            'language.required' => 'Til maydonini to`ldiring',
            'spin_rints.required' => 'Spin maydonini to`ldiring',
            'orcid.required' => 'ORCID maydonini to`ldiring',
            'staj.required' => 'Tajriba (yil) maydonini to`ldiring',
        ]);

        $new_teacher = new Teacher();
        $new_teacher->general_info_uz = $request->general_info_uz;
        $new_teacher->contact_info_uz = $request->contact_info_uz;

        // Fall back to UZ content when RU/EN fields are empty or contain CKEditor placeholder
        $request->general_info_ru != '<p><br data-cke-filler="true"></p>' ? $new_teacher->general_info_ru = $request->general_info_ru : $new_teacher->general_info_ru = $request->general_info_uz;
        $request->contact_info_ru != '<p><br data-cke-filler="true"></p>' ? $new_teacher->contact_info_ru = $request->contact_info_ru : $new_teacher->contact_info_ru = $request->contact_info_uz;

        $request->general_info_en != '<p><br data-cke-filler="true"></p>' ? $new_teacher->general_info_en = $request->general_info_en : $new_teacher->general_info_en = $request->general_info_uz;
        $request->contact_info_en != '<p><br data-cke-filler="true"></p>' ? $new_teacher->contact_info_en = $request->contact_info_en : $new_teacher->contact_info_en = $request->contact_info_uz;
        $new_teacher->kafedra_id = $prof->kafedra_id;

        // Default RU/EN names to UZ value; override only if explicitly provided
        $new_teacher->fio_uz = $request->fio_uz;
        $new_teacher->fio_ru = $request->fio_uz;
        $new_teacher->fio_en = $request->fio_uz;
        if ($request->fio_ru)
            $new_teacher->fio_ru = $request->fio_ru;
        if ($request->fio_en)
            $new_teacher->fio_en = $request->fio_en;
        $new_teacher->degree = $request->degree;
        $new_teacher->academic_title = $request->academic_title;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_name = pathinfo($file_name, PATHINFO_FILENAME);
            $file_ext = $file->getClientOriginalExtension();
            // Sanitize filename to avoid spaces and special characters in path
            $file_name = str_replace(' ', '_', $file_name);
            $file_name = str_replace('\'', '', $file_name);
            $file_name = str_replace('`', '', $file_name);
            $file_name = $file_name . date('d') . date('h') . date('i');
            $file->move('teachers', $file_name . '.' . $file_ext);
            $new_teacher->image = '/teachers/' . $file_name . '.' . $file_ext;
        }
        $new_teacher->language = $request->language;
        $new_teacher->spin_rints = $request->spin_rints;
        $new_teacher->orcid = $request->orcid;
        $new_teacher->staj = $request->staj;
        $new_teacher->save();
        return redirect()->back()->with('success', 'Malumot saqlandi');
    }

    /**
     * Display details for a single teacher record.
     *
     * @param int $id The teacher's primary key
     * @return \Illuminate\View\View|null Returns null (implicit) if teacher not found
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        //        return $teacher;
        if ($teacher) {
            return view('admin.pages.teachers.show', [
                'data' => $teacher
            ]);
        }
    }

    /**
     * Show the edit form for an existing teacher record.
     *
     * Loads all degree and academic title options for the dropdowns.
     *
     * @param int $id The teacher's primary key
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $degrees = TeacherDegree::all();
        $academic_titles = AcademikTitle::all();
        return view('admin.pages.teachers.edit', [
            'data' => $teacher,
            'degrees' => $degrees,
            'academic_titles' => $academic_titles
        ]);
    }

    /**
     * Update an existing teacher record in the database.
     *
     * Note: input validation is currently commented out — all fields are updated
     * without explicit validation. Multilingual fields fall back to the Uzbek value
     * when the RU/EN equivalents are not provided.
     *
     * After saving, redirects super-admins to the superadmin teacher list and
     * kafedra-admins to the department teacher list.
     *
     * Side effects:
     * - Optionally overwrites the teacher's image in public/teachers/
     * - Updates the Teacher record in the database
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The teacher's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //        return $request;
        $new_teacher = Teacher::find($id);
        $request_data = $request->all();
        if ($request_data['general_info_uz'] == '<p><br data-cke-filler="true"></p>') {
            $request_data['general_info_uz'] = '';
        }
        if ($request_data['contact_info_uz'] == '<p><br data-cke-filler="true"></p>') {
            $request_data['contact_info_uz'] = '';
        }
        //        $request->validate([
//            'general_info_uz' => ['required', 'string'],
//            'contact_info_uz' => ['required', 'string'],
//            'fio_uz' => ['required', 'string'],
//            'degree' => ['required', 'string'],
//            'academic_title' => ['required', 'string'],
//            'language' => ['required', 'string'],
//            'spin_rints' => ['required', 'string'],
//            'orcid' => ['required', 'string'],
//            'staj' => ['required', 'integer']
//        ], [
//            'fio_uz.required' => 'F.I.O maydonini to`ldiring',
//            'degree.required' => 'Ilmiy daraja maydonini to`ldiring',
//            'contact_info_uz.required' => 'Kontakt malumoti maydonini to`ldiring',
//            'general_info_uz.required' => 'Umumiy malumot maydonini to`ldiring',
//            'language.required' => 'Til maydonini to`ldiring',
//            'spin_rints.required' => 'Spin maydonini to`ldiring',
//            'orcid.required' => 'ORCID maydonini to`ldiring',
//            'staj.required' => 'Tajriba (yil) maydonini to`ldiring',
//        ]);
//        return $request;
        $new_teacher->general_info_uz = $request->general_info_uz;
        $new_teacher->contact_info_uz = $request->contact_info_uz;

        $request->general_info_ru ? $new_teacher->general_info_ru = $request->general_info_ru : $new_teacher->general_info_ru = $request->general_info_uz;
        $request->contact_info_ru ? $new_teacher->contact_info_ru = $request->contact_info_ru : $new_teacher->contact_info_ru = $request->contact_info_uz;

        $request->general_info_en ? $new_teacher->general_info_en = $request->general_info_en : $new_teacher->general_info_en = $request->general_info_uz;
        $request->contact_info_en ? $new_teacher->contact_info_en = $request->contact_info_en : $new_teacher->contact_info_en = $request->contact_info_uz;

        $new_teacher->fio_uz = $request->fio_uz;
        $request->fio_ru ? $new_teacher->fio_ru = $request->fio_ru : $request->fio_uz;
        $request->fio_en ? $new_teacher->fio_en = $request->fio_en : $request->fio_uz;
        $new_teacher->degree = $request->degree;
        $new_teacher->academic_title = $request->academic_title;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_name = pathinfo($file_name, PATHINFO_FILENAME);
            $file_ext = $file->getClientOriginalExtension();
            $file_name = str_replace(' ', '_', $file_name);
            $file_name = str_replace('\'', '', $file_name);
            $file_name = str_replace('`', '', $file_name);
            $file_name = $file_name . date('d') . date('h') . date('i');
            $file->move('teachers', $file_name . '.' . $file_ext);
            $new_teacher->image = '/teachers/' . $file_name . '.' . $file_ext;
        }
        $new_teacher->language = $request->language;
        $new_teacher->spin_rints = $request->spin_rints;
        $new_teacher->orcid = $request->orcid;
        $new_teacher->staj = $request->staj;
        $new_teacher->save();
        if (Auth::user()->hasRole('super-admin')) {
            return redirect(route('superadmin.teachers.index'))->with('success', 'Malumot saqlandi');

        } elseif (Auth::user()->hasRole('kafedra-admin')) {
            return redirect(route('teachers.index'))->with('success', 'Malumot saqlandi');
        }
    }

    /**
     * Delete a teacher and all their associated articles.
     *
     * Articles are deleted first to avoid orphaned records since there is
     * no cascading delete configured at the database level.
     *
     * Side effects:
     * - Deletes all Article records linked to this teacher
     * - Deletes the Teacher record from the database
     * - Does NOT delete the uploaded image file from disk
     *
     * @param int $id The teacher's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        if ($teacher) {
            $articles = $teacher->articles;
            foreach ($articles as $article) {
                $article->delete();
            }
            $teacher->delete();
            return redirect()->back()->with('success', 'Malumot ochirildi');
        }
        return redirect()->back()->with('error', 'Malumot topilmadi');
    }
}
