<?php

namespace App\Http\Controllers;

use App\Models\Blog as Blog;
use Illuminate\Http\Request;

class ViewBlogsController extends Controller
{

    /**
     * Display the specified resource
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function viewblogs(Blog $blog)
    {
        return view('blogs.bacablog', compact('blog'));
    }

    /**
     * @param Request $request
     *
     */
    public function indexBlog(Request $request)
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(3);
        return view('viewBlogs', compact('blogs'));
    }

}
