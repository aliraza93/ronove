<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class Employee extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia,  HasRoles;
    
    protected $guard_name = 'web';
    /**
     * Register the media conversions.
     * 
     * @return null
     * 
     */
    public function registerMediaConversions(?Media $media = null) : void
    {
        $this->addMediaConversion('thumb')
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
            return $this->media->first()->getFullUrl();
        }
        return null;
    }
}
