<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Organization extends Model
{
    use HasFactory, HasRoles;
    public $fillable = ['organization_id'];
    public function systems() {
        return $this->belongsToMany(System::class, 'organization_system');
    }

    public function employees() {
        return $this->hasMany(Employee::class);
    }
}
