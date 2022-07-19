<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  showing ke tabel admin
    public function index(Request $request)
    {
        $blog = Blog::orderBy('id', 'DESC')->paginate(5);
        return view('blogs.index', compact('blog'));
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
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'tag' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $inputblog = [
            'slug' => SlugService::createSlug(Blog::class, 'slug', $request->judul),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tag' => $request->tag,
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];

        Blog::create($inputblog);

        if ($request->file('gambar')) {
            $validasidata['gambar'] = $request->file('gambar')->store('storage/blog', 'public');
        }

        Alert::success('Berhasil', 'Artikel anda telah berhasil ditambahkan');
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blog->update($request->all());
        // Validasi Gambar
        if ($request->file('gambar')) {
            $validasidata['gambar'] = $request->file('gambar')->store('storage/blog', 'public');
        }
        // Always Berhasil kok, tidak ada yang lebih
        Alert::success('Berhasil', 'Artikel anda berhasil di edit');
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        Alert::success('Berhasil', 'Artikel anda berhasil di hapus');
        return redirect()->route('blogs.index');
    }
}
