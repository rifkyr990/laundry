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
        return $this->hasMany(Product::class, 'jenis_id', 'id');
    }

    public function finishes()
    {
        return $this->hasMany(Finish::class, 'jenis_id', 'id');
    }
}
