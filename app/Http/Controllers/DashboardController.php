<?php

namespace App\Http\Controllers;

use App\Charts\MonthlyOrdersChart;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Product;
use Illuminate\Support\Carbon;
use App\Models\Status;


class DashboardController extends Controller
{
    public function index(MonthlyOrdersChart $chart) {
        $customerCount = Owner::count(); // Menghitung jumlah pelanggan
        $unfinishedOrderCount = Product::where('status_id', 1)->count(); // Menghitung jumlah pesanan yang belum selesai
        $finishedOrderCount = Product::where('status_id', 2)->count(); // Menghitung jumlah pesanan yang sudah selesai
    
        return view('dashboard', [
            'chart' => $chart->build(),
            'customerCount' => $customerCount,
            'unfinishedOrderCount' => $unfinishedOrderCount,
            'finishedOrderCount' => $finishedOrderCount,
        ]);
    }

    public function filterProducts(Request $request)
    {
        // Load statuses for the dropdown
        $statuses = Status::with('products')->get();

        // Build the query
        $query = Product::query()->with('owner', 'status');

        // Apply date filters if provided
        if ($request->filled('start_date')) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }

        if ($request->filled('end_date')) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }

        // Apply status filter if provided
        if ($request->filled('status_id')) {
            $query->where('status_id', $request->status_id);
        }

        // Get the results and paginate
        $products = $query->paginate(10);

        return view('report', compact('products', 'statuses'));
    }
}
