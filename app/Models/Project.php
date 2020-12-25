<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $appends = [
        'files',
        'images',
        'thumbnail'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }

    public function parentDirectory()
    {
        return $this->hasOne(Folder::class)->whereNull('parent_id');
    }

    public function getFilesAttribute()
    {
        if ($this->parentDirectory) {
            return $this->parentDirectory->files;
        }

        return collect();
    }

    public function getImagesAttribute()
    {
        if ($this->parentDirectory) {
            return $this->parentDirectory->images;
        }

        return collect();
    }

    public function getThumbnailAttribute()
    {
        if ($this->thumbnail_id) {
            $image = Media::firstWhere('id', $this->thumbnail_id);
            $image->thumbnail = substr($image->mime_type, 0, 5) == 'image' ? $image->getUrl('thumb') : null;
        } else {
            $image = $this->images->first();
        }

        return $image;
    }
}
