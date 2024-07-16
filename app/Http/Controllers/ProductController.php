<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Complaint;
use App\Models\Finish;
use Illuminate\Support\Carbon;
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
    public function index(Request $request)
    {
    $statuses = Status::with('products')->get(); // Memuat status dan produk terkait
    $todayDate = Carbon::now()->format('Y-m-d');
    $owners = Owner::with('products')->get();

    $products = Product::query()
        ->when($request->filled('date'), function ($query) use ($request) {
            // Jika ada tanggal yang diberikan dalam request, filter berdasarkan tanggal itu
            return $query->whereDate('created_at', $request->date);
        })
        ->when($request->filled('status_id'), function ($query) use ($request) {
            // Filter produk berdasarkan status_id jika status_id disediakan dalam request
            return $query->where('status_id', $request->status_id);
        })
        ->paginate(10); // Paginate hasilnya untuk menampilkan 10 produk per halaman

    // Kembalikan ke view dengan data produk dan status yang tersedia
    return view('product.index', compact('products', 'statuses', 'owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::all();
        $categories = Category::with('products')->get();
        $statuses = Status::with('products')->get();
        $owner = Owner::with('products')->get();

        return view('product.create', compact('jenis', 'categories', 'statuses', 'owner'));
    }

    public function tambah(Request $request)
    {
        $data = $request->all();

        $idOrder = 'ORD'. strtoupper(substr(uniqid(), -6));
        $product = new Product;
        $product->order_id = $idOrder;
        $product->owner_id = $data['owner_id'];
        $product->status_pembayaran = $data['status_pembayaran'];
        $product->category_id = $data['category_id'];
        $product->berat = $data['berat'];

    // Convert the string values to integers for jenis_id
        $jenis_id = array_map('intval', $request->jenis_id ?? []);

    // Calculate the total price for additional items
        $totalTambahan = 0;
        foreach ($jenis_id as $jenis) {
            $tambahan = Jenis::find($jenis);
            if ($tambahan) {
                $totalTambahan += $tambahan->harga;
            }
        }

        // Calculate the overall total price
        $category = Category::find($data['category_id']);
        $categoryPrice = $category->harga ?? 0;
        $total = ($product->berat * $categoryPrice) + $totalTambahan;
        $product->total = $total;
        $product->tanggal_masuk = Date::now();

        if ($category) {
            $product->tanggal_selesai = Carbon::now()->addDays($category->estimasi);
        }

        $owner = Owner::find($data['owner_id']);
        if ($owner) {
            $product->telp = $owner->telp;
        } else {
            $product->telp = ''; // Default value or handle the case when owner is not found
        }

        $product->user_id = auth()->id();
        $product->save();

    // Sync the jenis relationship
        $product->jenis()->sync($jenis_id);

        return redirect()->route('product')->with('success', 'Pesanan berhasil diinput!');
    }




    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenis = Jenis::All();
        $product = Product::findOrFail($id);
        $product->jenis_id = json_decode($product->jenis_id, true); // Mendekode data JSON menjadi array PHP
        return view('product.show', compact('product', 'jenis'));
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
        $jenis = Jenis::all();
        $categories = Category::all();
        $status = Status::all();

        return view('product.edit', compact('jenis', 'categories', 'status', 'product'));
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
        $product = Product::where('order_id', $orderId)->first();

        if ($product) {
            return view('track', ['product' => $product]);
        } else {
            return view('track', ['product' => null]);
        }

    }

    public function updateStatus(Request $request, $id) {
        $request->validate([
            'status_id' => 'required|in:1,2,3',
        ]);
        $item = Product::find($id);
        $item->status_id = $request->status_id;
        $item->save();

        return redirect()->back()->with('success', 'berhasil dirubah');
    }

    public function kirimnota($id) {
        $product = Product::find($id);
    
        $pesan = "Detail Pesanan:\n\n" .
            "ID Pesanan: " . $product->order_id . "\n" .
            "Nama: " . $product->owner->nama . "\n" .
            "Tanggal Masuk: ". $product->tanggal_masuk. "\n".
            "Tanggal Keluar: ". $product->tanggal_selesai. "\n".
            "Jenis Layanan: " . $product->category->nama_layanan . "\n" .
            "Status Pesanan: " . $product->status->nama_status . "\n" .
            "Status Pembayaran: " . $product->pembayaran->nama_pembayaran . "\n" .
            "Total Harga: Rp" . number_format($product->total) . "\n\n" .
            "Untuk memeriksa status pesanan lebih lanjut, mohon kunjungi situs kami di www.laundrygo.com/track";
    
        $url = "https://wa.me/".$product->telp."?text=".urlencode($pesan);
    
        return view('redirect_whatsapp', ['wa_url' => $url]);
    }

    public function search(Request $request)
    {
        $statuses = Status::all();
        $orderID = $request->order_id;
        $products = Product::where('order_id', $orderID)->paginate(10);

        return view('product.index', compact('products', 'statuses'));
    }

    public function printReceipt($id)
{
    $product = Product::with(['owner', 'category', 'status', 'pembayaran'])->findOrFail($id);
    return view('product.print', compact('product'));
}

}
