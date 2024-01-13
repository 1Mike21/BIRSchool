<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'icon',
      'description',
      'price',
      'group_id'
    ];

    public function users(): BelongsToMany {
      return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id');
    }

    public function group(): BelongsTo {
      return $this->belongsTo(Group::class);
    }

    public function themes(): HasMany {
      return $this->hasMany(Theme::class);
    }
}
