<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
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
    $estado = false;
    if (auth()->user()) {
        session(['user' => null]);
        session(['driver' => null]);
        $estado = true;
    }
    Auth::logout();
    return view('welcome', compact('estado'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('login/{driver}', [LoginController::class,'redirectToProvider'])->name('login.driver');
Route::get('login/{driver}/callback', [LoginController::class, 'handleProviderCallback']);