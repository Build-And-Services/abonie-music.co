<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Biolink;
use App\Models\Presave;
use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $users = User::with('roles')->where('name', '!=', 'superadmin')->count();
            $shortlinks = ShortLink::count();
            $presaves = Presave::count();
            $biolinks = Biolink::count();
            $shortlinksByUser = Shortlink::where('id_user', Auth::user()->id)->count();
            $presavesByUser = Presave::where('user_id', Auth::user()->id)->count();
            $userActive = User::whereHas('statuses', function ($query) {
                $query->where('status', 1)->where('name', '!=', 'superadmin');
            })->count();
            $userInactive = User::whereHas('statuses', function ($query) {
                $query->where('status', 0);
            })->count();
            $shortlinkActive = Shortlink::whereHas('statuses', function ($query) {
                $query->where('status', 1);
            })->count();
            $shortlinkInactive = Shortlink::whereHas('statuses', function ($query) {
                $query->where('status', 0);
            })->count();
            $presaveActive = Presave::whereHas('statuses', function ($query) {
                $query->where('status', 1);
            })->count();
            $presaveInactive = Presave::whereHas('statuses', function ($query) {
                $query->where('status', 0);
            })->count();
            $shortActiveByUser = Shortlink::whereHas('statuses', function ($query) {
                $query->where('status', 1);
                $query->where('id_user', Auth::user()->id);
            })->count();
            $shortInactiveByUser = Shortlink::whereHas('statuses', function ($query) {
                $query->where('status', 0);
                $query->where('id_user', Auth::user()->id);
            })->count();
            $presaveActiveByUser = Presave::whereHas('statuses', function ($query) {
                $query->where('status', 1);
                $query->where('user_id', Auth::user()->id);
            })->count();
            $presaveInactiveByUser = Presave::whereHas('statuses', function ($query) {
                $query->where('status', 0);
                $query->where('user_id', Auth::user()->id);
            })->count();
            // $biolinksByUser = Biolink::where('user_id', Auth::user()->id)->count();
            // dd($userActive);
            return view('backend.index', [
                "totalUser" => $users,
                "totalShort" => $shortlinks,
                "totalPresave" => $presaves,
                "totalBiolink" => $biolinks,
                "shortlinkByUser" => $shortlinksByUser,
                "presaveByUser" => $presavesByUser,
                "userActive" => $userActive,
                "userInactive" => $userInactive,
                "shortlinkActive" => $shortlinkActive,
                "shortlinkInactive" => $shortlinkInactive,
                "presaveActive" => $presaveActive,
                "presaveInactive" => $presaveInactive,
                "shortActiveByUser" => $shortActiveByUser,
                "shortInactiveByUser" => $shortInactiveByUser,
                "presaveActiveByUser" => $presaveActiveByUser,
                "presaveInactiveByUser" => $presaveInactiveByUser,
                // "biolinkByUser" => $biolinksByUser,
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
