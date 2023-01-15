<?php

namespace App\Http\Controllers;

use App\Models\Blogcatagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogcatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagories = Blogcatagory::all();
        return view('catagory', compact('catagories'));
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
        $catagory = new Blogcatagory();
        $catagory['catagoryName'] = $request->catagoryName;
        $catagory->save();
        $catagories = Blogcatagory::all();
        return view('catagory', compact('catagories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }



    public function destroy(Request $request)
    {
        $id = $request->input('catagory_id');
        DB::table('blogcatagories')->where('id', $id)->delete();
        $catagories = Blogcatagory::all();
        return view('catagory', compact('catagories'));
    }

    public function updateCatagoryStatus(Request $request)
    {
        $id = $request->get('id');
        $status = $request->get('status');
        DB::table('blogcatagories')->where('id', $id)->update([
            'status' => $status
        ]);
        return response()->json(['ji' => 'hiiiiiiiiiiiiiiiiiiii']);
    }
}
