<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Students\StudentsController;
use App\Http\Controllers\School\SchoolController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\RolePermissionController;
use App\Http\Controllers\Fee\FeeController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\ImageController;

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

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    return redirect()->back();
});



Route::get('/', function () {
    return view('home');
})->name('web');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('panal.deshboard');
Route::group(['middleware' => ['auth', 'has_school']], function () {

    Route::resource('students', StudentsController::class);
    Route::get('students/getPDF/{id}', [StudentsController::class, 'downloadPDF']);

    Route::resource('schools', SchoolController::class);
    Route::post('schools/update', [SchoolController::class, 'updateStatus'])->name('schools.updateStatus');
    Route::get('/schools/class', [SchoolController::class, 'addClass'])->name('schools.add_class');

    Route::resource('user', UserController::class);
    // Route::put('user/update',[App\Http\Comntroller\User\UserController::class,'update'])->name('admin.user.update');
    Route::resource('role', RolePermissionController::class);
    Route::get('/role/permission/create', [RolePermissionController::class, 'permissionCreate'])->name('permission.create');
    Route::Post('/role/permission/store', [RolePermissionController::class, 'storePermission'])->name('permission.store');
    Route::get('/fee', [FeeController::class, 'index'])->name('fee.index');
    Route::post('/get/fee_type/', [FeeController::class, 'getFeeType'])->name('fee.get.type');
    Route::post('/get/submit/', [FeeController::class, 'submit_fee'])->name('fee.submit');
    Route::post('fee/store/advence/', [FeeController::class, 'submit_advance_fee'])->name('fee.store.advamce');
    Route::post('/fee/student', [FeeController::class, 'getStudent'])->name('fee.getStudentData');
    Route::get('/fee/setting', [FeeController::class, 'Setting'])->name('fee.setting');
    Route::post('/fee/setting/update', [FeeController::class, 'UpdateSetting'])->name('fee.setting.update');






});
