<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Organization extends Model
{
    use HasFactory, HasRoles;

    public function systems() {
        $this->hasMany(System::class);
    }
}
