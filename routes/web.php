<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth']] , function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
}); 

require __DIR__.'/auth.php';
