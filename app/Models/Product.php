<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jenis;
use App\Models\Pembayaran;
use App\Models\Category;
use App\Models\Status;
use App\Models\Owner;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis',
        'tanggal',
        'berat',
        'jenis_id',
        'pembayaran_id',
        'category_id',
        'status_id',
        'owner_id',
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
