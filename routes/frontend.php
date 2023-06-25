<?php

use App\Http\Controllers\Web\AuthOtpController;
use App\Http\Controllers\Web\BookRideController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\DashController;
use App\Http\Controllers\Web\Gallery\GalleryController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\LocationController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\PaymentController;
use App\Http\Controllers\Web\Product\ProductController;
use App\Http\Controllers\Web\Register\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/login','web.login')->name('web.login');
Route::get('mobile/send/otp/{mobile}', [LoginController::class, 'sendOtpLogin']);
Route::get('mobile/verify/otp/{mobile}/{otp}',[LoginController::class,'verifyLoginOtp']);
Route::view('/signup','web.signup')->name('web.signup');
// Route::post('/registration_user', [UserController::class, 'register'])->name('web.user.registration.save');
// Route::post('/generate', [AuthOtpController::class, 'generate'])->name('generate.otp');

Route::group(['prefix'=>'web/user'],function(){
    Route::get('send/otp/{mobile}',[AuthOtpController::class,'sendOtp']);
    Route::get('verify/otp/{mobile}/{otp}',[AuthOtpController::class,'verifyOtp']);
    Route::post('registration/save',[AuthOtpController::class,'registrationSave'])->name('web.user.registration.save');
});

Route::post('/validate_login', [LoginController::class, 'login'])->name('validate.login');
Route::post('logout', [LoginController::class,'logout'])->name('web.logout');

Route::group(['middleware'=>'auth:web','prefix'=>'users', 'as'=>'users.'],function(){
    Route::get('/book_ride',[BookRideController::class, 'form'])->name('web.bookride');
    Route::post('/booking', [BookRideController::class, 'bookRide'])->name('web.booking');
    Route::post('/hour_booking', [BookRideController::class, 'bookTaxi'])->name('web.taxi.booking');
    Route::get('/checkout/{book_id}/{book_type}/{ride_type?}', [BookRideController::class, 'checkOut'])->name('web.checkout');
    Route::post('/payment', [PaymentController::class, 'pay'])->name('pay_amount');
    Route::get('/payment_verify/{checkout_id}/{book_type}/{ride_type}', [PaymentController::class, 'verify'])->name('web.payment_verify');
    // Dashboard start
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function() {
        Route::get('/dash',[DashController::class,'dashboardView'])->name('view');
        Route::post('/submit', [DashController::class, 'save'])->name('submit');
        Route::get('/dashairtodes',[DashController::class,'dashAirtodes'])->name('dashairtodes');
        Route::get('/dashdeshtoair',[DashController::class,'dashDestoair'])->name('dashdestoair');
        Route::get('/dashhourbook',[DashController::class,'dashHourbook'])->name('dashhourbook');
    });
    // Dashboard end
});

Route::get('/', [IndexController::class, 'index'])->name('web.index');
Route::view('/about','web.about')->name('web.about');
Route::view('/contact','web.contact')->name('web.contact');
Route::post('/search_location', [LocationController::class, 'locationSearch'])->name('web.location.search');
Route::view('/terms','web.terms')->name('web.terms');
Route::view('/privacy','web.privacy')->name('web.privacy');
Route::get('/fetch_price/{hour_id?}', [IndexController::class, 'hourPrice'])->name('fetchPrice');
Route::post('/contact_submit', [ContactController::class, 'save'])->name('contact.submit');
Route::get('/refresh-captcha', [ContactController::class, 'refreshCaptcha']);


Route::view('/disclaimer','web.disclaimer')->name('web.disclaimer');
Route::view('/returnpolicy','web.returnpolicy')->name('web.returnpolicy');
Route::view('/paymentpolicy','web.paymentpolicy')->name('web.paymentpolicy');

// Route::get('/csr', [GalleryController::class, 'webCsr'])->name('web.csr');
// Route::get('/products/{value?}', [ProductController::class, 'product'])->name('web.products');
// Route::get('/contact', [ContactController::class, 'contact'])->name('web.contact');
// Route::post('/contact_submit', [ContactController::class, 'save'])->name('web.contact.submit');

// Route::get('/refresh-captcha', [ContactController::class, 'refreshCaptcha']);