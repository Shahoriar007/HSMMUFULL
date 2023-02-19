<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $logos = Logo::all();
        return view('logo',compact('logos'));
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
        if($request->file('image')){
            $file = $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            Image::make($file)->save('photos/'.$filename);
            $save_url = 'photos/'.$filename;
            $logo = new Logo();
            $logo['image']=$filename;
 
        }
        $logo->save();
        return redirect()->route('logo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logo $logo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Logo $logo)
    {
        $id = $request->input('logo_id');
        DB::table('logos')->where('id',$id)->delete();
        $logos = Logo::all();
        return view('logo',compact('logos'));
    }

    public function updateLogoStatus(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        DB::table('logos')->where('id',"=",$id)->update([
            'status' => $status
        ]);
        return response()->json(['ji'=>'hiiiiiiiiiiiiiiiiiiii']);
    }
}
