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

	// Patient Module
	Route::get('/manage/patients', [App\Http\Controllers\Admin\PatientController::class, 'index'])->name('admin.patients');
	Route::get('/create/patients', [App\Http\Controllers\Admin\PatientController::class, 'create'])->name('patient.create');
	Route::post('/store/patient', [App\Http\Controllers\Admin\PatientController::class, 'store'])->name('store.patient');
	Route::get('/deactivate/patient/{id}', [App\Http\Controllers\Admin\PatientController::class, 'deactivate']);
	Route::get('/activate/patient/{id}', [App\Http\Controllers\Admin\PatientController::class, 'activate']);
	Route::get('/patient/edit/{id}', [App\Http\Controllers\Admin\PatientController::class, 'edit']);
	Route::post('/update/patient/{id}', [App\Http\Controllers\Admin\PatientController::class, 'update'])->name('update.patient');
	Route::get('/patient/softdelete/{id}', [App\Http\Controllers\Admin\PatientController::class, 'softDelete']);

	////// Start of Therapist Module /////////

	Route::get('/manage/therapist', [App\Http\Controllers\Admin\ThreapistController::class, 'index'])->name('admin.therapists');
	Route::get('/create/therapist', [App\Http\Controllers\Admin\ThreapistController::class, 'create'])->name('therapist.create');
	Route::get('/edit/therapist/{id}', [App\Http\Controllers\Admin\ThreapistController::class, 'edit']);
	Route::get('/deactivate/therapist/{id}', [App\Http\Controllers\Admin\ThreapistController::class, 'deactivate']);
	Route::get('/activate/therapist/{id}', [App\Http\Controllers\Admin\ThreapistController::class, 'activate']);
	Route::post('/store/therapist', [App\Http\Controllers\Admin\ThreapistController::class, 'store'])->name('store.therapist');
	Route::post('/update/therapist/{id}', [App\Http\Controllers\Admin\ThreapistController::class, 'update'])->name('update.therapist');
	Route::get('/therapist/softdelete/{id}', [App\Http\Controllers\Admin\ThreapistController::class, 'softDelete']);

	////// End Of Therapist Module


	////// Start of Organisation Module /////////

   Route::get('/client/organisation', [App\Http\Controllers\Admin\OrganisationController::class, 'index'])->name('admin.organisation');
   Route::get('/create/organisation', [App\Http\Controllers\Admin\OrganisationController::class, 'create'])->name('organisation.create');
   Route::get('/deactivate/organisation/{id}', [App\Http\Controllers\Admin\OrganisationController::class, 'deactivate']);
   Route::get('/activate/organisation/{id}', [App\Http\Controllers\Admin\OrganisationController::class, 'activate']);
   Route::post('/store/organisation', [App\Http\Controllers\Admin\OrganisationController::class, 'store'])->name('store.organisation');
   Route::get('/edit/organisation/{id}', [App\Http\Controllers\Admin\OrganisationController::class, 'edit']);
   Route::post('/update/organisation/{id}', [App\Http\Controllers\Admin\OrganisationController::class, 'update'])->name('update.organisation');
   Route::get('/organisation/softdelete/{id}', [App\Http\Controllers\Admin\OrganisationController::class, 'softDelete']);

   ////// End of Organisation Module /////////

});

/////////////////////////////////////////////// End of Admin Panel ///////////////////////////////////////////////
