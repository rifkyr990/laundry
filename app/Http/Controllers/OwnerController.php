<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Finish;
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
        return view('payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('admin');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function finishorder($id)
    {
        $product = Product::find($id);

        $finish = new Finish;
        
        $finish->owner_id = $product->owner_id;
        $finish->tanggal = $product->tanggal;
        $finish->berat = $product->berat;
        $finish->category_id = $product->category_id;
        $finish->jenis_id = $product->jenis_id;
        $finish->status_id = $product->status_id;
        $finish->pembayaran_id = $product->pembayaran_id;
        $finish->user_id = $product->user_id;
        $finish->save();

        $product->delete();

        return redirect()->back()->with('success', 'berhasil');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function finish(Finish $finish) {
        $finishes = Finish::where('user_id', Auth::id())->get();
        
        return view('myorders', compact('finishes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        //
    }
}
