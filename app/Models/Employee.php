<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Employee extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    /**
     * Register the media conversions.
     * 
     * @return null
     * 
     */
    protected $appends = ['image', 'avatar'];

    public function registerMediaConversions(?Media $media = null) : void
    {
        $this->addMediaConversion('avatar')
              ->width(100)
              ->height(100);
    }

    /**
     * 
     * Return the image for this channel
     * 
     * @return string|null
     * 
     */
    public function image()
    {
        if ($this->media->first()) {
            return $this->getMedia('EmployeeAvatars')->first()->getFullUrl();
        }
        return null;
    }

    public function getImageAttribute()
    {
        if ($this->media->first()) {
            return $this->getMedia('EmployeeAvatars')->first()->getFullUrl();
        }
        return null;
    }

    public function avatar()
    {
        if ($this->media->first()) {
            return $this->getMedia('EmployeeAvatars')->first()->getFullUrl('avatar');
        }
        return null;
    }

    public function getAvatarAttribute()
    {
        if ($this->media->first()) {
            return $this->getMedia('EmployeeAvatars')->first()->getFullUrl('avatar');
        }
        return null;
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function schedules()
    {
        return $this->hasMany(EmployeeSchedule::class);
    }

    public function bookings()
    {
        return $this->hasMany(BookServiceStaff::class);
    }
}
