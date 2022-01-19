<?php

namespace App\Http\Controllers;

use App\DataTables\PasiensDataTable;
use App\DataTables\Scopes\PasienScope;
use App\Models\Pasien;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables as DataTables;

class PasienController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = Pasien::orderBy('id', 'DESC')->paginate(11);
        return view('pasiens.index', compact('pasiens'));
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
    public function store(Request $request)
    {
        $validasipasien = $request->validate([
            'nama' => 'required|max:255',
            'nohp' => 'required|max:255',
            'ttl' => 'required|max:255',
            'jeniskelamin' => 'required|max:255',
            'dateappointment' => 'required|max:255',
            'jenisappointment' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);

        Pasien::create($validasipasien);
        Alert::success('Data Pasien Berhasil Ditambahkan', 'Tunggu untuk info selanjutnya dari kami!');
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        return view('pasiens.show', compact('pasiens'));
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
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'max:255',
            'email' => 'max:255',
            'nohp' => 'max:12',
            'ttl' => 'max:255',
            'jeniskelamin' => 'max:255',
            'dateappoint' => 'max:255',
            'jenisappointment' => 'max:255',
            'keterangan' => 'max:255'
        ]);

        $pasien->update($request->all());
        Alert::success('Berhasil', 'Data Berhasil di simpan');
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
        toast('[Berhasil], Data Berhasil Di Hapus');
        return redirect()->route('pasiens.index');
    }

    public function storePasien(Request $request)
    {
        $validasipasien = $request->validate([
            'nama' => 'required|max:255',
            'nohp' => 'required|max:255',
            'ttl' => 'required|max:255',
            'jeniskelamin' => 'required|max:255',
            'dateappointment' => 'required|max:255',
            'jenisappointment' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);

        Pasien::create($validasipasien);
        Alert::success('Data Pasien Berhasil Ditambahkan', 'Tunggu untuk info selanjutnya dari kami!');
        return redirect()->route('pasiens.index');
    }
}
