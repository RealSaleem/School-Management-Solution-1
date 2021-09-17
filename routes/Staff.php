
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Staff\StaffController;


Route::group(['middleware' => ['auth', 'has_school']], function () {


Route::get('staff',				[StaffController::class,'index'])->name('staff.index');
Route::get('staff/create',		[StaffController::class,'create'])->name('staff.create');


















});