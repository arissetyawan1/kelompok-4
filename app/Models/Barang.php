<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable =[
        'barang_name',
        'barang_jenis',
        'barang_harga',
        'barang_stock'
    ];
}
