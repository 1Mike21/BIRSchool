<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Homework extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'description',
      'theme_id'
    ];

    public function users(): BelongsToMany {
      return $this->belongsToMany(User::class, 'homework_user', 'homework_id', 'user_id');
    }

    public function theme(): BelongsTo {
      return $this->belongsTo(Theme::class);
    }
}
