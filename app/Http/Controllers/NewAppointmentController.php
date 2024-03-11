<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewAppointment;

class NewAppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'mode' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|time',
        ]);

        $appointment = NewAppointmentController::create($validatedData);

        return redirect()->route('home')->with('success', 'Appointment created successfully.');
    }
}