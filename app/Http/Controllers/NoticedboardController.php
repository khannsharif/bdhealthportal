<?php

namespace App\Http\Controllers;

use App\Models\Noticedboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NoticedboardController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
            'publish_date' => 'required'
        ]);

        Noticedboard::create([
            'title'   => $request['title'],
            'description'       => $request['description'],
            'publish_date'       => $request['publish_date']

        ]);
        return Redirect::route('noticeboard.list')->with('message',['type'=>'success','value'=>'Added']);
    }

    public function showAllNotices()
    {
        $noticedboards = Noticedboard::orderby('title','asc')->get();
        return view ('noticeboard_list',compact('noticedboards'));
    }

    public function viewSingleNoticeWithId($id)
    {
        $notice = Noticedboard::where('id',$id)->first();
        return view('notice_single_view', compact('notice'));
    }

    public function editNoticeWithId($id)
    {
        $notice = Noticedboard::where('id',$id)->first();
        return view('noticeboard_add', compact('notice'));
    }

    public function edit(Request $request)
    {
        Noticedboard::where('id',$request->notice_id)->update([
            'title'       => $request->title,
            'description' => $request->description,
            'publish_date'     => $request->publish_date
            ,
        ]);
        return Redirect::route('noticeboard.list')->with('message',['type'=>'primary','value'=>'Edited']);
    }

    public function delete($id)
    {
        Noticedboard::find($id)->delete();
        return Redirect::route('noticeboard.list')->with('message',['type'=>'danger','value'=>'Deleted']);
    }

}
