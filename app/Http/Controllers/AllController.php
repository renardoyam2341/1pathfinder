<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

    public function Acounseling()
    {
        return view('admin.counseling');
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
    public function update(Request $request)
{
    $appointmentData = $request->all();

    $validator = Validator::make($appointmentData, [
        'date' => 'required|date',
        'time' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 400);
    }

    $appointment = Appointment::find($request->id);

    if (!$appointment) {
        return response()->json(['error' => 'Appointment not found'], 404);
    }

    $appointment->update($appointmentData);

    return response()->json(['message' => 'Appointment updated successfully']);
}

    public function createroom(){
        return view('admin.roomcreate');
    }

    public function adminD(){
        return view('admin.dashboardA');
    }
}
