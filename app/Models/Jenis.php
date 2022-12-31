<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

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
        return $this->hasMany(Product::class, 'jenis_id', 'id');
    }
}