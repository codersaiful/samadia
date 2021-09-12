<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth']] , function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('student', [StudentController::class, 'index'])->name('student.index');
    Route::post('students', [StudentController::class, 'store'])->name('student.store');
}); 

require __DIR__.'/auth.php';
