<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
      'comment',
      'is_published',
      'user_id'
    ];

    protected $casts = [
      'is_published' => 'boolean',
    ];

    public function user(): BelongsTo {
      return $this->belongsTo(User::class);
    }
}
