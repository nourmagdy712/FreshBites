<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
})->name('welcome');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/vegan',[UserController::class,'showVegan'])->name('vegan');
Route::get('/keto', [UserController::class,'showKeto'])->name('keto');
Route::get('/dash', [UserController::class,'showDash'])->name('dash');

Route::post('/reserve',[UserController::class,'reserve'])->name('reserve');
Route::post('/feedback',[UserController::class,'sendFeedback'])->name('feedback');

/*Route::view('/signin','User.sign in')->name('signin');*/
Route::get('/signin', function () {
    return view('User.sign in');
})->name('signin');
Route::post('/signin',[UserController::class,'userlog'])->name('logform');
Route::post('user/register',[UserController::class,'createuser'])->name('registerform');
Route::get('/register', function () {
    return view('User.sign up');
})->name('signup');


Route::middleware(['auth'])->group(function(){
Route::get('/home', function () {
        return view('home');
    })->name('home');

Route::get('/profile', function () {
    return view('User.profile');
})->name('profile');

Route::get('/cart', function () {
    return view('User.cart');
})->name('cart');  
Route::put('users/profile/update',[UserController::class,'updateprofile'])->name('update');
Route::post('/logout',[UserController::class,'destroy'])->name('logout');
Route::get('/checkout', [UserController::class,'checkout'])->name('checkout');
Route::get('/myorders', [UserController::class,'myorders'])->name('myorders');
});



require __DIR__ .'/admin.php';
