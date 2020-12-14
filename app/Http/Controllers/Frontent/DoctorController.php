<?php

namespace App\Http\Controllers\Frontent;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index(){
        $hospitals =  Hospital::all();
        $departments =  Department::all();
        return view('frontend.doctors', compact('hospitals', 'departments'));
    }


    public function search_doctors(Request $request)
    {
        $Output = '';
        $doctors = Doctor::search();
        $request->has('department_id') ? $doctors->where('departments.id', $request->department_id) : '';
        $request->has('hospital_id') ? $doctors->where('hospitals.id', $request->hospital_id) : '';
        return $this->Output($Output, $doctors->get());
    }

    public function Output($Output, $doctors){
        if(count($doctors)>0) {
            foreach ($doctors as $doctor){
                $Output .= "<div class='card col-3' style='margin: 0 20px'>"
                    ."<div class='card-header'>Name: <strong>" .$doctor->user->full_name ."</strong></div>"
                    ."<div class='card-body'><img src='".asset('images/profile/'.$doctor->user->picture)."' alt='' class='img-fluid img-rounded' style='height: 200px!important; object-fit: contain; object-position: center;'></div>"
                    ."<div class='card-footer'>"
                    ."<div>Email: <strong>".$doctor->email."</strong></div>"
                    ."<div>Contact: <strong>".$doctor->contact_number."</strong></div>"
                    ."<div>Address: <strong>".$doctor->address."</strong></div>"
                    ."<div>Designation: <strong>".$doctor->designation."</strong></div>"
                    ."<div>Short Biography: <strong>".$doctor->short_biography."</strong></div>"
                    ."<div>Education: <strong>".$doctor->education."</strong></div>"
                    ."<div>Hospital Name: <strong>".$doctor->hospital_name."</strong></div>"
                    ."</div>"
                    ."</div>";
            }
        }
        else{
            $Output = "<div class='alert alert-info'> <strong> No Doctors Available. </strong> </div>";
        }
        return response($Output);
    }
}
