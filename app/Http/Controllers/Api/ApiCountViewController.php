<?php

namespace App\Http\Controllers\Api;

use App\Models\Biolink;
use App\Models\ShortLink;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\CountViewResource;

class ApiCountViewController extends BaseController
{
    public function index()
    {
        try {
            $views = View::with(['viewable'])->get();
            return $this->sendResponse(CountViewResource::collection($views), 'Successfully get data', 200);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $updateData = null;
            if ($request->type == 'shortlink') {
                $shortlink = ShortLink::find($id);
                $shortlink->viewable()->update(['count' => $shortlink->viewable->count + 1]);
                $updateData = $shortlink;
            } elseif ($request->type == 'biolink') {
                $biolink = Biolink::find($id);
                $biolink->viewable()->update(['count' => $biolink->viewable->count + 1]);
                $updateData = $biolink;
            }
            // $presave = Presave::find($id);
            // $presave->viewable()->update(['count' => $presave->viewable->count + 1]);
            DB::commit();
            return $this->sendResponse(new CountViewResource($updateData), 'Successfully update count', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendError($th->getMessage(), 400);
        }
    }
}
