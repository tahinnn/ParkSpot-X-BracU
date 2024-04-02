<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\GoogleController;

use App\Http\Controllers\LocationController;

use App\Http\Controllers\ParkingController;
use App\Http\Controllers\ParkingSpotController;
use App\Http\Controllers\ParkingBookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route :: get("/",[HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


## New code
Route :: get("/redirect",[HomeController::class, 'redirect']);

Route :: get("/add_employee_view",[AdminController::class, 'addview']);


Route :: post("/upload_employee",[AdminController::class, 'upload']);

Route :: get("/mybookings",[HomeController::class, 'mybookings']);

//Route::get('/redirect', 'RedirectController@redirect')->name('redirect');
route::get('/search','App\Http\Controllers\HomeController@search');





 
  

  
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
Route::get('google-autocomplete', [GoogleController::class, 'index']);

//Route::get('/location', [GoogleController::class, 'location'])->name('location');

Route::get('/location/{id}', 'App\Http\Controllers\GoogleController@show')->name('location');



Route::get('/parking', [ParkingSpotController::class, 'index'])->name('parking.index');
Route::post('/parking/book', [ParkingSpotController::class, 'book'])->name('parking.book');
Route::get('/parking-layout', [ParkingSpotController::class, 'getParkingLayout']);



##new code (qr code)

Route::post('/qr-scan', [ParkingController::class, 'scan'])->name('qr.scan');
Route::post('/parking/book', [ParkingController::class, 'book'])->name('parking.book');
Route::get('/scan-and-book', [ParkingBookingController::class, 'scanAndBook'])->name('scan_and_book');