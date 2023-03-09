<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConversationController;

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

Route::get('/', [HomeController::class, 'welcome']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/messages', [HomeController::class, 'messages']);

Route::get('/profile', [HomeController::class, 'profile']);

Route::get('/society', [HomeController::class, 'society']);

Route::get('/profile1', [HomeController::class, 'profile1']);

Route::get('/profile2', [HomeController::class, 'profile2']);

Route::get('/profile3', [HomeController::class, 'profile3']);

Route::get('/page/{page}', function ($page){

    if  (view()->exists('pages.'.$page)) {
        return view('pages.'.$page);
    }else{
        abort(404);
    }
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/conversations', ConversationController::class)
    ->only(['index', 'store', 'show']);
});


