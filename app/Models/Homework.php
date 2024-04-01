<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Homework extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
      'title',
      'slug',
      'description',
      'theme_id'
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
      return $this->belongsToMany(User::class, 'homework_user', 'homework_id', 'user_id');
    }

    public function theme(): BelongsTo {
      return $this->belongsTo(Theme::class);
    }

    public function polyResources(): MorphMany
    {
      return $this->morphMany(PolyResource::class, 'resourceable');
    }
}
