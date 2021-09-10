<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $fillable =[
        'barang_nama',
        'nama_user',
        'jumlah_beli',
        'harga',
        'tanggal_beli',
        'total_harga'
    ];
}
