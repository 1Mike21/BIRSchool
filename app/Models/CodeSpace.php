<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CodeSpace extends Model
{
    use HasFactory;

    protected $fillable = [
      'language',
      'code',
      'user_id'
    ];

    public function user(): BelongsTo {
      return $this->belongsTo(User::class);
    }
}
