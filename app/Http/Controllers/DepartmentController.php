<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class DepartmentController extends Controller
{


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'department_name' => 'required|max:20',
            'description' => 'required'
        ]);

        Department::create([
            'department_name'   => $request['department_name'],
            'description'       => $request['description']
        ]);
        return Redirect::route('department.list')->with('message',['type'=>'success','value'=>'Added']);
    }

    public function showAllDepartment()
    {
        $departments = Department::orderby('department_name','asc')->get();
        return view ('department_list',compact('departments'));
    }

    public function viewSingleDepartmentWithId($id)
    {
        $department = Department::where('id',$id)->first();
        return view('department_view', compact('department'));
    }
    public function editDepartmentWithId($id)
    {
        $department = Department::where('id',$id)->first();
        return view('department_add', compact('department'));
    }

    public function edit(Request $request)
    {
        $validatedData = $request->validate([
            'department_name' => 'required|max:20',
            'description' => 'required'
        ]);
        Department::where('id',$request->dep_id)->update([
            'department_name' => $request->department_name,
            'description'   => $request->description
        ]);
        return Redirect::route('department.list')->with('message',['type'=>'primary','value'=>'Edited']);
    }

    public function delete($id)
    {
        Department::find($id)->delete();
        return Redirect::route('department.list')->with('message',['type'=>'danger','value'=>'Deleted']);
    }

}
