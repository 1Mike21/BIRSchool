<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'icon',
      'description',
      'level',
    ];

    public function stepslearning(): HasMany {
      return $this->hasMany(StepLearning::class);
    }

    public function courses(): HasMany {
      return $this->hasMany(Course::class);
    }

    public function groupresources(): HasMany {
      return $this->hasMany(GroupResource::class);
    }


}
