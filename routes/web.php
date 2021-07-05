<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/////////////////////////////////////////////// Start of Admin Panel ///////////////////////////////////////////////

Route::prefix('admin')->middleware('auth')->group(function () {

	Route::get('/home', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');
	// Route::get('/manage/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');
	Route::get('/manage/patients', [App\Http\Controllers\Admin\PatientController::class, 'index'])->name('admin.patients');
	Route::get('/manage/therapist', [App\Http\Controllers\Admin\ThreapistController::class, 'index'])->name('admin.therapists');
   Route::get('/client/organisation', [App\Http\Controllers\Admin\OrganisationController::class, 'index'])->name('admin.organisation');

});
