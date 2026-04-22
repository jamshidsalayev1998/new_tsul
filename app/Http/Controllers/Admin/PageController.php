<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Menu;
use App\Page;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

/**
 * Admin controller for managing static content pages.
 *
 * Static pages are general-purpose content pages (e.g., policies, documents)
 * with a custom slug. When a page is created and a menu item is selected,
 * that menu item's slug is automatically set to point to the new page's URL,
 * linking content to navigation in one action.
 *
 * Page content is wrapped in a Bootstrap grid container HTML scaffold
 * on store to ensure consistent layout without requiring the editor
 * to manage the wrapper markup.
 */
class PageController extends Controller
{
    /**
     * Display all pages ordered by newest first.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = Page::orderBy('id', 'DESC')->get();
        return view('admin.pages.pages.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the page creation form.
     *
     * Loads only menu items that have no slug assigned yet, so the admin
     * can link the new page to an unlinked navigation item.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $menus = Menu::where('slug', '')->orWhere('slug', null)->get();
        return view('admin.pages.pages.create', [
            'menus' => $menus
        ]);
    }

    /**
     * Delete a page by ID from the request body.
     *
     * @param \Illuminate\Http\Request $request Must contain 'id'
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $page = Page::find($request->id);
        if ($page) {
            $page->delete();
        }
        return redirect()->back()->with('success', 'Malumot ochirildi');
    }

    /**
     * Show the edit form for an existing page.
     *
     * @param int $id The page's primary key
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $page = Page::find($id);
        if ($page) {
            return view('admin.pages.pages.edit', [
                'data' => $page
            ]);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Store a new static page and optionally link it to a menu item.
     *
     * Content is wrapped in a Bootstrap grid scaffold before saving,
     * ensuring all pages share the same layout structure. The slug is
     * sanitized via clear_slug() to remove special characters.
     *
     * If a menu_id is provided and the selected menu item has no existing slug,
     * the menu item's slug is set to '/general-page/{slug}' to create the
     * navigation link automatically.
     *
     * Side effects:
     * - Creates a Page record
     * - Optionally updates a Menu record's slug
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        return $request;
        $new = new Page();
        $slug = $this->clear_slug(trim($request->slug, '/'));
        $new->title = $request->title;
        $new->slug = $slug;
        // Wrap content in Bootstrap grid scaffold to ensure consistent page layout
        $start = '<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
';
        $end = ' </div>

                    </div>
                </div>
            </div>
        </div>';
        $new->content_uz = $start . $request->content_uz . $end;
        $new->content_ru = $start . $request->content_ru . $end;
        $new->content_en = $start . $request->content_en . $end;
        $new->save();
        if ($request->menu_id != "") {
            $menu = Menu::find($request->menu_id);
            // Only set the slug if the menu item has not already been linked to another page
            if ($menu->slug == '' || $menu->slug == null) {
                $menu->slug = '/general-page/' . $slug;
                $menu->update();
            }
        }
        return redirect(route('admin.page.index'))->with('success', 'Malumot qo`shildi');
    }

    /**
     * Sanitize a URL slug by replacing special characters with hyphens.
     *
     * Replaces spaces, slashes, quotes, underscores, and various symbol
     * characters to produce a clean, URL-safe slug.
     *
     * @param string $slug The raw slug string to sanitize
     * @return string The sanitized slug with special chars replaced by hyphens
     */
    public function clear_slug($slug)
    {
        $slug = str_replace('/', '-', $slug);
        $slug = str_replace(' ', '-', $slug);
        $slug = str_replace('\'', '-', $slug);
        $slug = str_replace('"', '-', $slug);
        $slug = str_replace('`', '-', $slug);
        $slug = str_replace('_', '-', $slug);
        $slug = str_replace('%', '-', $slug);
        $slug = str_replace('^', '-', $slug);
        $slug = str_replace('&', '-', $slug);
        $slug = str_replace('*', '-', $slug);
        $slug = str_replace('(', '-', $slug);
        $slug = str_replace(')', '-', $slug);
        $slug = str_replace('+', '-', $slug);
        $slug = str_replace('=', '-', $slug);
        $slug = str_replace('@', '-', $slug);
        $slug = str_replace('!', '-', $slug);
        return $slug;
    }

    /**
     * Update an existing page's content, title, and slug.
     *
     * Unlike store(), update does NOT wrap content in the grid scaffold —
     * the content is saved as-is from the editor.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The page's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        if ($page) {
            $page->content_uz = $request->content_uz;
            $page->content_ru = $request->content_ru;
            $page->content_en = $request->content_en;
            $page->title = $request->title;
            $page->slug = $request->slug;
            $page->update();
        }
        return redirect()->back()->with('success', 'Malumotlar o`zgartirildi');
    }
}
