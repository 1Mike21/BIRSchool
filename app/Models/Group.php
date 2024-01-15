<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'icon',
      'description',
      'level',
    ];

    public function stepsLearning(): HasMany {
      return $this->hasMany(StepLearning::class);
    }

    public function courses(): HasMany {
      return $this->hasMany(Course::class);
    }

    public function polyResources(): MorphMany {
      return $this->morphMany(PolyResource::class, 'resourceable');
    }


}
