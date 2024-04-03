<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Group extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
      'title',
      'slug',
      'icon',
      'description',
      'level',
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

    public function learningSteps(): HasMany {
      return $this->hasMany(LearningStep::class);
    }

    public function courses(): HasMany {
      return $this->hasMany(Course::class);
    }

    public function polyResources(): MorphMany {
      return $this->morphMany(PolyResource::class, 'resourceable');
    }


}
