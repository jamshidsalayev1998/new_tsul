<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Admin panel entry-point controller.
 *
 * Handles the initial redirect after login based on the authenticated
 * user's role. Each role is directed to their relevant management section
 * rather than a generic dashboard, simplifying navigation for role-specific admins.
 *
 * Super-admins and other roles without a specific redirect land on the
 * slider management page as the default admin dashboard.
 */
class IndexController extends Controller
{
    /**
     * Redirect the authenticated admin to their role-appropriate section.
     *
     * Role-to-route mapping:
     * - kafedra-admin       → teachers.index (manage department teachers)
     * - youth-sport-admin   → youth-sport.index (manage youth sport events)
     * - legal-research-admin → scientific.index (manage scientific events)
     * - international-admin → international.index (manage international opportunities)
     * - all others (incl. super-admin) → admin.slider.index (main admin dashboard)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('kafedra-admin')) {
            return redirect(route('teachers.index'));
        }

        if ($user->hasRole('youth-sport-admin')) {
            return redirect(route('youth-sport.index'));
        }

        if ($user->hasRole('legal-research-admin')) {
            return redirect(route('scientific.index'));
        }

        if ($user->hasRole('international-admin')) {
            return redirect(route('international.index'));
        }

        return redirect(route('admin.slider.index'));
    }
}
