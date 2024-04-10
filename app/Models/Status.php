<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'status_id', 'id');
    }

    public function finish()
    {
        return $this->hasMany(Finish::class, 'status_id', 'id');
    }
}
