<?php

namespace App\Charts;

use App\Models\Product;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class MonthlyOrdersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
{
    $tahun = date('Y');
    $bulan = date('m');

    $monthlyIncome = [];

    for ($i = 1; $i <= $bulan; $i++) {
        // Menghitung total pemasukan untuk setiap bulan
        $totalIncome = Product::whereYear('created_at', $tahun)
        ->whereMonth('created_at', $i)
        ->sum('total');
        $monthlyIncome[] = $totalIncome;
        $chartData[] = Carbon::create()->month($i)->format('F');
    }

    // Menyusun data untuk chart
    
    return $this->chart->lineChart()
        ->setTitle('Data Pemasukan Laundry')
        ->setSubtitle('Total Pemasukan Laundry Setiap Bulan')
        ->addData('Total Pemasukan', $monthlyIncome)
        ->setXAxis($chartData);
}

}
