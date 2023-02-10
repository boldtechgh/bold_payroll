<?php

use App\Models\Department;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;

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



 Route::get('/', function () {
     return view('dashboard');
});

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




Route::get('/allowances', function () {
    return view('allowances.index');
});

// Route::get('/listings',function(){
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => Listing::all()
//     ]);
// });

// Route::get('/hello', function(){
//     return response('<h1>Hello There</h1>',200)
//     ->header('Content-Type','text/html')
//     ->header('foo','Hello');
// });

// Route::get('/post/{id}', function($id){
//     // dd($id);
//     return response('Post ' . $id );
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name.' '. $request->pass;
// });  

// //single 

// Route::get('/listings/{id}', function($id){
//     return view('listing',[
//         'listing' => Listing::find($id)
//     ]);

// });

// =Route::get('/department', function () {
//     return view('department', [
//         'department' => Department::all()
//     ]);
// });
// Route::get('/attendance',function(){
//     return view('attendance',[
//         'attendance' => 'Hello',
//     ]);
// });