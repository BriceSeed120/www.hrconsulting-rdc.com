<?php

use App\Http\Controllers\Dashboard\BannerController;
use App\Http\Controllers\Dashboard\CouponController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('front.index');
// });
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::resource('editor', CKEditorController::class); 
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
Route::get('/page/{id}', [FrontController::class, 'page'])->name('frontpage');


Route::group(['prefix' => 'dashboard', 'middleware' => ['web', 'auth']], function() {
    Route::get('/', function () {
        return view('dashboard.home.index');
    })->name('dashboard');

    Route::resources([
        'banners' => BannerController::class,
        'bookings' => \App\Http\Controllers\Dashboard\BookingController::class,
        'customers' => \App\Http\Controllers\Dashboard\CustomerController::class,
        'restaurants' => \App\Http\Controllers\Dashboard\RestaurantController::class,
        'reports' => \App\Http\Controllers\Dashboard\ReportController::class,
        'coupons' => CouponController::class,
        'facilities' => \App\Http\Controllers\Dashboard\FacilityController::class
    ]);

    Route::group(['prefix' => 'administration'], function() {
       Route::resources([
           'users' => UserController::class,
           'menus' => \App\Http\Controllers\Dashboard\MenuController::class,
           'roles' => \App\Http\Controllers\Dashboard\RoleController::class,
           'settings' => SettingController::class
       ]);
    });
});


require __DIR__.'/auth.php';
