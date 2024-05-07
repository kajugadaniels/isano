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

Route::get('dashboard', [PagesController::class, 'dashboard'])->name('admin.dashboard');

Route::get('patient-reg', [PagesController::class, 'patientRegistration'])->name('admin.patientRegistration');
Route::post('patient-reg', [PagesController::class, 'patientRegistrationStore'])->name('admin.patientRegistrationStore');

Route::get('consultation-form', [PagesController::class, 'consultationForm'])->name('admin.consultationForm');

Route::get('/getPatients', [PagesController::class, 'getPatients'])->name('getPatients');
