<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'ASC')->paginate(5);

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasiblogs = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'gambar' => 'required|max:255',
            'tags' => 'required|max:255',
        ]);

        Blog::create($validasiblogs);
        Alert::success('Tulisan Blog anda berhasil di tambahkan', 'Tunggu untuk info selanjutnya dari kami!');
        return view('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blogs.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blogs)
    {
        $request->validate([
            'judul' => 'max:255',
            'deskripsi' => 'max:255',
            'gambar' => 'max:255',
            'tags' => 'max:255',
        ]);

        $blogs->update($request->all());
        Alert::success('Berhasil', 'Blog anda berhasil di update');
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blogs)
    {
        $blogs->delete();
        toast('Berhasil', 'Blog berhasil di hapus');
        return redirect()->back();
    }
}
