<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pesanan',
        'nama_pengirim',
        'foto',
    ];
}