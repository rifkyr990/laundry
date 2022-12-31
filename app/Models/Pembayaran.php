<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_pembayaran',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'pembayaran_id', 'id');
    }
}
