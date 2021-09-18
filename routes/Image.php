<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ImageController;

Route::group(['middleware' => ['auth', 'has_school']], function () {

//---------------Image Routes 
    
    Route::post('user-image', [ImageController::class, 'uploadUserImage'])->name('upload.user.image');
    Route::post('school-image', [ImageController::class, 'uploadSchoolImage'])->name('upload.school.image');

    Route::post('student-image', [ImageController::class, 'uploadStudentImage'])->name('upload.student.image');
    Route::post('school-image', [ImageController::class, 'uploadSchoolLogo'])->name('upload.school.image');





















});