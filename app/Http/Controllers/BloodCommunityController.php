<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodCommunity;
use Illuminate\Support\Facades\Redirect;

class BloodCommunityController extends Controller
{
    public function store(Request $request)
    {   
        // $effectiveDate = strtotime("+3 months", strtotime($request['last_donation_date']));
        // $available_date = strftime ( '%Y-%m-%d' , $effectiveDate );
        BloodCommunity::create([
            'blood_group'           => $request['blood_group'],
            'donation_date'         => $request['donation_date'],
            'contact_person_name'   => $request['contact_person_name'],
            'phone_number'          => $request['phone_number'],
            'location'              => $request['location'],

        ]); 
        return Redirect::route('bloodcommunity.list')->with('message',['type'=>'success','value'=>'Added']);
    }

    public function showAllBloodDonarList()
    {
        $bloodCommunity = BloodCommunity::orderby('available_date','asc')->get();
        return view ('blood_community_list',compact('bloodCommunity'));
    }

    public function editBloodInfoWithId($id)
    {
        $blood = BloodCommunity::where('id',$id)->first();
        return view('blood_community_join', compact('blood'));
    }

    public function edit(Request $request)
    {
        BloodCommunity::where('id',$request->blood_id)->update([
            'blood_group'        => $request->blood_group,
            'donation_date' => $request->donation_date,
            'contact_person_name' => $request->contact_person_name,
            'phone_number' => $request->phone_number,
            'location'     => $request->location
            
        ]); 
        return Redirect::route('bloodcommunity.list')->with('message',['type'=>'primary','value'=>'Edited']);
    }
    
    public function delete($id)
    {
        BloodCommunity::find($id)->delete();
        return Redirect::route('bloodcommunity.list')->with('message',['type'=>'danger','value'=>'Deleted']);
    }


}
