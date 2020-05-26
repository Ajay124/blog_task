<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::where('user_id', $request->session()->get('user_id'))->get();
        return view('welcome' )->with('blogs', $blogs);
    }


    public function addBlog(Request $request)
    {
       $segment = $request->segment(2);
       if ( $segment != '' && $segment > 0 ) {
            $blog = Blog::where('id', $segment)->first();
            //print_r($blog);die;
            return view('add-blog' )->with('blog', $blog);
       } else {
        return view('add-blog');
       }
       return redirect('/'); 
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
        if( $request->blog_id && $request->blog_id != '' ) {
            $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
            ]);
            //$blog = new Blog;
            $blog = Blog::find($request->blog_id);
            //$blog->user_id = $request->session()->get('user_id');
            $blog->title = $request->title;
        
            $blog->description = $request->description;
        
            if ($request->file('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('blog', 'public');
                $blog->image = $imagePath;
            } 
            $blog->save();
            return redirect('/'); 
        } else {
            $request->validate([
                'title' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'description' => 'required|string',
                
            ]);
            $blog = new Blog;
            $blog->user_id = $request->session()->get('user_id');
            $blog->title = $request->title;
        
            $blog->description = $request->description;
        
            if ($request->file('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('blog', 'public');
                $blog->image = $imagePath;
            } else {
                $blog->image = "none";
            }
            $blog->save();
            return redirect('/'); 
        }
        return redirect('/'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $segment = $request->segment(2);
        if ( $segment != '' && $segment > 0 ) {
             $blog = Blog::where('id', $segment)->first();
             return view('single-blog' )->with('blog', $blog);
        } else {
            return view('/');
        }
        return redirect('/'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
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
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $segment = $request->segment(2);
        $blog = Blog::find($segment);
        $blog->delete();
        return redirect('/');
    }
}
