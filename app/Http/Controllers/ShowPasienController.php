<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

use RealRashid\SweetAlert\Facades\Alert;

class ShowPasienController extends Controller
{
    public function viewPasien(Request $request, Pasien $pasien) {
        Alert::success('Verified', 'Pasien ini telah terverifikasi');
        return view('showPasien', compact('pasien'));
    }
}
