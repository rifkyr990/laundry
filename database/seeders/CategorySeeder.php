<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['nama_layanan' => "Reguler", 'estimasi' => "2-3 Hari", 'harga' => "4500"]);
        Category::create(['nama_layanan' => "One Day Service", 'estimasi' => "1 Hari", 'harga' => "5000"]);
        Category::create(['nama_layanan' => "Express", 'estimasi' => "3 jam", 'harga' => "6500"]);
    }
}
