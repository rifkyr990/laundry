<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Complaint;
use App\Models\Finish;
use App\Models\Jenis;
use App\Models\Owner;
use App\Models\Pembayaran;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finish = Finish::all();
        $complaint = Complaint::all();
        $pelanggan = Owner::all();

        $jenis = Jenis::with('products')->get();
        $pembayaran = Pembayaran::with('products')->get();
        $categories = Category::with('products')->get();
        $statuses = Status::with('products')->get();
        $owner = Owner::with('products')->get();
        $products = Product::with('jenis', 'category', 'status', 'owner')->get();

        return view('product', compact('jenis', 'pembayaran', 'categories', 'statuses', 'owner', 'products', 'pelanggan', 'finish', 'complaint'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myOrder(Product $product)
    {
        $products = Product::where('user_id', Auth::id())->get();

        return view('myorder', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'jenis_id' => 'required',
            'category_id' => 'required',
            'berat' => 'required',
        ]);

        $data = $request->all();

        $owners = new Owner;
        $owners->nama = $data['nama'];
        $owners->telp = $data['telp'];
        $owners->alamat = $data['alamat'];
        $owners->save();

        $product = new Product;
        $product->jenis_id = $data['jenis_id'];
        $product->tanggal = $data['tanggal'];
        $product->berat = $data['berat'];
        $product->category_id = $data['category_id'];
        $product->owner_id = $owners->id;
        $product->user_id = auth()->id();
        $product->save();

        return redirect()->route('detail', $product->id)->with('success', 'Pesanan berhasil diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('show', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Product $product)
    {
        return view('detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $pembayaran = Pembayaran::all();
        $jenis = Jenis::all();
        $categories = Category::all();
        $status = Status::all();

        return view('edit', compact('pembayaran', 'jenis', 'categories', 'status', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        $product->update($input);

        return redirect()->route('product')->with('success', 'Orderan sudah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product')->with('success', 'Orderan berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel(Product $product)
    {
        $product->delete();

        return redirect()->route('create')->with('success', 'Orderan berhasil dihapus');
    }


    public function trackOrder()
    {
        return view('track');
    }

    public function processOrder(Request $request)
    {
        $orderId = $request->input('order_id');
        $product = Product::find($orderId);

        if ($product) {
            return view('track', ['product' => $product]);
        } else {
            return view('track', ['product' => null]);
        }
    }
}
