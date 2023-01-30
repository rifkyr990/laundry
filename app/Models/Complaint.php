<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pesanan',
        'nama_pemesan',
        'keluhan',
        'foto',
        'saran',
    ];
}
