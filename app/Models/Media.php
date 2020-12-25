<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'CreatedAtHumanReadable'
    ];

    public function getCreatedAtHumanReadableAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
