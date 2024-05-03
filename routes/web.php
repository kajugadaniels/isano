<?php

use App\Http\Controllers\PagesController;
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
    return redirect('login');
});

Auth::routes();

Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
    Route::get('dashboard', [PagesController::class, 'adminDashboard'])->name('dashboard');
    Route::get('patient-register', [PagesController::class, 'patientRegistration'])->name('patientRegistration');
});

Route::group(['as'=>'doctor.','prefix' => 'doctor','namespace'=>'doctor','middleware'=>['auth','doctor']], function () {
    Route::get('dashboard', [PagesController::class, 'doctorDashboard'])->name('dashboard');
});

Route::group(['as'=>'patient.','prefix' => 'patient','namespace'=>'Patient','middleware'=>['auth','patient']], function () {
    Route::get('dashboard', [PagesController::class, 'patientDashboard'])->name('dashboard');
});

Route::group(['as'=>'receptionist.','prefix' => 'receptionist','namespace'=>'Receptionist','middleware'=>['auth','receptionist']], function () {
    Route::get('dashboard', [PagesController::class, 'receptionistDashboard'])->name('dashboard');
});
