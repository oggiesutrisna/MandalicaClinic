<?php

namespace App\Http\Controllers;

use App\Models\Blog as ModelsBlog;
use Illuminate\Http\Request;

class ViewBlogsController extends Controller
{
    public function blogIndex() 
    {
        return view('viewblogs');
    }

    public function indexBlog(Request $request) 
    {
        $blogs = ModelsBlog::orderBy('created_at', 'DESC')->paginate(3);
        return view('viewBlogs', compact('blogs'));
    }

    public function viewBlog(Request $request)
    {
        return view('viewblogs', compact('blogs'));
    }

    public function welcomePage(Request $request)
    {
        $blogs = ModelsBlog::orderBy('id', 'desc')->paginate(3);
        return view('welcome', compact('blogs'));
    }

}
