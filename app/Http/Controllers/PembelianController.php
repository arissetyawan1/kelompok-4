<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $data = Pembelian::latest()->paginate(2);
        return view('pembelian', compact('data'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'barang_nama' => 'required|min:3',
            'nama_user' => 'required',
            'jumlah_beli' => 'required|numeric',
            'harga' => 'required|numeric',
            'tanggal_beli' => 'required',
            'total_harga'=> 'required|numeric'
        ],
        [
            'required' => 'Field ini harus diisi',
            'numeric' => 'Diisi dengan angka'
        ]);
        Pembelian::create($data);
        return redirect()->route('pembelian');
    }
    public function destroy(Pembelian $id)
    {
        $id->delete();
        return redirect()->route('pembelian');
    }
}
