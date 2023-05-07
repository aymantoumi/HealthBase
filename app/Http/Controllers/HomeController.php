<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Dotenv\Store\File\Paths;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Patient = Patient::all();
        $TotalPatients = Patient::count();
        $WaitingPatients = Patient::where('status', 0)->count();
        $DonePatients = Patient::where('status', 1)->count();
        return view('home', ['page' => 'home', 'patients' => $Patient, 'TotalPatients' => $TotalPatients, 'waiting' => $WaitingPatients, 'done' => $DonePatients]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
