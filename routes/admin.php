<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::controller(AdminController::class)->group(function () {
    Route::get('/reservations','viewReservations')->name('reservations');
    Route::post('/tableN/{id}','giveTable')->name('tableN');
    Route::get('/feedbacks','viewFeedbacks')->name('feedbacks');
    Route::get('/orders','viewOrders')->name('orders');
    Route::post('/newReservation','newReservation')->name('newReservation');
    Route::post('/addProduct','addProduct')->name('addProduct');
});


Route::prefix('admin')->name('admin.')->group(function(){
     Route::view('/login','Admin.log in')->name('login');
     Route::post('/login',[Authcontroller::class,'store']);

 Route::middleware(['auth:admin'])->group(function(){
    Route::post('/logout',[Authcontroller::class,'destroy'])->name('logout');
    Route::get('/dashboard',[AdminController::class,'showProducts'])->name('dashboard');
     });
});