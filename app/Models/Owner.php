<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Finish;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'telp',
        'alamat',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'owner_id');
    }
    public function finishes()
    {
        return $this->hasMany(Finish::class, 'owner_id', 'id');
    }
}
