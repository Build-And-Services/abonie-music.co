<?php

namespace App\Http\Controllers;

use App\Models\Biolink;
use App\Models\Presave;
use Illuminate\Http\Request;

class PreviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $biolink = Biolink::where("id", $id)->first();
        return view('frontend.preview.index', compact('biolink'));
    }

    public function presave($id)
    {
        $presave = Presave::with('links')->where('id', $id)->first();
        return view('frontend.preview.presave', compact('presave'));
    }

    public function resultPresave($slug)
    {
        $presave = Presave::with('links')->where('slug', $slug)->first();
        if ($presave->statuses->status == 1) {
            $presave->viewable()->update(['count' => $presave->viewable->count + 1]);
            return view('frontend.preview.presave', compact('presave'));
        } else {
            return view('errors.404');
        }
    }
}
