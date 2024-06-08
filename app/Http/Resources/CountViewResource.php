<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CountViewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $viewableType = $this->viewable->viewable_type;
        $viewable = $this->viewable;

        if ($viewableType === 'App\\Models\\ShortLink') {
            return [
                'id' => $this->id,
                'viewable_type' => 'shortlink',
                'shortlink_id' => $this->id,
                'short_name' => $this->short_name,
                'count' => $viewable->count + 1
            ];
        } elseif ($viewableType === 'App\\Models\\Biolink') {
            return [
                'id' => $this->id,
                'viewable_type' => 'biolink',
                'biolink_id' => $this->id,
                'name' => $this->name,
                'count' => $viewable->count + 1
            ];
        }

        return [
            'id' => $this->id,
            'viewable_type' => $this->viewable_type,
            'viewable_id' => $this->viewable_id,
            'count' => $this->count
        ];

    }
}
