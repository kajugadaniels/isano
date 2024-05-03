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

Route::get('admin/dashboard', [PagesController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('admin/patient-reg', [PagesController::class, 'patientRegistration'])->name('admin.patientRegistration');
Route::post('admin/patient-reg', [PagesController::class, 'patientRegistrationStore'])->name('admin.patientRegistrationStore');
