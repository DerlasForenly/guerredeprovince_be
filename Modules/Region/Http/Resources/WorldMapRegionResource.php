<?php

namespace Modules\Region\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * Class WorldMapRegionResource
 */
class WorldMapRegionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'svg_d'       => File::get(resource_path("svg/$this->name")),
            'country'     => [
                'id'           => $this->country->id,
                'name'         => $this->country->name,
                'emblem'       => $this->country->emblem,
                'color'        => $this->country->color,
                'border_color' => $this->country->border_color,
            ],
        ];
    }
}