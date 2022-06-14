<?php

namespace App\Http\Controllers;

use App\Models\Package as ModelsPackage;
use Illuminate\Http\Request;

class ViewPackageController extends Controller
{
    // To Display when user clicked one package.
    public function showPackage(ModelsPackage $package)
    {
        return view('viewpackages', compact('packages'));
    }

    // To Display when user clicked the mandalica packages text.
    public function indexPackage(Request $request)
    {
        $packages = ModelsPackage::all();
        return view('viewpackages', compact('packages'));
    }

    // To Display an Package to Home
    public function WelcomePage(Request $request) 
    {
        $packages = ModelsPackage::all();
        return view('welcome', compact('packages'));
    }

}
