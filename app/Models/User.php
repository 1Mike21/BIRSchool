<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'phone_number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_is_verified' => 'boolean',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function courses(): BelongsToMany {
      return $this->belongsToMany(Course::class, 'course_user', 'user_id', 'course_id')->withPivot('with_mentor', 'is_completed', 'progress');
    }

    public function homeworks(): BelongsToMany {
      return $this->belongsToMany(Homework::class, 'homework_user', 'user_id', 'homework_id')->withPivot('answer', 'is_checked', 'comment', 'due_date');
    }

    public function codeSpaces(): HasMany {
      return $this->hasMany(CodeSpace::class);
    }

    public function certificates(): HasMany {
      return $this->hasMany(Certificate::class);
    }

    public function reviews(): hasMany {
      return $this->hasMany(Review::class);
    }

    public function polyResources(): MorphMany
    {
      return $this->morphMany(PolyResource::class, 'resourceable');
    }


}
