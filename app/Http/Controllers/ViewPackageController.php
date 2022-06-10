<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class ViewPackageController extends Controller
{
    public function viewpackage()
    {
        return view('viewpackages');
    }

    public function indexPackage()
    {
        $packages = Package::all();
        return view('viewpackages', compact('packages'));
    }

}
