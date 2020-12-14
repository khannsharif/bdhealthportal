<?php

namespace App\Http\Controllers;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PatientRegistration;
use Illuminate\Support\Facades\Hash;


class PatientRegistrationController extends Controller
{

    public function store(Request $request)
    {
        $user = new User();
        if ($request->hasFile('picture')) {
            if ($request->picture->isValid()) {
                $imageName = time() . '.' . $request->picture->extension();
                $request->picture->move(public_path('images/profile'), $imageName);
                $user->picture = $imageName;
            } else {
                return back()->withInput()->with('message', 'error in logo file');
            }
        }
        $user->nid_dob = $request->nid_dob;
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->contact_number = $request->contact_number;
        $user->gender = $request->gender;
        $user->save();

        PatientRegistration::create([
            'user_id' => $user->id,
            'address' => $request['address'],
            'date_of_birth' => Carbon::parse($request['date_of_birth']),
            'blood_group' => $request['blood_group'],
            'active_status' => 'Active',

        ]);
        return redirect('/patient_list')->with('message', ['type' => 'success', 'value' => 'Added']);
    }

    public function showAllPatient()
    {
        $patients = PatientRegistration::with('user')->get();
        return view('patient_list', compact('patients'));
    }

    public function viewSinglePatientWithId($id)
    {
        $patient = PatientRegistration::where('id', $id)->first();
        return view('patient_view', compact('patient'));
    }

    public function editPatientWithId($id)
    {
        $patient = PatientRegistration::where('id', $id)->first();
        // dd($patient);
        return view('patient_registration', compact('patient'));
    }

    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ($request->hasFile('picture')) {
            if ($request->picture->isValid()) {
                $imageName = time() . '.' . $request->picture->extension();
                $request->picture->move(public_path('images/profile'), $imageName);
                $user->picture = $imageName;
            } else {
                return back()->withInput()->with('message', 'error in logo file');
            }
        }
        $user->nid_dob = $request->nid_dob;
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        //$user->password = Hash::make($request->password);
        $user->contact_number = $request->contact_number;
        $user->gender = $request->gender;
        $user->save();
        PatientRegistration::where('user_id', $user)->update([
            'user_id' => $user->id,
            'address' => $request['address'],
            'date_of_birth' => Carbon::parse($request['date_of_birth']),
            'blood_group' => $request['blood_group'],
            'active_status' => 'Active',
        ]);
        return redirect('/patient_list')->with('message', ['type' => 'success', 'value' => 'Edited']);
    }


}
