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

Route::get('check', 'TestController@show');
Route::post('save', 'TestController@store');
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
    Route::get('system/delete/{id}','SystemController@destroy');
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

Route::group(['middleware' => ['role:organization']], function () {
    Route::get('my-organization', 'OrganizationController@create')->name('MyOrganization');
    Route::get('Organization', 'UserController@AccessOrganizationAndSystems')->name('admin.systems.Organization');

    //Employee
    Route::resource('employee', 'EmployeeController');
    Route::get('employee/delete/{id}','EmployeeController@destroy');
    Route::post('employee/update/{id}','EmployeeController@update');
    Route::get('employee-list','EmployeeController@EmployeeList');
    Route::get('employee-show/{id}','EmployeeController@showProfile');
    Route::get('dashboard', 'EmployeeController@showDashboard')->name('employee.dashboard');
    //EMployee Health
    Route::post('employee-health/{id}','EmployeeController@storeEmployeeHealth');
    Route::post('employee-health-update/{id}','EmployeeController@updateEmployeeHealth');
    //Employee Personal Dwetails
    Route::post('details/{id}','EmployeeController@personalDetails');

    Route::get('assign-permissions/{id}','EmployeeController@PermissionsList');
    Route::post('assign-permissions/update/{employee}/{id}','EmployeeController@assignPermission');
    Route::post('employee-bank-details/{id}','EmployeeController@storeEmployeeBankDetails' );
    //Route::get('assign/{id}','EmployeeController@SystemsList');
    //Route::post('assign/update/{employee}/{id}','EmployeeController@assignSystem');

    //Client
    Route::resource('client', 'ClientController');
    Route::get('client/delete/{id}','ClientController@destroy');
    Route::post('client/update/{id}','ClientController@update');
    Route::get('client-list','ClientController@ClientList');

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
    Route::get('service-user-list','ServiceUserController@ServiceUserList');
    Route::get('service-user-show/{id}','ServiceUserController@showProfile');

    //chat
    Route::get('chat', 'MessageController@showChat');
    Route::get('/private-messages/{client}', 'MessageController@privateMessages')->name('privateMessages');
    Route::post('/private-messages/{client}', 'MessageController@sendPrivateMessage')->name('privateMessages.store');
    Route::get('active-friend/{client}', 'MessageController@getActiveFriend');
});


Route::get('/employee-dashboard', function () {
    return view('employee-dashboard');
});
Route::get('/voice-call', function () {
    return view('voice-call');
});
Route::get('/video-call', function () {
    return view('video-call');
});
Route::get('/outgoing-call', function () {
    return view('outgoing-call');
});
Route::get('/incoming-call', function () {
    return view('incoming-call');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/file-manager', function () {
    return view('file-manager');
});

Route::get('/holidays', function () {
    return view('holidays');
});
Route::get('/leaves', function () {
    return view('leaves');
});
Route::get('/leaves-employee', function () {
    return view('leaves-employee');
});
Route::get('/leave-settings', function () {
    return view('leave-settings');
});
Route::get('/attendance', function () {
    return view('attendance');
});
Route::get('/attendance-employee', function () {
    return view('attendance-employee');
});
Route::get('/departments', function () {
    return view('departments');
});
Route::get('/designations', function () {
    return view('designations');
});
Route::get('/timesheet', function () {
    return view('timesheet');
});
Route::get('/overtime', function () {
    return view('overtime');
});
Route::get('/clients', function () {
    return view('clients');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/tasks', function () {
    return view('tasks');
});
Route::get('/task-board', function () {
    return view('task-board');
});
Route::get('/leads', function () {
    return view('leads');
});
Route::get('/tickets', function () {
    return view('tickets');
});
Route::get('/estimates', function () {
    return view('estimates');
});
Route::get('/invoices', function () {
    return view('invoices');
});
Route::get('/payments', function () {
    return view('payments');
});
Route::get('/expenses', function () {
    return view('expenses');
});
Route::get('/provident-fund', function () {
    return view('provident-fund');
});
Route::get('/taxes', function () {
    return view('taxes');
});
Route::get('/salary', function () {
    return view('salary');
});
Route::get('/salary-view', function () {
    return view('salary-view');
});
Route::get('/payroll-items', function () {
    return view('payroll-items');
});
Route::get('/policies', function () {
    return view('policies');
});
Route::get('/expense-reports', function () {
    return view('expense-reports');
});
Route::get('/invoice-reports', function () {
    return view('invoice-reports');
});
Route::get('/performance-indicator', function () {
    return view('performance-indicator');
});
Route::get('/performance', function () {
    return view('performance');
});
Route::get('/performance-appraisal', function () {
    return view('performance-appraisal');
});
Route::get('/goal-tracking', function () {
    return view('goal-tracking');
});
Route::get('/goal-type', function () {
    return view('goal-type');
});
Route::get('/training', function () {
    return view('training');
});
Route::get('/trainers', function () {
    return view('trainers');
});
Route::get('/training-type', function () {
    return view('training-type');
});
Route::get('/promotion', function () {
    return view('promotion');
});
Route::get('/resignation', function () {
    return view('resignation');
});
Route::get('/termination', function () {
    return view('termination');
});
Route::get('/assets', function () {
    return view('assets');
});
Route::get('/jobs', function () {
    return view('jobs');
});
Route::get('/jobs-applicants', function () {
    return view('jobs-applicants');
});
Route::get('/knowledgebase', function () {
    return view('knowledgebase');
});
Route::get('/activities', function () {
    return view('activities');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/localization', function () {
    return view('localization');
});
Route::get('/theme-settings', function () {
    return view('theme-settings');
});
Route::get('/roles-permissions', function () {
    return view('roles-permissions');
});
Route::get('/email-settings', function () {
    return view('email-settings');
});
Route::get('/invoice-settings', function () {
    return view('invoice-settings');
});
Route::get('/salary-settings', function () {
    return view('salary-settings');
});
Route::get('/notifications-settings', function () {
    return view('notifications-settings');
});
Route::get('/change-password', function () {
    return view('change-password');
});
Route::get('/leave-type', function () {
    return view('leave-type');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/client-profile', function () {
    return view('client-profile');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/otp', function () {
    return view('otp');
});
Route::get('/lock-screen', function () {
    return view('lock-screen');
});
Route::get('/error-404', function () {
    return view('error-404');
});
Route::get('/error-500', function () {
    return view('error-500');
});
Route::get('/subscriptions', function () {
    return view('subscriptions');
});
Route::get('/subscriptions-company', function () {
    return view('subscriptions-company');
});
Route::get('/subscribed-companies', function () {
    return view('subscribed-companies');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/blank-page', function () {
    return view('blank-page');
});
Route::get('/components', function () {
    return view('components');
});
Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
});
Route::get('/form-input-groups', function () {
    return view('form-input-groups');
});
Route::get('/form-horizontal', function () {
    return view('form-horizontal');
});
Route::get('/form-vertical', function () {
    return view('form-vertical');
});
Route::get('/form-mask', function () {
    return view('form-mask');
});
Route::get('/form-validation', function () {
    return view('form-validation');
});
Route::get('/tables-basic', function () {
    return view('tables-basic');
});
Route::get('/data-tables', function () {
    return view('data-tables');
});
Route::get('/create-estimate', function () {
    return view('create-estimate');
});
Route::get('/create-invoice', function () {
    return view('create-invoice');
});
Route::get('/clients-list', function () {
    return view('clients-list');
});
Route::get('/compose', function () {
    return view('compose');
});
Route::get('/edit-estimate', function () {
    return view('edit-estimate');
});
Route::get('/edit-invoice', function () {
    return view('edit-invoice');
});
Route::get('/estimate-view', function () {
    return view('estimate-view');
});
Route::get('/job-view', function () {
    return view('job-view');
});
Route::get('/job-list', function () {
    return view('job-list');
});
Route::get('/job-details', function () {
    return view('job-details');
});
Route::get('/knowledgebase-view', function () {
    return view('knowledgebase-view');
});
Route::get('/mail-view', function () {
    return view('mail-view');
});
Route::get('/project-list', function () {
    return view('project-list');
});
Route::get('/project-view', function () {
    return view('project-view');
});
Route::get('/ticket-view', function () {
    return view('ticket-view');
});
Route::get('/invoice-view', function () {
    return view('invoice-view');
});
Route::get('/employees-list', function () {
    return view('employees-list');
});
