<?php

namespace App\Http\Resources\Activity;

use Illuminate\Http\Request;

class ActivityResource extends ShowActivityResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array_merge(parent::toArray($request), [

        ]);
    }
}
