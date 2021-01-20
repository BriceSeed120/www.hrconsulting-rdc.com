<?php

use App\Http\Controllers\Dashboard\BannerController;
use App\Http\Controllers\Dashboard\CouponController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Dashboard\RoomsSuitsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('editor', [CKEditorController::class, 'index']);
Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('upload');
Route::get('/page/{id}/{category}', [FrontController::class, 'page'])->name('frontpage');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/contactstore', [FrontController::class, 'contactstore'])->name('contactstore');
Route::get('/booking', [FrontController::class, 'booking'])->name('booking');



// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);



Route::group(['prefix' => 'dashboard', 'middleware' => ['web', 'auth']], function() {
    Route::get('/', function () {
        return view('dashboard.home.index');
    })->name('dashboard');

    Route::resources([
        'banners' => BannerController::class,
        'bookings' => \App\Http\Controllers\Dashboard\BookingController::class,
        'customers' => \App\Http\Controllers\Dashboard\CustomerController::class,
        'resturants' => \App\Http\Controllers\Dashboard\ResturantsController::class,
        'reports' => \App\Http\Controllers\Dashboard\ReportController::class,
        'coupons' => CouponController::class,
        'facilities' => \App\Http\Controllers\Dashboard\FacilitiesController::class,
        'meetings_events' => \App\Http\Controllers\Dashboard\MeetingseventsController::class,
        'roomssuits' => RoomsSuitsController::class,
    ]);

    Route::group(['prefix' => 'administration'], function() {
       Route::resources([
           'users' => UserController::class,
           'menus' => \App\Http\Controllers\Dashboard\MenuController::class,
           'roles' => \App\Http\Controllers\Dashboard\RoleController::class,
           'settings' => SettingController::class,
           'orders' => \App\Http\Controllers\Dashboard\OrdersController::class,
       ]);
    });
    
});

require __DIR__.'/auth.php';
