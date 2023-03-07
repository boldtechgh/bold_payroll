<?php

use App\Models\Department;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ReportsController;
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

Route::get('/login',[UserController::class,'login'])->name('login');

Route::post('/logout',[UserController::class,'logout']);
Route::post('/users/authenticate',[UserController::class,'authenticate']);

//dashboard
 Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

 Route::get('/employee_distro', [DashboardController::class, 'employee_distro'])->middleware('auth');

//all departments
Route::get('/departments', [DepartmentController::class, 'index'])->middleware('auth');

// Show create department form
Route::get('/departments/create', [DepartmentController::class, 'create'])->middleware('auth');

// Store department data
Route::post('/departments', [DepartmentController::class, 'store'])->middleware('auth');

// single departments
Route::get('/department/{department}/edit', [DepartmentController::class, 'edit'])->middleware('auth');

// Update department data
Route::put('/departments/{department}', [DepartmentController::class, 'update'])->middleware('auth');

//Delete designation
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->middleware('auth');



//all designations
Route::get('/designations', [DesignationController::class, 'index'])->middleware('auth');

// Show create designation form
Route::get('/designations/create', [DesignationController::class, 'create'])->middleware('auth');

// Store designation data
Route::post('/designations', [DesignationController::class, 'store'])->middleware('auth');

// single designation
Route::get('/designations/{designation}/edit', [DesignationController::class, 'edit'])->middleware('auth');

// Update designation data
Route::put('/designations/{designation}', [DesignationController::class, 'update'])->middleware('auth');


//Delete designation
Route::delete('/designations/{designation}', [DesignationController::class, 'destroy'])->middleware('auth');



//all allowances
Route::get('/allowances', [AllowanceController::class, 'index'])->middleware('auth');

// Show create department form
Route::get('/allowances/create', [AllowanceController::class, 'create'])->middleware('auth');

// Store department data
Route::post('/allowances', [AllowanceController::class, 'store'])->middleware('auth');

// single allowances
Route::get('/allowances/{allowance}/edit', [AllowanceController::class, 'edit'])->middleware('auth');

// Update allowance data
Route::put('/allowances/{allowance}', [AllowanceController::class, 'update'])->middleware('auth');
// Delete allowance data
Route::delete('/allowances/{allowance}', [AllowanceController::class, 'destroy'])->middleware('auth');

    //DEDUCTIONS ROUTE

//all deductions
Route::get('/deductions', [DeductionController::class, 'index'])->middleware('auth');

// Show create deductions form
Route::get('/deductions/create', [DeductionController::class, 'create'])->middleware('auth');

// Store deductions data
Route::post('/deductions', [DeductionController::class, 'store'])->middleware('auth');

// single deductions
Route::get('/deductions/{deduction}/edit', [DeductionController::class, 'edit'])->middleware('auth');

// Update deductions data
Route::put('/deductions/{deduction}', [DeductionController::class, 'update'])->middleware('auth');
// Delete deductions data
Route::delete('/deductions/{deduction}', [DeductionController::class, 'destroy'])->middleware('auth');



//all employees
Route::get('/employees', [EmployeeController::class, 'index'])->middleware('auth');

// Show create employees form
Route::get('/employees/create', [EmployeeController::class, 'create'])->middleware('auth');

// Store employees data
Route::post('/employees', [EmployeeController::class, 'store'])->middleware('auth');

// single employees
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->middleware('auth');

// Update employees data
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->middleware('auth');

// Delete deductions data
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->middleware('auth');


//all users
Route::get('/users', [UserController::class, 'index'])->middleware('auth');

// Show create users form
Route::get('/register', [UserController::class, 'create'])->middleware('auth');

// Store employees data
Route::post('/users', [UserController::class, 'store'])->middleware('auth');

// single employees
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->middleware('auth');

// Update employees data
Route::put('/users/{user}', [USerController::class, 'update'])->middleware('auth');

// Delete deductions data
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware('auth');


//Calendar Routes
Route::get('calendar-event', [CalendarController::class, 'index'])->middleware('auth');

Route::post('calendar-crud-ajax', [CalendarController::class, 'calendarEvents'])->middleware('auth');

//Employee Allowances

//all employee allowances
Route::get('/employee_allowances', [EmployeeAllowanceController::class, 'index'])->middleware('auth');

//Show create employees form
Route::get('/employee_allowances/create', [EmployeeAllowanceController::class, 'create'])->middleware('auth');

//Store employee allowances
Route::post('/employee_allowances', [EmployeeAllowanceController::class, 'store'])->middleware('auth');

//Show edit employees form
Route::get('/employee_allowances/{employee_allowance}/edit', [EmployeeAllowanceController::class, 'edit'])->middleware('auth');

//Delete employee allowances
Route::delete('/employee_allowances/{employee_allowance}', [EmployeeAllowanceController::class, 'destroy'])->middleware('auth');


//Employee Deductions

//all employee deductions
Route::get('/employee_deductions', [EmployeeDeductionController::class, 'index'])->middleware('auth');

//Show create employees form
Route::get('/employee_deductions/create', [EmployeeDeductionController::class, 'create'])->middleware('auth');

//Store employee deductions
Route::post('/employee_deductions', [EmployeeDeductionController::class, 'store'])->middleware('auth');

//Show edit employees form
Route::get('/employee_deductions/{employee_deduction}/edit', [EmployeeDeductionController::class, 'edit'])->middleware('auth');

//Delete employee deductions
Route::delete('/employee_deductions/{employee_deduction}', [EmployeeDeductionController::class, 'destroy'])->middleware('auth');


//Payroll Types

//all payroll types
Route::get('/payroll_types', [PayrollTypeController::class, 'index'])->middleware('auth');

//Show create payroll type form
Route::get('/payroll_types/create', [PayrollTypeController::class, 'create'])->middleware('auth');

//Store payroll type
Route::post('/payroll_types', [PayrollTypeController::class, 'store'])->middleware('auth');

//Show edit payroll type form
Route::get('/payroll_types/{payroll_type}/edit', [PayrollTypeController::class, 'edit'])->middleware('auth');

//Update payroll type
Route::put('/payroll_types/{payroll_type}', [PayrollTypeController::class, 'update'])->middleware('auth');

//Delete payroll type
Route::delete('/payroll_types/{payroll_type}', [PayrollTypeController::class, 'destroy'])->middleware('auth');


//Payrolls

//all payrolls
Route::get('/payrolls', [PayrollController::class, 'index'])->middleware('auth');

//Show create payroll  form
Route::get('/payrolls/create', [PayrollController::class, 'create'])->middleware('auth');

//Store payroll 
Route::post('/payrolls', [PayrollController::class, 'store'])->middleware('auth');

//show single payroll
Route::get('/payrolls/{payroll}/show', [PayrollController::class, 'show'])->middleware('auth');

//Show edit payroll form
Route::get('/payrolls/{payroll}/edit', [PayrollController::class, 'edit'])->middleware('auth');

//Update payroll 
Route::put('/payrolls/{payroll}', [PayrollController::class, 'update'])->middleware('auth');

//Update payroll status 
Route::get('/payrolls/{payroll}/status', [PayrollController::class, 'updateStatus'])->middleware('auth');

//Delete payroll 
Route::delete('/payrolls/{payroll}', [PayrollController::class, 'destroy'])->middleware('auth');


//Payroll Items

//Store payroll items 
Route::get('/payroll_items/{payroll}', [PayrollItemsController::class, 'store'])->middleware('auth');

//Show single payroll item
Route::get('/payroll_items/{payroll_item}/show', [PayrollItemsController::class, 'show'])->middleware('auth'); 


//Reports


Route::get('/reports', [ReportsController::class, 'index'])->middleware('auth');



