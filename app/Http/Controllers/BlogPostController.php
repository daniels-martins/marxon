<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // minimal validation
        $validated = $request->validate([
            'img' => 'required',
            'alt' => 'required',
            'tags' => 'nullable',
            'title' => 'required',
            'slug' => 'required',
            'pg1' => 'required',
            'pg2' => 'required',
            'pg3' => 'nullable',
            'pg4' => 'nullable',
            'pg5' => 'nullable',
            'pg6' => 'nullable',
            'pg7' => 'nullable',
        ]);

        // move/store image to server
        $file_url = request('img')->move('uploads/blog_img', $request->img->getClientOriginalName());

        // this is what we store in the db : the img_url
        $validated['img'] = $file_url->getPathName();

        // dd($validated);
        // store post to db
        BlogPost::create($validated);

        return back()->with('success', 'post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $blogPost)
    {
        // dd($blogPost);
        return view('backend.blog_edit', compact('blogPost'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        // dd('here', $request->all());
        // minimal validation
        $validated = $request->validate([
            'img' => 'nullable',
            'alt' => 'required_if:img,true',
            'tags' => 'nullable',
            'title' => 'required',
            'slug' => 'required',
            'pg1' => 'required',
            'pg2' => 'required',
            'pg3' => 'nullable',
            'pg4' => 'nullable',
            'pg5' => 'nullable',
            'pg6' => 'nullable',
            'pg7' => 'nullable',
        ]);
        // dd('oka');
        // replace image in server if requested

        if (request('img')) {
            $file_url = request('img')->move('uploads/blog_img', $request->img->getClientOriginalName());

            // this is what we store in the db : the img_url
            $validated['img'] = $file_url->getPathName();

            // delete the old img
            $fileDelete = file_exists($blogPost->img) ? unlink($blogPost->img) : null;
            // dd($fileDelete);
        }

        // dd($validated);
        // store post to db
        $blogPost->update($validated);

        return back()->with('success', 'post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }
}
