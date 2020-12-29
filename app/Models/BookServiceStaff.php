<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookServiceStaff extends Model
{
    use HasFactory;
    protected $appends = ['employee_name', 'service_user_name', 'employee_schedule_day_and_time'];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function service_user() {
        return $this->belongsTo(ServiceUser::class);
    }

    public function employee_schedule() {
        return $this->belongsTo(EmployeeSchedule::class, 'schedule_id');
    }

    public function getEmployeeNameAttribute()
    {
        return $this->employee->first_name . ' ' . $this->employee->last_name;
    }

    public function getServiceUserNameAttribute()
    {
        return $this->service_user->first_name . ' ' . $this->service_user->last_name;
    }

    public function getEmployeeScheduleDayAndTimeAttribute()
    {
        return $this->employee_schedule->day . ' ' . date("g:i a", strtotime($this->employee_schedule->start_time)) . ' ' . '-' . ' ' . date("g:i a", strtotime($this->employee_schedule->end_time));
    }
}
