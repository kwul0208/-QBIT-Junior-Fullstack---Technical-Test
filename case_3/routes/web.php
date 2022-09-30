<?php

use App\Http\Controllers\AuthenticationController;
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

Route::get('/', function () {
    return view('landing.page.page1');
});
Route::get('/home', function () {
    return view('landing.page.page1');
});

Route::group([
    'middleware' => 'auth'
], function(){
    // Route::get('/logn', [AuthenticationController::class, 'login']);
    Route::get('/dashboard', function(){
        return 'dashboard';
    });

});

Route::group([
    'middleware' => 'guest'
], function(){
    Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
    Route::post('/login', [AuthenticationController::class, 'storeLogin']);
});


