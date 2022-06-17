<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class ViewPackageController extends Controller
{
      /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function showpackage(Package $package)
    {
        return view('packages.bacapaket', compact('package'));
    }

    public function indexPackage(Request $request)
    {
        $packages = Package::orderBy('id', 'asc')->get();
        return view('viewpackages', compact('package'));
    }

    public function WelcomePage(Request $request)
    {
        $packages = Package::all();
        return view('welcome', compact('package'));
    }

}
