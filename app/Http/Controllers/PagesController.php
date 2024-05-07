<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
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
            'nationality' => '',
            'id_number' => '',
            'province' => '',
            'district' => '',
            'sector' => '',
            'cell' => '',
            'village' => '',
            'mobile_number' => '',
            'relative_name' => '',
            'relative_id_number' => '',
            'relationship' => '',
            'relative_province' => '',
            'relative_district' => '',
            'relative_sector' => '',
            'relative_cell' => '',
            'relative_village' => '',
            'relative_mobile_number' => '',
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

    public function consultationForm()
    {
        return view('pages.fp.consultation-form');
    }

    public function getPatients(Request $request)
    {
        $p = Patient::all();

        return response()->json($p);
    }
}
