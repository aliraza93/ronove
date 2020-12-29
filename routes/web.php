<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/', function () {
    return view('frontend.index');
})->name('index')->middleware('auth');

Route::get('/login','UserController@index');
Route::post('/login','UserController@login')->name('login');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['role:admin']], function () {

    //System
    Route::resource('system', 'SystemController');
    Route::delete('system/delete/{system}','SystemController@destroy');
    Route::post('system/update/{id}','SystemController@update');
    Route::get('system-list','SystemController@SystemList');
    Route::get('permissions/{id}','SystemController@PermissionsList');
    Route::post('permissions/update/{system}/{id}','SystemController@updatePermissions');

    //Organization
    Route::resource('organization', 'OrganizationController');
    Route::get('organization/delete/{id}','OrganizationController@destroy');
    Route::post('organization/update/{id}','OrganizationController@update');
    Route::get('organization-list','OrganizationController@OrganizationList');
    Route::get('assign/{id}','OrganizationController@SystemsList');
    Route::post('assign/update/{organization}/{id}','OrganizationController@assignSystem');

});

Route::group(['middleware' => ['role:organization|Service Staff|Service User']], function () {
    //Route::get('my-organization', 'OrganizationController@create')->name('MyOrganization');
    Route::get('Organization', 'UserController@AccessOrganizationAndSystems')->name('admin.systems.Organization');

    //Employee
    Route::resource('employee', 'EmployeeController');
    Route::get('employee/delete/{id}','EmployeeController@destroy');
    Route::post('employee/update/{id}','EmployeeController@update');
    Route::post('employee/avatar/{employee}','EmployeeController@updateAvatar')->name('employee.avatar');
    Route::get('employee-list','EmployeeController@EmployeeList');
    Route::get('employee-show/{id}','EmployeeController@showProfile');
    Route::get('dashboard', 'EmployeeController@showDashboard')->name('employee.dashboard');
   
    // Medicines
    Route::resource('medicines', 'MedicineController');
    Route::get('medicines/delete/{id}','MedicineController@destroy');
    Route::post('medicines/update/{id}','MedicineController@update');
    Route::get('medicines-list','MedicineController@SystemList');

    // Dosage
    Route::resource('dosage', 'DosageController');
    Route::get('dosage/delete/{id}','DosageController@destroy');
    Route::post('dosage/update/{id}','DosageController@update');
    Route::get('dosage-list','DosageController@DosageList');

    // Routes
    Route::resource('routes', 'RouteController');
    Route::get('routes/delete/{id}','RouteController@destroy');
    Route::post('routes/update/{id}','RouteController@update');
    Route::get('routes-list','RouteController@RouteList');

   //Next of kin
    Route::post('next-kin/{id}','EmployeeController@nextKin');
    Route::post('next-kin-update/{id}','EmployeeController@updateNextKin');

    //EMployee Health
    Route::post('employee-health/{id}','EmployeeController@storeEmployeeHealth');
    Route::post('employee-health-update/{id}','EmployeeController@updateEmployeeHealth');

    //Employee Education
    Route::post('employee-education-details/{id}','EmployeeController@storeEmployeeEducationDetails' );
    Route::post('employee-education-update/{id}','EmployeeController@UpdateEmployeeEducationDetails' );

    //Employee Present
    Route::post('employee-present-details/{id}','EmployeeController@storeEmployeePresentDetails' );
    Route::post('employee-present-update/{id}','EmployeeController@UpdateEmployeePresentDetails' );

    //Employee Training
    Route::post('employee-training-details/{id}','EmployeeController@storeEmployeeTrainingDetails' );
    Route::post('employee-training-update/{id}','EmployeeController@updateEmployeeTrainingDetails' );

    //Employee Personal Details
    Route::post('details/{id}','EmployeeController@personalDetails');
    Route::post('details-update/{id}','EmployeeController@updatePersonalDetails');

    //Employee Schedule
    Route::post('employee-schedule/{id}','EmployeeController@storeEmployeeSchedule');
    Route::get('employee-schedule/{employee}/edit', 'EmployeeController@editEmployeeSchedule');
    Route::post('employee-schedule-update/{id}','EmployeeController@updateEmployeeSchedule');
    Route::post('details-update/{id}','EmployeeController@updatePersonalDetails');
    Route::get('employee-schedule-list','EmployeeController@EmployeeScheduleList');

    Route::get('assign-permissions/{id}','EmployeeController@PermissionsList');
    Route::post('assign-permissions/update/{employee}/{id}','EmployeeController@assignPermission');
    Route::post('employee-bank-details/{id}','EmployeeController@storeEmployeeBankDetails' );
    Route::post('employee-bank-details-update/{id}','EmployeeController@updateEmployeeBankDetails' );
    //Route::get('assign/{id}','EmployeeController@SystemsList');
    //Route::post('assign/update/{employee}/{id}','EmployeeController@assignSystem');

    //Client
    Route::resource('client', 'ClientController');
    Route::get('client/delete/{id}','ClientController@destroy');
    Route::post('client/update/{id}','ClientController@update');
    Route::get('client-list','ClientController@ClientList');

    //File Manager Module
    
    //Project
    Route::resource('project', 'ProjectController');
    Route::get('project/delete/{id}','ProjectController@destroy');
    Route::post('project/update/{id}','ProjectController@update');
    Route::get('project-list','ProjectController@ProjectsList');

    //FIles
    Route::get('files-show/{id}','ProjectController@show');
    Route::post('files-upload', 'FolderController@storeMedia')->name('folders.storeMedia');
    Route::get('download-file/{media}', 'FolderController@downloadFile');
    Route::delete('delete-file/{media}', 'FolderController@deleteFile');
    Route::post('rename-file/{media}/{name}', 'FolderController@renameFile');

    //Folders
    Route::post('folders/{parent_id}', 'FolderController@store');
    Route::get('folder-content-show/{id}','FolderController@show');
    Route::get('folder/delete/{id}','FolderController@destroy');
    Route::post('folder/update/{id}','FolderController@update');
    Route::get('files-list','FolderController@FilesList');
    Route::delete('delete-folder/{folder}', 'FolderController@deleteFolder');
    Route::post('rename-folder/{folder}/{name}', 'FolderController@renameFolder');

    //MAR Sheet
    Route::resource('mar-sheet', 'MarSheetController');
    Route::get('mar-sheet/delete/{id}','MarSheetController@destroy');
    Route::post('mar-sheet/update/{id}','MarSheetController@update');
    Route::get('mar-sheet-list','MarSheetController@MarSheetList');

    //Medicine
    Route::resource('medicine', 'MedicineController');
    Route::get('medicine/delete/{id}','MedicineController@destroy');
    Route::post('medicine/update/{id}','MedicineController@update');
    Route::get('medicine-list','MedicineController@MedicineList');

    //ServiceUser
    Route::resource('service-user', 'ServiceUserController');
    Route::get('service-user/delete/{id}','ServiceUserController@destroy');
    Route::post('service-user/update/{id}','ServiceUserController@update');
    Route::post('service_user/avatar/{service_user}','ServiceUserController@updateAvatar')->name('service_user.avatar');
    Route::get('service-user-list','ServiceUserController@ServiceUserList');
    Route::get('service-user-show/{id}','ServiceUserController@showProfile');
   
    // serviceUserCarePlan
    Route::post('care-plan/{id}','ServiceUserController@serviceCarePlan');
    //updateUserPlan
    Route::post('care-plan-update/{id}','ServiceUserController@updateserviceCarePlan');

    //Book Service Staff
    Route::get('pending-bookings', 'BookServiceStaffController@PendingBookings');
    Route::get('approved-bookings', 'BookServiceStaffController@ApprovedBookings');
    Route::get('pending-bookings-list','BookServiceStaffController@PendingBookingsList');
    Route::get('approved-bookings-list','BookServiceStaffController@ApprovedBookingsList');
    Route::get('service-staff-list','ServiceUserController@ServiceStaffList');
    Route::post('book-service-staff/{employee}/{employee_schedule}/{service_user}', 'BookServiceStaffController@store');
    Route::post('approve-service-staff-booking/{bookServiceStaff}', 'BookServiceStaffController@approveServiceStaffBooking');
    Route::post('reject-service-staff-booking/{bookServiceStaff}', 'BookServiceStaffController@rejectServiceStaffBooking');

    //chat
    Route::get('chat', 'MessageController@showChat');
    Route::get('users', 'MessageController@getEmployees');
    Route::get('user/{id}', 'MessageController@getEmployee');
    Route::get('employee-organization', 'MessageController@getEmployeeOrganization');
    Route::get('private-messages/{user}', 'MessageController@privateMessages')->name('privateMessages');
    Route::post('private-messages/{user}', 'MessageController@sendPrivateMessage')->name('privateMessages.store');
    Route::get('active-friend/{user}', 'MessageController@getActiveFriend');

    //File Manager
    Route::get('file-manager', 'FileManagerController@index');
    // Route::get('users', 'MessageController@getEmployees');
    // Route::get('user/{id}', 'MessageController@getEmployee');
    // Route::get('employee-organization', 'MessageController@getEmployeeOrganization');
    // Route::get('private-messages/{user}', 'MessageController@privateMessages')->name('privateMessages');
    // Route::post('private-messages/{user}', 'MessageController@sendPrivateMessage')->name('privateMessages.store');
    // Route::get('active-friend/{user}', 'MessageController@getActiveFriend');
});
