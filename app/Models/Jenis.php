<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_jenis',
        'harga',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'jenis_product', 'jenis_id', 'product_id');
    }
}
