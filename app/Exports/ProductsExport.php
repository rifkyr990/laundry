<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Carbon;
use PhpParser\ErrorHandler\Collecting;
use Illuminate\Support\Collection;

class ProductsExport implements FromArray, WithHeadings
{
    protected $products;
    protected $startDate;
    protected $endDate;
    protected $status;

    public function __construct(Collection $products, Carbon $startDate, Carbon $endDate)
    {
        $this->products = $products;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
    public function array(): array
    {
        $ordersArray = [];

        foreach ($this->products as $order) {
            $ordersArray[] = [
                'ID' => $order->order_id,
                'Nama Pelanggan' => $order->owner->nama,
                'Status' => $order->status->nama_status,
                'Tanggal Dibuat' => $order->created_at->format('Y-m-d'),
            ];
        }

        return $ordersArray;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Pelanggan',
            'Status',
            'Tanggal Dibuat',
        ];
    }
}