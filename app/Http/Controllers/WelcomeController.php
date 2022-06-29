<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Package;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function englishtrans()
    {
        return view('welcomeenglish');
    }

    public function welcomepage() 
    {
        $package = Package::all();
        $blog = Blog::all();
        return view('welcome', compact('blog', 'package'));
    }
}
