<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Project extends JsonResource
{
    public function toArray($request) : array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'url' => $this->url,
            'stats' => $this->stats,
        ];
    }
}
