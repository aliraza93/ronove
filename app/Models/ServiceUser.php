<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ServiceUser extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
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
            return $this->getMedia('ServiceUserAvatars')->first()->getFullUrl();
        }
        return null;
    }

    public function getImageAttribute()
    {
        if ($this->media->first()) {
            return $this->getMedia('ServiceUserAvatars')->first()->getFullUrl();
        }
        return null;
    }

    public function avatar()
    {
        if ($this->media->first()) {
            return $this->media('avatar')->first()->getFullUrl();
        }
        return null;
    }

    public function getAvatarAttribute()
    {
        if ($this->media->first()) {
            return $this->media('avatar')->first()->getFullUrl();
        }
        return null;
    }
}
