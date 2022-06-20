<?php

namespace App\Http\Controllers;

use App\Models\Blog as Blog;
use Illuminate\Http\Request;

class ViewBlogsController extends Controller
{
    public function viewblogs(Blog $blog)
    {
        return view('blogs.bacablog', compact('blog'));
    }

    public function indexBlog(Request $request)
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(3);
        return view('viewBlogs', compact('blogs'));
    }

    public function welcomepage(Request $request, Blog $blog)
    {
        $blog = Blog::all();
        return view('welcome');
    }

}
