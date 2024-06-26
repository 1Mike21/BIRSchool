<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LearningStep extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'number',
      'group_id'
    ];

    public function group(): BelongsTo
    {
      return $this->belongsTo(Group::class);
    }
}
