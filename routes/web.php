<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AttendanceController;

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

Route::middleware('auth')->group(function () {
  Route::get('/', [AttendanceController::class, 'index'])->name('attendances.index');
  Route::post('/job-in', [AttendanceController::class, 'jobIn'])->name('attendances.jobIn');
  Route::post('/job-out', [AttendanceController::class, 'jobOut'])->name('attendances.jobOut');

  Route::get('/dashboard', function () {
    return view('dashboard')->name('dashboard');
  });
});



require __DIR__.'/auth.php';
