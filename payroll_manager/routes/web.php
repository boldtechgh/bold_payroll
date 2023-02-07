<?php

use App\Models\Department;
use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use App\Models\Listing;

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
     return view('welcome');
});

Route::get('/listings',function(){
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/hello', function(){
    return response('<h1>Hello There</h1>',200)
    ->header('Content-Type','text/html')
    ->header('foo','Hello');
});

Route::get('/post/{id}', function($id){
    // dd($id);
    return response('Post ' . $id );
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
    return $request->name.' '. $request->pass;
});  

//single 

Route::get('/listings/{id}', function($id){
    return view('listing',[
        'listing' => Listing::find($id)
    ]);

});

Route::get('/department', function () {
    return view('department', [
        'department' => Department::all()
    ]);
});
Route::get('/attendance',function(){
    return view('attendance',[
        'attendance' => 'Hello',
    ]);
});