<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
      'title',
      'slug',
      'icon',
      'description',
      'is_active',
      'price',
      'group_id'
    ];

    protected $casts = [
      'updated_at' => 'date:d.m.Y',
      'created_at' => 'date:d.m.Y',
    ];

    public function sluggable(): array
    {
      return [
        'slug' => [
          'source' => 'title'
        ]
      ];
    }

    public function getRouteKeyName(): string
    {
      return 'slug';
    }

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
