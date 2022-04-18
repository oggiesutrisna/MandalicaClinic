<?php

namespace App\Http\Controllers;

use App\Models\Pasien;

class ShowPasienController extends Controller
{
    public function show(Pasien $pasien)
    {
        return view('pasiens.show', compact('pasien'));
    }
}
