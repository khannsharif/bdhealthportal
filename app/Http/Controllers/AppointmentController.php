<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentCreationNotification;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Hospital;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function create(){
        $departments = Department::all();
        $hospitals = Hospital::all();
        $rand = random_int(1, 50);
        //return view('frontend.appointment');
        return view('PatientView.appointment', compact('departments', 'hospitals', 'rand'));
    }

    public function store(Request $request){
        $User = User::findOrFail($request->patient_id ?? Auth::id());
        if($User->hasRole(['admin', 'doctor'])){
            return back()->with('error', 'You account is not a patient account.');
        }

        $time = Carbon::parse($request->time_slot)->format('H:i:s');

        $app = new Appointment;
        $app->patient_id = $request->patient_id;
        $app->department_id = $request->department_id;
        $app->hospital_id = $request->hospital_id;
        $app->appointment_date = $request->appointment_date;
        $app->appointment_time = Carbon::parse($time);
        $app->problem = $request->description;
        if(Auth::user()->hasRole('admin')){
            $app->status = 'active';
        }
        $app->active_status = 1;
        if($app->save()){
            $app->update([
                'serial_no' => 'SL-'.str_pad($app->id, 5, '0', STR_PAD_LEFT)
            ]);
            $User = User::findOrFail($app->patient_id);
            Mail::to($User->email)->send(new AppointmentCreationNotification($app, $User));
            if(Auth::user()->hasRole('patient')){
                return redirect('appointment/list')
                    ->with('success', 'Appointment Created Successfully. Please check your email.');
            }
            return redirect('appointment/view')
                ->with('success', 'Appointment Created Successfully.');
        }
        return back()->with('error', 'Some error occurred');
    }
    public function update(Request $request, $id){
        $time = Carbon::parse($request->time_slot)->format('H:i:s');

        $app = Appointment::findOrFail($id);
        $app->patient_id = $request->patient_id;
        $app->department_id = $request->department_id;
        $app->hospital_id = $request->hospital_id;
        $app->appointment_date = $request->appointment_date;
        $app->appointment_time = Carbon::parse($time);
        $app->problem = $request->description;
        $app->active_status = 1;
        if($app->save()){
            $User = User::findOrFail($app->patient_id);
            Mail::to($User->email)->send(new AppointmentCreationNotification($app, $User));
            if(Auth::user()->hasRole('patient')){
                return redirect('appointment/list')
                    ->with('success', 'Appointment Created Successfully. Please check your email.');
            }
            return redirect('appointment/view')
                ->with('success', 'Appointment Updated successfully.');
        }
        return back()->with('error', 'Some error occurred');
    }
    public function index(){
        $apps = Appointment::where('patient_id', Auth::id())->get();
        return view('appointment_success', compact('apps'));
    }

    public function showAll(){
        $apps = Appointment::all();
        return view('appointment_list', compact('apps'));
    }

    public function updateStatus($id){
        $App = Appointment::findOrFail($id);
        if($App->status == 'pending'){
            $App->status = 'active';
        }elseif($App->status == 'active'){
            $App->status = 'canceled';
        }
        if($App->save()){
            return back()->with('success', 'Appointment status updated successfully.');
        }
        return back()->with('error', 'Some Error occurred.');
    }

    public function edit($id){
        $departments = Department::all();
        $hospitals = Hospital::all();
        $app = Appointment::findOrFail($id);
        $editing = true;
        return view('appointment_edit', compact('departments', 'hospitals', 'editing', 'app'));
    }

    public function destroy($id){
        $App = Appointment::findOrFail($id);
        if($App->forceDelete()){
            return back()->with('success', 'Appointment Deleted successfully.');
        }
        return back()->with('error', 'Some error occurred.');
    }

}
