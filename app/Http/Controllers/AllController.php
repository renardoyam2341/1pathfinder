<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AllController extends Controller
{
    
    public function Adashboard()
    {
        $data = Appointment::all();
    
        return view('admin.AdminDashboard', ['appointments' => $data]);
    }
    public function AList()
{
    $data = Appointment::all();

    return view('admin.AppointmentList', ['appointments' => $data]);
}
    public function create()
    {
        return view('student.MHR');
    }
    public function Sdashboard()
    {
        return view('student.StudentDashboard');

    }
    public function forms()
    {
        return view('student.forms');
    }
    public function newAppointment()
    {
        return view('student.Appointment');
    }
    public function counseling()
    {
        return view('student.counseling');
    }

    public function Astatus()
    {
        $data = Appointment::all();
    
        return view('student.AppointmentStatus', ['appointments' => $data]);
    }

    public function Sstatus()
    {
        $data = Appointment::all();
    
        return view('student.AppointmentStatus', ['appointments' => $data]);
    }
    
    public function MHR()
    {
        return view('student.MHR');
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
}
