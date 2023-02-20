<?php

use App\Models\Department;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AllowanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeductionController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\PayrollTypeController;
use App\Http\Controllers\PayrollItemsController;
use App\Http\Controllers\EmployeeAllowanceController;
use App\Http\Controllers\EmployeeDeductionController;

/*
|-----------A---------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//dashboard
 Route::get('/', [DashboardController::class, 'index']);

 Route::get('/employee_distro', [DashboardController::class, 'employee_distro']);

//all departments
Route::get('/departments', [DepartmentController::class, 'index']);

// Show create department form
Route::get('/departments/create', [DepartmentController::class, 'create']);

// Store department data
Route::post('/departments', [DepartmentController::class, 'store']);

// single departments
Route::get('/department/{department}/edit', [DepartmentController::class, 'edit']);

// Update department data
Route::put('/departments/{department}', [DepartmentController::class, 'update']);

//Delete designation
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy']);



//all designations
Route::get('/designations', [DesignationController::class, 'index']);

// Show create designation form
Route::get('/designations/create', [DesignationController::class, 'create']);

// Store designation data
Route::post('/designations', [DesignationController::class, 'store']);

// single designation
Route::get('/designations/{designation}/edit', [DesignationController::class, 'edit']);

// Update designation data
Route::put('/designations/{designation}', [DesignationController::class, 'update']);


//Delete designation
Route::delete('/designations/{designation}', [DesignationController::class, 'destroy']);



//all allowances
Route::get('/allowances', [AllowanceController::class, 'index']);

// Show create department form
Route::get('/allowances/create', [AllowanceController::class, 'create']);

// Store department data
Route::post('/allowances', [AllowanceController::class, 'store']);

// single allowances
Route::get('/allowances/{allowance}/edit', [AllowanceController::class, 'edit']);

// Update allowance data
Route::put('/allowances/{allowance}', [AllowanceController::class, 'update']);
// Delete allowance data
Route::delete('/allowances/{allowance}', [AllowanceController::class, 'destroy']);

    //DEDUCTIONS ROUTE

//all deductions
Route::get('/deductions', [DeductionController::class, 'index']);

// Show create deductions form
Route::get('/deductions/create', [DeductionController::class, 'create']);

// Store deductions data
Route::post('/deductions', [DeductionController::class, 'store']);

// single deductions
Route::get('/deductions/{deduction}/edit', [DeductionController::class, 'edit']);

// Update deductions data
Route::put('/deductions/{deduction}', [DeductionController::class, 'update']);
// Delete deductions data
Route::delete('/deductions/{deduction}', [DeductionController::class, 'destroy']);



//all employees
Route::get('/employees', [EmployeeController::class, 'index']);

// Show create employees form
Route::get('/employees/create', [EmployeeController::class, 'create']);

// Store employees data
Route::post('/employees', [EmployeeController::class, 'store']);

// single employees
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit']);

// Update employees data
Route::put('/employees/{employee}', [EmployeeController::class, 'update']);

// Delete deductions data
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']);


//all users
Route::get('/users', [UserController::class, 'index']);

// Show create users form
Route::get('/register', [UserController::class, 'create']);

// Store employees data
Route::post('/users', [UserController::class, 'store']);

// single employees
Route::get('/users/{user}/edit', [UserController::class, 'edit']);

// Update employees data
Route::put('/users/{user}', [USerController::class, 'update']);

// Delete deductions data
Route::delete('/users/{user}', [UserController::class, 'destroy']);


//Calendar Routes
Route::get('calendar-event', [CalendarController::class, 'index']);

Route::post('calendar-crud-ajax', [CalendarController::class, 'calendarEvents']);

//Employee Allowances

//all employee allowances
Route::get('/employee_allowances', [EmployeeAllowanceController::class, 'index']);

//Show create employees form
Route::get('/employee_allowances/create', [EmployeeAllowanceController::class, 'create']);

//Store employee allowances
Route::post('/employee_allowances', [EmployeeAllowanceController::class, 'store']);

//Show edit employees form
Route::get('/employee_allowances/{employee_allowance}/edit', [EmployeeAllowanceController::class, 'edit']);

//Delete employee allowances
Route::delete('/employee_allowances/{employee_allowance}', [EmployeeAllowanceController::class, 'destroy']);


//Employee Deductions

//all employee deductions
Route::get('/employee_deductions', [EmployeeDeductionController::class, 'index']);

//Show create employees form
Route::get('/employee_deductions/create', [EmployeeDeductionController::class, 'create']);

//Store employee deductions
Route::post('/employee_deductions', [EmployeeDeductionController::class, 'store']);

//Show edit employees form
Route::get('/employee_deductions/{employee_deduction}/edit', [EmployeeDeductionController::class, 'edit']);

//Delete employee deductions
Route::delete('/employee_deductions/{employee_deduction}', [EmployeeDeductionController::class, 'destroy']);


//Payroll Types

//all payroll types
Route::get('/payroll_types', [PayrollTypeController::class, 'index']);

//Show create payroll type form
Route::get('/payroll_types/create', [PayrollTypeController::class, 'create']);

//Store payroll type
Route::post('/payroll_types', [PayrollTypeController::class, 'store']);

//Show edit payroll type form
Route::get('/payroll_types/{payroll_type}/edit', [PayrollTypeController::class, 'edit']);

//Update payroll type
Route::put('/payroll_types/{payroll_type}', [PayrollTypeController::class, 'update']);

//Delete payroll type
Route::delete('/payroll_types/{payroll_type}', [PayrollTypeController::class, 'destroy']);


//Payrolls

//all payrolls
Route::get('/payrolls', [PayrollController::class, 'index']);

//Show create payroll  form
Route::get('/payrolls/create', [PayrollController::class, 'create']);

//Store payroll 
Route::post('/payrolls', [PayrollController::class, 'store']);

//show single payroll
Route::get('/payrolls/{payroll}/show', [PayrollController::class, 'show']);

//Show edit payroll form
Route::get('/payrolls/{payroll}/edit', [PayrollController::class, 'edit']);

//Update payroll 
Route::put('/payrolls/{payroll}', [PayrollController::class, 'update']);

//Update payroll status 
Route::get('/payrolls/{payroll}/status', [PayrollController::class, 'updateStatus']);

//Delete payroll 
Route::delete('/payrolls/{payroll}', [PayrollController::class, 'destroy']);


//Payroll Items

//Store payroll items 
Route::get('/payroll_items/{payroll}', [PayrollItemsController::class, 'store']);

//Show single payroll item
Route::get('/payroll_items/{payroll_item}/show', [PayrollItemsController::class, 'show']); 



