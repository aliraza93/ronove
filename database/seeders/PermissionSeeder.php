<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //Apps
        Permission::create(['name' => 'Apps']);
        Permission::create(['name' => 'Chat']);
        Permission::create(['name' => 'Calls']);
        Permission::create(['name' => 'Calendar']);
        Permission::create(['name' => 'Contacts']);
        Permission::create(['name' => 'Email']);
        Permission::create(['name' => 'File Manager']);
        
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Job Applications']);
        Permission::create(['name' => 'Post a Job']);
        Permission::create(['name' => 'List a Job']);
        Permission::create(['name' => 'Job Categories']);
        Permission::create(['name' => 'Job Types']);
        Permission::create(['name' => 'All Regions']);
        Permission::create(['name' => 'Pay Durations']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'All Employees']);
        Permission::create(['name' => 'Holidays']);
        Permission::create(['name' => 'Leaves(Admin)']);
        Permission::create(['name' => 'Leaves(Employee)']);
        Permission::create(['name' => 'Leave Settings']);
        Permission::create(['name' => 'Leaves Types']);
        Permission::create(['name' => 'Attendance(Admin)']);
        Permission::create(['name' => 'Attendance(Employee)']);
        Permission::create(['name' => 'Departments']);
        Permission::create(['name' => 'Designations']);
        Permission::create(['name' => 'Timesheet']);
        Permission::create(['name' => 'Overtime']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Clients']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Projects']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Tasks']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Leads']);
        Permission::create(['name' => 'Tickets']);
        Permission::create(['name' => 'Task Board']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Availabilities']);
        Permission::create(['name' => 'Time Sheet']);
        Permission::create(['name' => 'Over Time']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Amend Pay Rates']);
        Permission::create(['name' => 'Invoice Report']);
        Permission::create(['name' => 'payroll Reports']);
        Permission::create(['name' => 'Expense Report']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Estimates']);
        Permission::create(['name' => 'Invoices']);
        Permission::create(['name' => 'Payments']);
        Permission::create(['name' => 'Expenses']);
        Permission::create(['name' => 'Provident Fund']);
        Permission::create(['name' => 'Taxes']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Employee Salary']);
        Permission::create(['name' => 'Pay Slip']);
        Permission::create(['name' => 'Payroll Items']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Medicines']);
        Permission::create(['name' => 'Dosage']);
        Permission::create(['name' => 'Routes']);
        //      ------------------------------------------------------------------------------
        
        Permission::create(['name' => 'Policies']);
        
        Permission::create(['name' => 'Bookings/Shifts']);
        Permission::create(['name' => 'Office Staff']);
        Permission::create(['name' => 'Service Staff']);
        Permission::create(['name' => 'Service Users']);
        Permission::create(['name' => 'Subscribers']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Performance Indicator']);
        Permission::create(['name' => 'Performance Review']);
        Permission::create(['name' => 'Performance Appraisal']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Goals List']);
        Permission::create(['name' => 'Goals Type']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'List']);
        Permission::create(['name' => 'Trainers']);
        Permission::create(['name' => 'Training Type']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Rewards&Vouchers']);
        Permission::create(['name' => 'Resignation']);
        Permission::create(['name' => 'Termination List']);
        Permission::create(['name' => 'Termination Type']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Assets']);
        Permission::create(['name' => 'KnowledgeBase']);
        //      ------------------------------------------------------------------------------
        Permission::create(['name' => 'Generate Orders']);
        Permission::create(['name' => 'Health&Safety']);
        Permission::create(['name' => 'Marketing']);
        Permission::create(['name' => 'Price List']);
        Permission::create(['name' => 'Sub Contractor']);
        Permission::create(['name' => 'Completed Courses']);
        Permission::create(['name' => 'Calender']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'admin']);

        $role2 = Role::create(['name' => 'organization']);

        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::find(1)->first();
        $user->assignRole($role1);
    }
}
