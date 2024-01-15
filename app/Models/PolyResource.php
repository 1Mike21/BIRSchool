<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class PolyResource extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'text',
      'img',
      'resourceable_id',
      'resourceable_type'
    ];

    public function resourceable(): MorphTo
    {
      return $this->morphTo();
    }
}
