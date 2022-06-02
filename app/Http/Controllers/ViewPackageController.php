<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewPackageController extends Controller
{
    public function viewpackage()
    {
        return view('viewpackages');
    }
}
