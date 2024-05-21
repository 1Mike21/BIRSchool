<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
          'name' => $this->name,
          'surname' => $this->surname,
          'profile_photo_url' => $this->profile_photo_url,
          'phone_number' => $this->phone_number,
          'email' => $this->email,
          'roles' => $this->getRoleNames(),
          'permissions' => $this->getPermissionNames(),
          'created_at' => $this->created_at->format('d.m.Y'),
        ];
    }
}
