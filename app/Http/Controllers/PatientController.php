<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::with('actions')->get()->sortDesc();
        return view('patients', ['page' => 'Patients', 'patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newAction = new Action();

        $newAction->Patient_ID = $request->patient_id;
        $newAction->Action = $request->reason;
        $newAction->Payment = $request->payment;

        $newAction->save();

        return redirect()->back()->with('message', 'Your request has been processed.');
    }

    /**
     * Display the specified resource.
     */
    public function show($patientId)
    {
        $patient = Patient::with(['actions' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->findOrFail($patientId);

        return view('patient', [
            'page' => 'Patients',
            'patient' => $patient
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $Patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->First_Name = $request->input('firstName');
        $patient->Last_Name = $request->input('lastName');
        $patient->CIN = $request->input('CIN');
        $patient->Birth_Date = $request->input('birthDate');
        $patient->Gender = $request->input('gender');
        $patient->Category = $request->input('category');
        $patient->Phone = $request->input('phoneNumber');

        $patient->save();

        return redirect()->back()->with('message', 'Patient updated successfully');
    }


    public function changeStatus(Request $request, Patient $Patient)
    {
        // $Patient = Patient::find($Patient);

        $Patient->Status = $request->status;

        $Patient->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->actions()->delete(); // delete all associated actions
        $patient->delete(); // delete the patient record

        return redirect()->route('patients.index')->with('message', 'Patient deleted successfully');
    }
}
