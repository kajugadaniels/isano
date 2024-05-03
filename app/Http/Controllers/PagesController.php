<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function adminDashboard()
    {
        return view('pages.admin');
    }

    public function doctorDashboard()
    {
        return view('pages.doctor');
    }

    public function patientDashboard()
    {
        return view('pages.patient');
    }

    public function receptionistDashboard()
    {
        return view('pages.receptionist');
    }

    public function patientRegistration()
    {
        return view('pages.patient.create');
    }

    public function patientRegistrationStore()
    {
        // 
    }
}
