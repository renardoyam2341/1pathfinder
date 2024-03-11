<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index(){
        return view('student.Appointment');
    }

    public function show($id){

    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'mode' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string|max:255',
        ]);

        Appointment::create($validatedData);

        return redirect('/')->with('success', 'Appointment created successfully.');
    }
    public function create()
{
    return view('appointments.create');
}
}