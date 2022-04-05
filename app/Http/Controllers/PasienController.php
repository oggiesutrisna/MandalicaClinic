<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;
use App\Models\Pasien;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Pasien $pasiens)
    {
        $pasiens = Pasien::orderBy('id', 'DESC')->paginate(11);
        return view('pasiens.index', compact('pasiens'));
    }

    public function pasienIndex(Request $request, Pasien $pasiens)
    {
        $pasiens = Pasien::orderBy('id', 'DESC')->paginate(3);
        return view('home', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasiens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StorePasienRequest $request)
    {
        Pasien::create($request->validated());
        Alert::success('Data Pasien Berhasil Ditambahkan', 'Tunggu untuk info selanjutnya dari kami!');
        return view('welcome');
    }

    public function storePasien(StorePasienRequest $request)
    {
        Pasien::create($request->validated());
        Alert::success('Berhasil', 'Data Pasien berhasil ditambahkan');
        return redirect()->route('pasiens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        return view('pasiens.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('pasiens.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePasienRequest $request, Pasien $pasien)
    {
        $pasien->update($request->validated());
        Alert::success('Berhasil', 'Data Berhasil di Simpan');
        return redirect()->route('pasiens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        toast('Berhasil', 'Data anda telah berhasil di hapus');
        return redirect()->back();
    }
}
