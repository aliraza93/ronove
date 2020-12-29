<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSchedule extends Model
{
    use HasFactory;
    protected $appends = ['name'];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function getNameAttribute()
    {
        return $this->employee->first_name . ' ' . $this->employee->last_name;
    }

    public function bookings()
    {
        return $this->hasMany(BookServiceStaff::class);
    }
}
