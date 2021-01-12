<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
// use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use Spatie\Permission\Traits\HasRoles;


// class User extends Authenticatable implements HasMedia, MustVerifyEmail
class User extends Authenticatable implements  MustVerifyEmail
{
    // use Notifiable, HasRoles, HasMediaTrait, Billable;
    use Notifiable;

    const PROFILE = 'profile-pictures';

    const LANGUAGES = [
        'en' => 'English',
        'es' => 'Spanish',
        'fr' => 'French',
        'de' => 'German',
        'ru' => 'Russian',
        'pt' => 'Portuguese',
        'ar' => 'Arabic',
        'zh' => 'Chinese',
        'tr' => 'Turkish',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'dob',
        'gender',
        'country_id',
        'state_id',
        'city_id',
        'is_active',
        'is_verified',
        'phone',
        'email_verified_at',
        'owner_id',
        'owner_type',
        'language',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'google_plus_url',
        'pinterest_url',
        'region_code',
    ];

    /**
     * @var array
     */
    protected $appends = ['full_name', 'avatar', 'country_name', 'state_name', 'city_name'];

    protected $with = ['media', 'country', 'city', 'state'];

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function getCountryNameAttribute()
    {
        if (! empty($this->country)) {
            return $this->country->name;
        }
    }

    public function getStateNameAttribute()
    {
        if (! empty($this->state)) {
            return $this->state->name;
        }
    }

    public function getCityNameAttribute()
    {
        if (! empty($this->city)) {
            return $this->city->name;
        }
    }

    /**
     * @return mixed
     */
    public function getAvatarAttribute()
    {
        /** @var Media $media */
        $media = $this->getMedia(User::PROFILE)->first();
        if (! empty($media)) {
            return $media->getFullUrl();
        }

        return asset('assets/img/infyom-logo.png');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @var array
     */
    public static $messages = [
        'email.regex' => 'Please enter valid email.',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return string
     */
    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name).' '.ucfirst($this->last_name);
    }

    /**
     * @return HasOne
     */
    public function candidate()
    {
        return $this->hasOne(Candidate::class, 'user_id', 'id');
    }

    /**
     * @return HasOne
     */
    public function company()
    {
        return $this->hasOne(Company::class, 'user_id', 'id');
    }

    /**
     * @return BelongsToMany
     */
    public function candidateSkill()
    {
        return $this->belongsToMany(Skill::class, 'candidate_skills', 'user_id', 'skill_id');
    }

    /**
     *
     * @return BelongsToMany
     */
    public function candidateLanguage()
    {
        return $this->belongsToMany(Language::class, 'candidate_language', 'user_id', 'language_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function followings()
    {
        return $this->hasMany(FavouriteCompany::class, 'user_id');
    }

    /**
     * @return bool
     */
    public function getIsOnlineProfileAvailbalAttribute()
    {
        if (empty($this->facebook_url) && empty($this->twitter_url) && empty($this->linkedin_url) && empty($this->google_plus_url) && empty($this->pinterest_url)) {
            return false;
        }

        return true;
    }
}
