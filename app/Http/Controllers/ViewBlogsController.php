<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Blog;

class ViewBlogsController extends Controller
{
    public function blogLandingPage() {
        return view('viewblogs');
    }

    public function viewArticles() {
        return view('viewArticles')->with('blogs', orderBy('updated_at', 'desc')->get());
    }
}
