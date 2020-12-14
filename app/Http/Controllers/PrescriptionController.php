<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentCreationNotification;
use App\Mail\PrescriptionNotification;
use App\Models\Appointment;
use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PrescriptionController extends Controller
{
    public function index()
    {
        $prescriptions = ['', '', ''];
        if (Auth::user()->hasRole('doctor')) {
            $prescriptions = Prescription::where('doctor_id', Auth::id())->get();
        }
        if (Auth::user()->hasRole('admin')) {
            $prescriptions = Prescription::all();
        }
        return view('prescription_list', compact('prescriptions'));
    }

    public function create($id, $serial_no)
    {
        $appointment = Appointment::where('id', $id)->where('serial_no', $serial_no)->first();
        if ($appointment != null) {
            return view('prescription_add', compact('id', 'serial_no', 'appointment'));
        }
        return back()->with('error', 'cannot find appointment.');
    }

    public function store(Request $request, $id, $serial_no)
    {
        $appointment = Appointment::where('id', $id)->where('serial_no', $serial_no)->first();
        $User = User::findOrFail($appointment->patient_id);
        $pres = new Prescription;
        $pres->appointment_id = $appointment->id;
        $pres->patient_id = $id;
        $pres->cheif_complain = $request->description;
        $pres->medicine_description = $request->medicine_description;
        $pres->doctor_id = Auth::id();
        /*$pres->medicine_name = $request->medicine_name;
        $pres->medicine_type = $request->medicine_type;
        $pres->medicine_days = $request->medicine_days;
        $pres->instruction = $request->medicine_instruction;*/
        //$pres->report = $request->description$request->description;
        $pres->note = $request->note;
        $pres->type = $request->type;
        $pres->active_status = 'Active';
        if ($pres->save()) {
            Mail::to($User->email)->send(new PrescriptionNotification($pres, $User));
            return redirect('prescription_list')
                ->with('success', 'Prescription Created successfully');
        }
        return back()->with('error', 'Some error occurred');
    }


    public function edit($prescription_id)
    {
        $prescription = Prescription::findOrFail($prescription_id);
        $editing = true;
        if ($prescription != null) {
            return view('prescription_edit', compact('prescription', 'editing'));
        }
        return back()->with('error', 'cannot find appointment.');
    }

    public function update(Request $request, $prescription_id)
    {
        $pres = Prescription::findOrFail($prescription_id);
        $User = User::findOrFail($pres->patient_id);

        $pres->cheif_complain = $request->description;
        $pres->medicine_description = $request->medicine_description;
        /*$pres->medicine_name = $request->medicine_name;
        $pres->medicine_type = $request->medicine_type;
        $pres->medicine_days = $request->medicine_days;
        $pres->instruction = $request->medicine_instruction;*/
        //$pres->report = $request->description$request->description;
        $pres->note = $request->note;
        $pres->type = $request->type;
        $pres->active_status = 'Active';
        if ($pres->save()) {
            Mail::to($User->email)->send(new PrescriptionNotification($pres, $User));
            return redirect('prescription_list')
                ->with('success', 'Prescription Updated successfully');
        }
    }

    public function show($id)
    {
        $prescription = Prescription::findOrFail($id);
        return view('prescription_single_view', compact('prescription'));
    }

}
