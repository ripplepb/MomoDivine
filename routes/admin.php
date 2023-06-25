<?php

use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FareController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\RideController;
use App\Http\Controllers\Admin\UserController;

Route::group(['namespace' => 'Admin'],function(){
    Route::get('/admin/login',[LoginController::class,'index'])->name('admin.login_form');    
    Route::post('/login', [LoginController::class,'adminLogin']);
   

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin', 'as'=>'admin.'],function(){
        Route::get('/dashboard', [DashboardController::class,'dashboardView'])->name('dashboard'); 
        Route::post('logout', [LoginController::class,'logout'])->name('logout');

        Route::group(['prefix' => 'location', 'as'=>'location.'], function(){
            Route::get('/list', [LocationController::class, 'list'])->name('list');
            Route::get('/form/{id?}', [LocationController::class, 'form'])->name('form');
            Route::post('/submit', [LocationController::class, 'save'])->name('submit');
            });
        Route::group(['prefix' => 'fare', 'as'=>'fare.'], function(){
            Route::get('/list', [FareController::class, 'list'])->name('list');
            Route::get('/form/{id?}', [FareController::class, 'form'])->name('form');
            Route::post('/submit', [FareController::class, 'save'])->name('submit');
            });
        Route::get('/min_form/{id?}', [LocationController::class, 'minForm'])->name('min_form');
        Route::get('/min_list', [LocationController::class, 'minList'])->name('min_list');
        Route::post('/min_price', [LocationController::class, 'addMin'])->name('min');
        Route::get('/min_status/{id?}', [LocationController::class, 'minStatus'])->name('min_status');

        Route::group(['prefix' => 'rides', 'as' => 'rides.'], function(){
            Route::get('/location_rides', [RideController::class, 'locationRides'])->name('location_rides');
            Route::get('/hour_rides', [RideController::class, 'hourRides'])->name('hour_rides');
        });
        Route::get('/users', [UserController::class, 'list'])->name('user.list');
        
        Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
            Route::get('/list', [ContactController::class, 'list'])->name('list');
            Route::get('/delete/{id}', [ContactController::class, 'delete'])->name('delete');
        });
        Route::get('/complete_pending/{id}/{type}', [RideController::class, 'pay'])->name('complete_pending');
    });
});