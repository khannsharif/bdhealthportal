<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class DoctorController extends Controller
{
    public function index()
    {
        $depts = Department::orderby('department_name', 'asc')->get();
        // dd($depts);
        $hospitals = Hospital::orderby('hospital_name', 'asc')->get();
        return view('doctor_add', compact('depts', 'hospitals'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nid_dob' => 'required|max:20',
            'bmdc_registered_number' => 'required|max:20',
            'full_name' => 'required|max:35',
            'email' => 'required|email',
            'address' => 'required|max:50',
            'contact_number' => 'required|min:11|max:11',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'designation' => 'required|max:20',
            'short_biography' => 'required',
            'specialist' => 'required|max:20',
            'date_of_birth' => 'required',
            'blood_group' => 'required',
            'education' => 'required|max:150',
        ]);
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
        $user->full_name = $request['full_name'];
        $user->email = $request['email'];
        $user->gender = $request['gender'];
        $user->contact_number = $request['contact_number'];
        $user->password = Hash::make('secret');
        $user->nid_dob = $request['nid_dob'];
        $user->save();
        $doc = Doctor::create([
            'hospital_id' => $request['hospitals'],
            'department_id' => $request['departments'],
            'user_id' => $user->id,
            'bmdc_registered_number' => $request['bmdc_registered_number'],
            'address' => $request['address'],
            'designation' => $request['designation'],
            'short_biography' => $request['short_biography'],
            'specialist' => $request['specialist'],
            'date_of_birth' => $request['date_of_birth'],
            'blood_group' => $request['blood_group'],
            'education' => $request['education']
        ]);
        return Redirect::route('doctor.list')->with('message', ['type' => 'success', 'value' => 'Added']);
    }

    public function showAllDoctor()
    {
        $doctors = Doctor::with('hospital', 'department', 'user')->orderby('hospital_id', 'asc')->get();
        return view('doctor_list', compact('doctors'));
    }


    public function editSingleDoctorWithId($id)
    {
        $depts = Department::orderby('department_name', 'asc')->get();
        // dd($depts);
        $hospitals = Hospital::orderby('hospital_name', 'asc')->get();
        $doctor = Doctor::where('id', $id)->first();
        return view('doctor_add', compact('doctor', 'hospitals', 'depts'));
    }

    public function edit(Request $request, $id)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'nid_dob' => 'required|max:20',
            'bmdc_registered_number' => 'required|max:20',
            'full_name' => 'required|max:35',
            'email' => 'required|email',
            'address' => 'required|max:50',
            'contact_number' => 'required|min:11|max:11',
            'designation' => 'required|max:20',
            'short_biography' => 'required',
            'specialist' => 'required|max:20',
            'date_of_birth' => 'required',
            'blood_group' => 'required',
            'education' => 'required|max:150',
        ]);
        $imageName = "";
        if ($request->hasFile('picture')) {
            if ($request->picture->isValid()) {
                $imageName = time() . '.' . $request->picture->extension();
                $request->picture->move(public_path('images/profile'), $imageName);
            } else {
                return back()->withInput()->with('message', 'error in logo file');
            }
        }
        $user = User::findOrFail($id);
        $user->full_name = $request['full_name'];
        $user->email = $request['email'];
        $user->gender = $request['gender'];
        $user->contact_number = $request['contact_number'];
        $user->password = Hash::make('secret');
        $user->nid_dob = $request['nid_dob'];
        $user->picture = $imageName;
        $user->save();
        $doc = Doctor::where('user_id', $user)->update([
            'hospital_id' => $request['hospitals'],
            'department_id' => $request['departments'],
            'user_id' => $user->id,
            'bmdc_registered_number' => $request['bmdc_registered_number'],
            'address' => $request['address'],
            'designation' => $request['designation'],
            'short_biography' => $request['short_biography'],
            'specialist' => $request['specialist'],
            'date_of_birth' => $request['date_of_birth'],
            'blood_group' => $request['blood_group'],
            'education' => $request['education']
        ]);
        return Redirect::route('doctor.list')->with('message', ['type' => 'primary', 'value' => 'Edited']);
    }

    public function delete($id)
    {
        Doctor::find($id)->delete();
        return Redirect::route('doctor.list')->with('message', ['type' => 'danger', 'value' => 'Deleted']);
    }
}
