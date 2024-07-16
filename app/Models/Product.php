<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Product extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'jenis',
        'tanggal_masuk',
        'tanggal_selesai',
        'berat',
        'jenis_id',
        'status_pembayaran',
        'category_id',
        'status_id',
        'owner_id',
        'order_id',
        'customer_id',
        'jenis_id' => 'array',
    ];

    protected $casts = [
        'jenis_id' => 'array',
    ];
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($product) {
            $product->tanggal_masuk = Carbon::today();
            $category = $product->category;
            if ($category) {
                $product->tanggal_selesai = Carbon::today()->addDays($category->estimasi);
            }
        });
    }
    
    public function jenis()
    {
        return $this->belongsToMany(Jenis::class, 'jenis_product', 'product_id', 'jenis_id');
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
