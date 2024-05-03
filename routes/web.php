<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\Receptionist\ReceptionistController;
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
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('patient-register', [AdminController::class, 'patientRegistration'])->name('patientRegistration');
});

Route::group(['as'=>'patient.','prefix' => 'patient','namespace'=>'Patient','middleware'=>['auth','patient']], function () {
    Route::get('dashboard', [PatientController::class, 'index'])->name('dashboard');
});

Route::group(['as'=>'receptionist.','prefix' => 'receptionist','namespace'=>'Receptionist','middleware'=>['auth','receptionist']], function () {
    Route::get('dashboard', [ReceptionistController::class, 'index'])->name('dashboard');
});
