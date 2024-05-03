<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function patientRegistrationStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mrn' => '',
            'name' => '',
            'dob' => '',
            'age' => '',
            'gender' => '',
            'marital_status' => '',
            'occupation' => '',
            'nationality' => '',
            'id_number' => '',
            'address' => '',
            'city' => '',
            'postal_code' => '',
            'mobile_number_1' => '',
            'mobile_number_2' => '',
            'relative_name' => '',
            'relative_id_number' => '',
            'relationship' => '',
            'relative_address' => '',
            'relative_mobile_number_1' => '',
            'relative_mobile_number_2' => '',
        ]);

        // If validation fails, return validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new patient instance and save it to the database
        $patient = new Patient($request->all());
        $patient->save();

        // Redirect to a success page or return a success message
        return redirect()->back()->with('success', 'Patient data added successfully!');
    }
}
