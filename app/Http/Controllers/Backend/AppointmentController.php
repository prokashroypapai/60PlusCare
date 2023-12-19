<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::paginate(10);
        return view('backend.appointment.index', compact('appointments'));
    }

    public function show($id){
        $appointment = Appointment::findorFail($id);
        return view('backend.appointment.show', compact('appointment'));
    }
}
