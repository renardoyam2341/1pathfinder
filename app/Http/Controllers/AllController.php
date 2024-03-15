<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AllController extends Controller
{
    
    public function Adashboard()
    {
        
        
        return view('admin.dashboardA');
    }
    public function AList()
    {
    $data = array("appointments" => DB::table('appointments')->orderBy
    ('created_at','desc')->paginate(5));


    return view('admin.AdminDashboard', $data);
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
    public function update(Request $request, $id)
    {
        $request->validate([
          'status' => 'required|max:255',
          'room' => 'required',
        ]);
        $appointment = Appointment::find($id);
        $appointment->update($request->all());
        return redirect()->route('AppointmentList.index')
          ->with('success', 'Appointments updated successfully.');
      }

    public function createroom(){
        return view('admin.roomcreate');
    }

    public function adminD(){
        return view('admin.dashboardA');
    }
}
