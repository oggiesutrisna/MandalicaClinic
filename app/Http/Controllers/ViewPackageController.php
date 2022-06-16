<?php

namespace App\Http\Controllers;

use App\Models\Package as ModelsPackage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ViewPackageController extends Controller
{

    public function showpackage(ModelsPackage $package)
    {
        return view('packages.bacapaket', compact('package'));
    }

    public function indexPackage(Request $request)
    {
        $packages = ModelsPackage::orderBy('id', 'asc')->get();
        return view('viewpackages', compact('packages'));
    }

    public function WelcomePage(Request $request)
    {
        $packages = ModelsPackage::all();
        return view('welcome', compact('packages'));
    }

}
