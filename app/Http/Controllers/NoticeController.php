<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        return view('noticeInput', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $description = $request->input('notice');
        $title = $request->input('title');
        $notice = new Notice();
        $notice['description'] = $description;
        $notice['title'] = $title;
        $notice->save();
        $notices = Notice::all();
        return view('noticeInput',compact('notices'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function deleteNotice(Request $request)
    {
        $id = $request->input('notice_id');
        DB::table('notices')->where('id',$id)->delete();
        $notices = Notice::all();
        return view('noticeInput',compact('notices'));
    }
    public function allNotice(Request $request){
        $notices = Notice::all();
        return view('notices', compact('notices'));
    }
    public function viewNotice(Request $request, $id){
        $notice = Notice::find($id);
        return view ('noticeView', compact('notice'));
    }

    public function updateNotice(Request $request){
        
        $id = $request->input('id');
        $title = $request->input('title');
        $description = $request->input('editordata');

        $blog = Notice::find($id);
        $blog['title'] = $title;
        $blog['description'] = $description;
        $blog->save();
        return response()->json(['success'=>'Notice updated successfully']);

    }
}
