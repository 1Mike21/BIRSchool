<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
          'price' => $this->price,
          'group' => new GroupResource ($this->group),
          'is_active' => $this->is_active,
        ];
    }
}
