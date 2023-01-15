<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('slider',compact('sliders'));
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
            $slider = new Slider();
            $slider['text']=$request->sliderText;
            $slider['image']=$filename;
            
 
        }
        $slider->save();
        return redirect()->route('slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Slider $slider)
    {
        $id = $request->input('slider_id');
        DB::table('sliders')->where('id',$id)->delete();
        $sliders = Slider::all();
        return view('slider',compact('sliders'));
        
    }
    public function updateSliderStatus(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        DB::table('sliders')->where('id',"=",$id)->update([
            'status' => $status
        ]);
        return response()->json(['ji'=>'hiiiiiiiiiiiiiiiiiiii']);
    }
}
