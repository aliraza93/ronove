<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class System extends Model
{
    use HasFactory, HasRoles;
    protected $guard_name = 'web';
    public $fillable = ['organization_id'];
    
    public function organizations() {
        return $this->belongsToMany(Organization::class, 'organization_system');
    }
}
