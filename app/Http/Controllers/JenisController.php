<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = Jenis::all();
        return view('jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::all();

        return view('create', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis' => 'required',
            'harga' => 'required'
        ]);

        $data = $request->all();
        $jenis = new Jenis;
        $jenis->nama_jenis = $data['nama_jenis'];
        $jenis->harga = $data['harga'];
        $jenis->save();

        return redirect()->back()->with('success', 'berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis $jenis)
    {
        return view('jenis.edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenis $Jenis)
    {
        $input = $request->all();
        $Jenis->update($input);

        return redirect()->route('jenis')->with('success', 'berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis $jenis)
    {
        $jenis->delete();

        return redirect()->route('jenis')->with('success', 'berhasil dihapus');
    }
}
