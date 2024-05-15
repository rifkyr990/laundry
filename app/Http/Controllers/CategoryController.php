<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Jenis;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanans = Category::all();
        return view('layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembayaran = Pembayaran::all();
        $jenis = Jenis::all();
        $categories = Category::all();

        return view('create', compact('pembayaran', 'jenis', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'estimasi' => 'required',
            'harga' => 'required'
        ]);

        $data = $request->all();
        $layanan = new Category;
        $layanan->nama_layanan = $data['nama_layanan'];
        $layanan->estimasi = $data['estimasi'];
        $layanan->harga = $data['harga'];
        $layanan->save();

        return redirect()->back()->with('success', 'berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('layanan.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $input = $request->all();
        $category->update($input);

        return redirect()->route('layanan')->with('success', 'berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $layanan)
    {
        $layanan->delete();

        return redirect()->route('layanan')->with('success', 'Orderan berhasil dihapus');
    }
}
