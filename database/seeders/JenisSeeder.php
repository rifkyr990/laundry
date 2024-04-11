<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jenis;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenis::create(['nama_jenis' => "Selimut",'harga' => "6500"]);
        Jenis::create(['nama_jenis' => "Sprei",'harga' => "5000"]);
    }
}
