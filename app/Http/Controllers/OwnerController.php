<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Finish;
use App\Models\Owner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        return view('owner.index', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner = Owner::all();

        return view('owner.create', compact('owner'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function complaint()
    {
        return view('complaint');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcomplaint(Request $request)
    {
        $request->validate([
            'foto' => 'required|file|mimes:png,jpg,svg|max:2048',
        ]);

        $gambar = $request->file('foto');
        $destinationPath = 'konfir/';
        $gambarImage = date('YmdHis').'.'.$gambar->getClientOriginalExtension();
        $gambar->move($destinationPath, $gambarImage);
        $input['foto'] = "$gambarImage";

        $data = $request->all();

        $complaint = new Complaint;
        $complaint->id_pesanan = $data['id_pesanan'];
        $complaint->nama_pemesan = $data['nama_pemesan'];
        $complaint->keluhan = $data['keluhan'];
        $complaint->foto = $gambarImage;
        $complaint->saran = $data['saran'];

        $complaint->save();

        return redirect()->route('home')->with('success', 'Keluhan berhasil disampaikan!');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
        ]);

        $data = $request->all();
        $idOwners = 'CUST'. strtoupper(substr(uniqid(), -6));
        $owners = new Owner;
        $owners->id_owners = $idOwners;
        $owners->nama = $data['nama'];
        $owners->telp = $data['telp'];
        $owners->alamat = $data['alamat'];
        $owners->save();

        return redirect()->route('owner')->with('success', 'Pelanggan berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        return view('owner.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        $input = $request->all();
        $owner->update($input);

        return redirect()->route('owner')->with('success', 'Pelanggan sudah di update');
    }

    public function show(Owner $owner)
    {
        return view('owner.show', compact('owner'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function hapus(Owner $owner)
    {
        $owner->delete();

        return redirect()->route('owner');
    }
}
