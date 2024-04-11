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
use Illuminate\Support\Facades\Date;
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

        return view('product.index', compact('jenis', 'pembayaran', 'categories', 'statuses', 'owner', 'products', 'pelanggan', 'finish', 'complaint'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::with('products')->get();
        $pembayaran = Pembayaran::with('products')->get();
        $categories = Category::with('products')->get();
        $statuses = Status::with('products')->get();
        $owner = Owner::with('products')->get();

        return view('product.create', compact('jenis', 'pembayaran', 'categories', 'statuses', 'owner'));
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
    public function tambah(Request $request)
    {
        $data = $request->all();

        $product = new Product;
        $product->owner_id = $data['owner_id'];
        $product->category_id = $data['category_id'];
        $product->berat = $data['berat'];
        // Mengonversi nilai string menjadi integer sebelum menyimpannya sebagai array
        $jenis_id = array_map('intval', $request->jenis_id ?? []);
        // Menggunakan json_encode untuk menyimpan array integer ke dalam kolom jenis_id
        $product->jenis_id = json_encode($jenis_id);

        // Menghitung total harga dari tambahan barang
        $totalTambahan = 0;
        foreach ($jenis_id as $jenis) {
            $tambahan = Jenis::find($jenis);
            if ($tambahan) {
                $totalTambahan += $tambahan->harga;
            }
        }

        // Menghitung total harga keseluruhan
        $categoryPrice = $product->category->harga ?? 0;
        $total = ($product->berat * $categoryPrice) + $totalTambahan;
        $product->total = $total;
        $product->tanggal = Date::now();
        // Mengambil data pemilik berdasarkan owner_id yang dipilih
        $owner = Owner::find($data['owner_id']);
        if($owner) {
            // Jika pemilik ditemukan, maka isi nomor telepon (telp) dari pemilik
            $product->telp = $owner->telp;
        } else {
            // Handle jika pemilik tidak ditemukan
            // Misalnya, mengatur default value untuk telp atau memberikan pesan kesalahan
            $product->telp = ''; // Atau isi dengan nilai default
        }
        $product->user_id = auth()->id();
        $product->save();

        return redirect()->route('product')->with('success', 'Pesanan berhasil diinput!');
    }



    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Product $product)
    {
        return view('product.detail', compact('product'));
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

        return view('product.edit', compact('pembayaran', 'jenis', 'categories', 'status', 'product'));
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

        return redirect()->route('product.create')->with('success', 'Orderan berhasil dihapus');
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
