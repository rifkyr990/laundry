<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'gambar' => "artikel1.jpg",
            'judul' => "7 Cara Menghilangkan Bau Apek pada Baju dengan Bahan Rumahan",
            'isi_artikel' => "Baju sering kali mengeluarkan bau apek. Biasanya hal ini disebabkan karena telalu lama disimpan atau proses
            pengeringan yang tidak sempurna.",
            'author' => 'Rifky Ramadhan',
            'link' => 'read'
        ]);

        Article::create([
            'gambar' => "artikel2.jpg",
            'judul' => "Bikin Pakaian Wangi Terus, 7 Rekomendasi Parfum Laundry dan Harganya",
            'isi_artikel' => "sangat wangi dan lebih tahan lama, berbeda dengan
            pewangi pada umumnya. Bahkan, meski sudah dimasukan ke dalam lemari selama beberapa hari",
            'author' => 'Rifky Ramadhan',
            'link' => 'read2'
        ]);

        Article::create([
            'gambar' => "artikel3.jpg",
            'judul' => "Wajib Tahu! Ini Tips Merawat Warna Pakaian Tetap Awet",
            'isi_artikel' => "Bukankah mengenakan pakaian dengan warna mencolok membuat kita lebih percaya diri? Siapa yang tidak suka
            warna cerah pada pakaian? Namun, saat dicuci, warnanya cepat pudar.",
            'author' => 'Rifky Ramadhan',
            'link' => 'read3'
        ]);
    }
}
