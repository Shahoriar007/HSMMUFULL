<?php

namespace App\Http\Controllers;

use App\Models\Classinfo;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classinfo::all();
       
        return view('class', compact('classes'));
    }
    public function addClassinfo(Request $request){
        $input = $request->all();
        $class = new Classinfo();
        $class['class'] = $input['class'];
        $class['section'] = $input['section'];
        $class->save();
        $classes = Classinfo::all();
       
        return view('class', compact('classes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classinfo  $classinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Classinfo $classinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classinfo  $classinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Classinfo $classinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classinfo  $classinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classinfo $classinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classinfo  $classinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classinfo $classinfo)
    {
        //
    }
}
