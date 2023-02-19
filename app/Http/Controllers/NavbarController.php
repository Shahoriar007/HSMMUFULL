<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navs = Navbar::all();

         return view('navbar',compact('navs'));
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
        Navbar::create([
            'title' => $request->title,
            'url' => $request->url,
            
         ]);
         $navs = Navbar::all();

         return redirect()->route('navbar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Navbar $navbar)
    {
        $id = $request->input('nav_id');
        DB::table('navbars')->where('id',$id)->delete();
        $navs = Navbar::all();

        return view('navbar',compact('navs'));
    }

    public function updateNavStatus(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        DB::table('navbars')->where('id',"=",$id)->update([
            'status' => $status
        ]);
        return response()->json(['ji'=>'hiiiiiiiiiiiiiiiiiiii']);
    }
}
