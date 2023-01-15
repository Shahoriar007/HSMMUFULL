<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_photos()
    {
        $photos = Gallery::all();
        return view ('photos', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_videos()
    {
        //
    }




    public function addPhotos(Request $request){
        if ($request->file('images')) {
            $imageArray = [];
            foreach (($request->file('images')) as $image) {
                $file = $image;
                $filename = date('YmdHi') . $file->getClientOriginalName();
                Image::make($file)->save('photos/'.$filename);
                $save_url = 'photos/'.$filename;
                $imageArray = $filename;
                $photo = new Gallery();
                $photo['image'] = $imageArray;
                $photo->save();
                
            }
        }
        $photos = Gallery::all();
        return view('photos',compact('photos'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deletePhoto(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
    public function viewPhotos(){
        $photos = Gallery::all();
        return view('gallery', compact('photos'));
    }
}
