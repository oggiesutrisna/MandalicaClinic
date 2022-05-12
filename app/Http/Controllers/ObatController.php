<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreObatRequest;
use App\Http\Requests\UpdateObatRequest;
use App\Models\Obat;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obats = Obat::orderBy('id', 'desc')->paginate(5);
        return view('obats.index', compact('obats'));
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
        Obat::create($request->validated());
        if($request->has('save_action')) {
            Alert::success('Berhasil', 'Data berhasil ditambahkan');
            return redirect()->route('obats.index');
        } else($request->has('save_action_continue'));
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
        $obat->update($request->all());
        if($request->has('save_action')) {
            Alert::success('Berhasil', 'Data berhasil diubah');
            return redirect()->route('obats.index');
        } else($request->has('save_action_continue'));

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
