<?php

namespace App\Http\Controllers;

use App\Models\LinkPresave;
use App\Models\Presave;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function addLinkPresave(Request $request)
    {
        try {
            $link = LinkPresave::create([
                'platform_id' => $request->platform_id,
                'presave_id' => $request->presave_id
            ]);
            return response()->json(['status' => 'success', 'id' => $link->id], 201);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error'], 500);

        }
    }

    public function updateLinkPresave(Request $request)
    {
        try {
//            dd($request->all());

            $link = LinkPresave::find($request->link_id);
            if ($request->url) {
                $link->link = $request->url;
            }
            if ($request->button_text) {
                $link->button_text = $request->button_text;
            }
            $link->save();
            return response()->json(['status' => 'success'], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error'], 500);
        }
    }

    public function updateStyleLink(Request $request, $id)
    {
        $presaves = Presave::findOrFail($id);
        if ($request->style_link) {
            $presaves->style_link = $request->style_link;
        }
        $presaves->save();
        return response()->json(['status' => 'success'], 200);
    }

    public function deleteLinkPresave($id)
    {
        $link = LinkPresave::find($id);
        $link->delete();
        return response()->json(['status' => 'success', 'name' => $link->platform->name], 200);
    }
}
