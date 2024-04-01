<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Theme extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
      'title',
      'slug',
      'content',
      'course_id'
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

    public function course(): BelongsTo {
      return $this->belongsTo(Course::class);
    }

    public function homeworks(): HasMany {
      return $this->hasMany(Homework::class);
    }

    public function polyResources(): MorphMany
    {
      return $this->morphMany(PolyResource::class, 'resourceable');
    }
}
