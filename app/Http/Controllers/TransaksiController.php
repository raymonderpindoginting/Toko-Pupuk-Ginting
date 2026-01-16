<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Produk;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('produk')->get();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $produk = Produk::all();
        return view('transaksi.create', compact('produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required',
            'jumlah' => 'required|integer|min:1'
        ]);

        $produk = Produk::findOrFail($request->produk_id);

        Transaksi::create([
            'produk_id' => $produk->id,
            'jumlah' => $request->jumlah,
            'total_harga' => $produk->harga * $request->jumlah
        ]);

        return redirect()->route('transaksi.index')
                         ->with('success', 'Transaksi berhasil ditambahkan');
    }

    // 🔴 INI YANG TADI BELUM ADA
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $produk = Produk::all();

        return view('transaksi.edit', compact('transaksi', 'produk'));
    }

    // 🔴 INI JUGA WAJIB
    public function update(Request $request, $id)
    {
        $request->validate([
            'produk_id' => 'required',
            'jumlah' => 'required|integer|min:1'
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $produk = Produk::findOrFail($request->produk_id);

        $transaksi->update([
            'produk_id' => $produk->id,
            'jumlah' => $request->jumlah,
            'total_harga' => $produk->harga * $request->jumlah
        ]);

        return redirect()->route('transaksi.index')
                         ->with('success', 'Transaksi berhasil diupdate');
    }

    // 🔴 UNTUK HAPUS
    public function destroy($id)
    {
        Transaksi::destroy($id);

        return redirect()->route('transaksi.index')
                         ->with('success', 'Transaksi berhasil dihapus');
    }
}
