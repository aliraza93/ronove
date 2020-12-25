<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $dates = ['sentMessageOn'];
    protected $appends = ['SentMessageOnHumanReadable'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function getSentMessageOnHumanReadableAttribute()
    {
        return $this->created_at->diffForHumans();
    }

}
