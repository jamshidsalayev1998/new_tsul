<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Media;
use App\Menu;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

/**
 * Admin controller for managing the media library.
 *
 * Provides a filterable, paginated media file browser and handles
 * file uploads with automatic type detection based on file extension.
 * Files are stored in public/media/ with unique randomized names.
 *
 * Media type codes:
 * 1 = Image, 2 = PDF, 3 = Word document, 4 = Spreadsheet,
 * 5 = Video, 6 = Audio, 7 = Archive, 0 = Other
 */
class MediaController extends Controller
{
    /**
     * Display a filterable, paginated list of media files.
     *
     * Supports optional search by name and filtering by media type.
     * Items are ordered by newest first (ID descending).
     *
     * @param \Illuminate\Http\Request $request Optional query params: search, type
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = Media::orderBy('id', 'DESC');

        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('type') && $request->type != '') {
            $query->where('type', $request->type);
        }

        $medias = $query->paginate(20);

        return view('admin.pages.media.index', [
            'data' => $medias
        ]);
    }

    /**
     * Generate a timestamped filename suffix.
     *
     * @param string $name Base name prefix
     * @return string Timestamped filename
     */
    public function file_name($name)
    {
        $name2 = $name . date('s') . '_' . date('i') . '_' . date('h') . '_' . date('d') . '_' . date('m');
        return $name2;
    }

    /**
     * Generate a random lowercase alphabetic string (excluding ambiguous chars).
     *
     * @param int $count Number of characters to generate
     * @return string Random alphabetic string
     */
    public function randomPassword_alpha($count)
    {
        $alphabet = 'abcdefghjkmnpqrstuvwxyz';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $count; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    /**
     * Upload and store a new media file.
     *
     * The file extension is lowercased and used to determine the media type code.
     * The display name defaults to the original filename if not explicitly provided.
     * No file is stored if no upload is present — the method returns void silently.
     *
     * Side effects:
     * - Writes uploaded file to public/media/ with a randomized unique filename
     * - Creates a Media record
     *
     * @param \Illuminate\Http\Request $request Must contain file upload in 'image' field; optional 'name'
     * @return \Illuminate\Http\RedirectResponse|void Returns redirect on success, void if no file uploaded
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_ext = strtolower($file->getClientOriginalExtension());
            $new_name = $this->file_name($this->randomPassword_alpha(10)) . '.' . $file_ext;
            $file->move(public_path() . '/media', $new_name);
            $new_media = new Media();
            $new_media->name = $request->name ?? $file->getClientOriginalName();
            $new_media->path = 'media/' . $new_name;

            // 1 - Image, 2 - PDF, 3 - Word, 4 - Excel, 5 - Video, 6 - Audio, 0 - Other
            if (in_array($file_ext, ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'])) {
                $new_media->type = 1;
            } elseif ($file_ext == 'pdf') {
                $new_media->type = 2;
            } elseif (in_array($file_ext, ['doc', 'docx', 'odt'])) {
                $new_media->type = 3;
            } elseif (in_array($file_ext, ['xls', 'xlsx', 'ods', 'csv'])) {
                $new_media->type = 4;
            } elseif (in_array($file_ext, ['mp4', 'avi', 'mov', 'wmv'])) {
                $new_media->type = 5;
            } elseif (in_array($file_ext, ['mp3', 'wav', 'ogg'])) {
                $new_media->type = 6;
            } elseif (in_array($file_ext, ['zip', 'rar', '7z'])) {
                $new_media->type = 7;
            } else {
                $new_media->type = 0;
            }

            $new_media->save();
            return redirect()->back()->with('success', 'Malumot saqlandi');
        }
    }

    /**
     * Delete a media record and its corresponding file from disk.
     *
     * Unlike most delete operations in this project, this method also
     * removes the actual file from the filesystem using unlink().
     *
     * Side effects:
     * - Deletes the file from public/media/ if it exists
     * - Deletes the Media record
     *
     * @param int $id The media record's primary key
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        $file_path = public_path($media->path);
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        $media->delete();
        return redirect()->back()->with('success', 'Fayl muvaffaqiyatli o\'chirildi');
    }
}
