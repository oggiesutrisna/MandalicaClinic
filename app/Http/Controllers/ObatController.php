<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreObatRequest;
use App\Http\Requests\UpdateObatRequest;
use App\Models\Obat;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obats = Obat::orderBy('id', 'desc')->get();
        return view('obats.index', compact('obats'));
    }

    public function datatable()
    {
        $obats = Obat::orderBy('id', 'desc')->get();
        return DataTables::of($obats)
            ->addColumn('action', function ($obat) {
                return view('obats.action', compact('obat'));
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObatRequest $request)
    {
        $obat = new Obat;
        $obat->kode_obat = $request->kode_obat;
        $obat->nama_obat = $request->nama_obat;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->harga_obat = $request->harga_obat;
        $obat->stok_obat = $request->stok_obat;
        $obat->save();

        if($obat->save()){
            Alert::success('Success', 'Data obat berhasil ditambahkan');
            return redirect()->route('obat.index');
    } elseif ($obat->error()) {
        Alert::error('Error', 'Data obat gagal ditambahkan');
        return redirect()->route('obat.index');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(Obat $obat)
    {
        return view('obats.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat $obat)
    {
        return view('obats.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateObatRequest $request, Obat $obat)
    {
        $obat->kode_obat = $request->kode_obat;
        $obat->nama_obat = $request->nama_obat;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->harga_obat = $request->harga_obat;
        $obat->stok_obat = $request->stok_obat;
        $obat->save();

        if($obat->save()){
            Alert::success('Success', 'Data obat berhasil diubah');
            return redirect()->route('obats.index');
        } elseif ($obat->error()) {
            Alert::error('Error', 'Data obat gagal diubah');
            return redirect()->route('obats.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat)
    {
        if($obat->delete()){
            Alert::success('Success', 'Data obat berhasil dihapus');
            return redirect()->route('obats.index');
        } elseif ($obat->error()) {
            Alert::error('Error', 'Data obat gagal dihapus');
            return redirect()->route('obats.index');
        }
    }
}
