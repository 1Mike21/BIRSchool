<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id' => $this->id,
          'title' => $this->title,
          'slug' => $this->slug,
          'icon' => asset('storage/' . $this->icon),
          'description' => $this->description,
          'level' => $this->level,
          'is_active' => $this->is_active,
        ];
    }
}
