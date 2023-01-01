<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Finish;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_layanan',
        'estimasi',
        'harga',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
    public function finishes()
    {
        return $this->hasMany(Finish::class, 'category_id', 'id');
    }
}
