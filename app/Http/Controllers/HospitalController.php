<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Resources\HospitalCollection;
use Illuminate\Support\Facades\Storage;

class HospitalController extends Controller
{
    public function index()
    {
        $depts = Department::orderby('department_name', 'asc')->get();
        return view('hospital_add', compact('depts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'register_number' => 'required|max:40',
            'hospital_name' => 'required|string|max:40',
            'hospital_address' => 'required|string|max:250',
            'email' => 'required|string|email|max:60',
            'contact_number' => 'required',
            'departments' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('logo')) {
            if ($request->logo->isValid()) {
                $imageName = time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('images/hospital_images'), $imageName);
            } else {
                return back()->withInput()->with('message', 'error in logo file');
            }
        }
        $hos = Hospital::create([
            'bmdc_registered_number' => $request['register_number'],
            'hospital_name' => $request['hospital_name'],
            'address' => $request['hospital_address'],
            'contact_number' => $request['contact_number'],
            'email' => $request['email'],
            'logo' => $imageName
        ]);
        //dd($request['departments']);
        $hos->departments()->attach($request['departments']);
        return Redirect::route('hospital.list')->with('message', ['type' => 'success', 'value' => 'Added']);
    }

    public function showAllHospital()
    {
        $hospitals = Hospital::with('departments')->orderby('hospital_name', 'asc')->get();

        return view('hospital_list', compact('hospitals'));
    }

    public function viewSingleHospitalWithId($id)
    {
        $hospital = Hospital::where('id', $id)->first();
        return view('hospital_single_view', compact('hospital'));
    }

    public function editSingleHospitalWithId($id)
    {
        $hospital = Hospital::where('id', $id)->first();
        $depts = Department::orderby('department_name', 'asc')->get();
        //$data = new HospitalCollection($hospital);
        $arr = [];
        foreach ($hospital->departments as $value) {
            $arr[] .= $value->id;
        }
        return view('hospital_add', compact('hospital', 'depts', 'arr'));
    }

    public function edit(Request $request, $id)
    {
        $hos = Hospital::findOrFail($id);
        $validated = $request->validate([
            'register_number' => 'required|max:40',
            'hospital_name' => 'required|string|max:40',
            'hospital_address' => 'required|string|max:250',
            'email' => 'required|string|email|max:60',
            'contact_number' => 'required',
            'departments' => 'required',
        ]);
        if ($request->hasFile('logo')) {
            $validated = $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($request->logo->isValid()) {
                $imageName = time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('images/hospital_images'), $imageName);
                $hos->logo = $imageName;
            } else {
                return back()->withInput()->with('message', 'error in logo file');
            }
        }
        $hos->departments()->detach();
        //$hos->departments()->attach($request['departments']);
        $hos->bmdc_registered_number = $request['register_number'];
        $hos->hospital_name = $request['hospital_name'];
        $hos->address = $request['hospital_address'];
        $hos->contact_number = $request['contact_number'];
        $hos->email = $request['email'];
        $hos->save();
        $hos->departments()->attach($request['departments']);
        return redirect()->route('hospital.list');
    }

}
