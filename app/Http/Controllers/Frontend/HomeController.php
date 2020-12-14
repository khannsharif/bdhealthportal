<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $doctor = Doctor::with('user')->get();
        $blog = Blog::all();
        return view('PatientView.index', compact('doctor', 'blog'));
    }

    public function passwordChange()
    {
        return view('password');
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string|max:60',
            'new_password' => 'required|string|min:8|max:60|confirmed',
        ]);

        $old_password = $request->old_password;
        $new_password = $request->new_password;


        if ($old_password == $new_password) {
            return back()->with('message', ['type' => 'danger', 'value' => 'New password cannot be same as old password']);
        }

        $User_password = User::findOrFail(Auth::user()->id)->password;

        if (Hash::check($old_password, $User_password)) {
            if (Hash::check($new_password, $User_password)) {
                return back()->with('message', ['type' => 'primary', 'value' => 'Old password and new password cannot be same.']);
            } else {
                User::findOrFail(Auth::user()->id)->update(['password' => Hash::Make($new_password)]);
                return back()->with('message', ['type' => 'primary', 'value' => 'Updated']);
            }
        } else {
            return back()->with('message', ['type' => 'primary', 'value' => 'Old password is wrong.']);
        }

        return redirect()->back()->with('message', ['type' => 'primary', 'value' => 'Updated']);
    }
}
