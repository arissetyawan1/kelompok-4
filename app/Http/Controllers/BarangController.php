<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::latest()->paginate(2);
        return view('dashboard',compact('data'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'barang_name' => 'required|min:3',
            'barang_jenis' => 'required',
            'barang_harga' => 'required|numeric',
            'barang_stock' => 'required|numeric'
        ],
        [
            'required' => 'Field ini harus diisi',
            'numeric' => 'Diisi dengan angka'
        ]);
        Barang::create($data);
        return redirect()->route('dashboard');
    }

    public function destroy(Barang $id)
    {
        $id->delete();
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $data = Barang::where('id', $id)->first();
        return view('formUpdateBarang', compact('data'));
    }
    public function update($id, Request $request)
    {
         $data = $request->validate([
            'barang_name' => 'required|min:3',
            'barang_jenis' => 'required',
            'barang_harga' => 'required|numeric',
            'barang_stock' => 'required|numeric'
        ],
        [
            'required' => 'Field ini harus diisi',
            'numeric' => 'Diisi dengan angka',
            'min' => 'Minimal 3 karakter'
        ]);

        Barang::where('id',$id)->update($data);
        return redirect()->route('dashboard');
    }
}
