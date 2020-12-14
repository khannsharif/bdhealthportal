<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PatientCommunityBlog;
use Illuminate\Support\Facades\Redirect;

class PatientCommunityBlogController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:250',
            'author_name' => 'required|max:100',
            'picture' => 'required',
            'description' => 'required',
            'publish_date' => 'required'

        ]);

        $img = $request['picture'];
        $ext = $img->getClientOriginalExtension();
        $imageName = time().'.'.$ext;
        $request['picture']->move(public_path('images'), $imageName);

        PatientCommunityBlog::create([
            'title'   => $request['title'],
            'author_name'   => $request['author_name'],
            'picture'       => $imageName,
            'description'       => $request['description'],
            'publish_date'       => Carbon::parse($request['publish_date'])
        ]);
        return Redirect::route('patientblog.list')->with('message',['type'=>'success','value'=>'Added']);
    }

    public function showAllBlog()
    {
        $patientblogs = PatientCommunityBlog::orderby('title','asc')->get();
        //return view ('patient_community_blog_list',compact('patientblogs'));
        //return view ('patient_community_blog_all_view',compact('patientblogs'));
        return view ('PatientView.blog',compact('patientblogs'));
    }

    public function read($id)
    {
        $patientblog = PatientCommunityBlog::findOrFail($id);
        //return view ('patient_community_blog_list',compact('patientblogs'));
        //return view ('patient_community_blog_all_view',compact('patientblogs'));
        return view ('PatientView.blog_read',compact('patientblog'));
    }

    public function showAllBlogList()
    {
        $patientblogs = PatientCommunityBlog::orderby('title','asc')->get();
        return view ('patient_community_blog_list',compact('patientblogs'));
        //return view ('patient_community_blog_all_view',compact('patientblogs'));
    }
    public function readMore($id){
        $blog = PatientCommunityBlog::findOrFail($id);
        return view('patient_community_Single_blog_Readmore', compact('blog'));
    }

    public function editBlogWithId($id)
    {
        $blog = PatientCommunityBlog::where('id',$id)->first();
        return view('patient_community_blog_add', compact('blog'));
    }

    public function edit(Request $request)
    {

        $imageName = '';
        if($request['picture'] == null){
            $imageName = $request['pic_id'];
        }else{
            $img = $request['picture'];
            $ext = $img->getClientOriginalExtension();
            $imageName = time().'.'.$ext;
            $request['picture']->move(public_path('images'), $imageName);
        }

        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'description' => 'required'
        ]);

        PatientCommunityBlog::where('id',$request->blog_id)->update([
            'title'       => $request->title,
            'picture'     => $imageName,
            'description' => $request->description
            ,
        ]);
        return Redirect::route('patientblog.list')->with('message',['type'=>'primary','value'=>'Edited']);
    }

    public function delete($id)
    {
        PatientCommunityBlog::find($id)->delete();
        return \redirect()->back()->with('message',['type'=>'danger','value'=>'Deleted']);
        //return Redirect::route('patientblog.list')->with('message',['type'=>'danger','value'=>'Deleted']);
    }

    public function viewSingleBlogWithId($id)
    {
        $blog = PatientCommunityBlog::where('id',$id)->first();
        return view('patient_blog_single_view', compact('blog'));
    }
}
