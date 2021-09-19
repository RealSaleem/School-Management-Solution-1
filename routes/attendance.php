
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AttendanceController;


Route::group(['middleware' => ['auth', 'has_school']], function () {


Route::get('attendance',				[AttendanceController::class,'index'])->name('attendance.index');
Route::get('attendance/create',		[AttendanceController::class,'create'])->name('attendance.create');


















});