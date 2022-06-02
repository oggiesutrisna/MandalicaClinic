<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewBlogsController extends Controller
{
    public function blogLandingPage() {
        return view('viewblogs');
    }
}
