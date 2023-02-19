<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogcatagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $catagories = Blogcatagory::all();
        return view('blog', compact('blogs','catagories'));
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
        $title = $request->input('title');
        $description = $request->input('blog');
        $catagory = $request->input('catagory');
        $blog = new Blog();
        $blog['title'] = $title;
        $blog['description'] = $description;
        $blog['blogcatagory_id'] = $catagory;
        $blog->save();
        $catagories = Blogcatagory::all();
        $blogs = Blog::all();
        return view('blog',compact('blogs','catagories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('blog_id');
        DB::table('blogs')->where('id',$id)->delete();
        return redirect()->route('blog');
    }
    public function viewBlog($id){
        $blog = Blog::where('blogcatagory_id', $id)->get();
        
        return view('blogView', compact('blog'));
    }
    public function updateBlog(Request $request){
        $id = $request->input('id');
        $title = $request->input('title');
        $description = $request->input('editordata');

        $blog = Blog::find($id);
        $blog['title'] = $title;
        $blog['description'] = $description;
        $blog->save();
        return response()->json(['success'=>'Blog updated successfully']);

    }
}
