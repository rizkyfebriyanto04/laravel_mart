<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Penjualan;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {

        if (auth()->check()) {
            return redirect()->route('dashboard');
        }
        $title = 'Karya Midas Mandiri';

        $data = Produk::all();

        return view('landing.index', compact('title', 'data'));
        // return view('home');
    }

    public function simpanorder(Request $request)
    {
        $harga_jual = str_replace(['Rp ', ',', ' '], '', $request->harga_jual);
        $total = str_replace(['Rp ', ',', ' '], '', $request->total);

        $harga_jual = floatval($harga_jual);
        $total = floatval($total);


        // Ambil nomor invoice terakhir
        $lastInvoice = Penjualan::latest()->first();

        // Jika belum ada invoice (penjualan pertama), mulai dengan nomor invoice 0001/KDM/2025
        if ($lastInvoice) {
            // Ambil angka terakhir pada invoice (misalnya "0001")
            preg_match('/(\d+)(?=\/KDM\/2025)/', $lastInvoice->no_invoice, $matches);

            // Tambahkan 1 pada angka terakhir
            $nextInvoiceNumber = str_pad((intval($matches[0]) + 1), 4, '0', STR_PAD_LEFT);
        } else {
            // Jika belum ada data, mulai dengan "0001"
            $nextInvoiceNumber = '0001';
        }

        // Format nomor invoice
        $no_invoice = $nextInvoiceNumber . '/KDM/2025';

        $penjualan = new Penjualan();
        $penjualan->nama_pembeli = $request->nama_pembeli;
        $penjualan->alamat_pembeli = $request->alamat;
        $penjualan->nomer_pembeli = $request->nomer_hp;
        $penjualan->no_invoice = $no_invoice;
        $penjualan->produk_id = $request->produk_id;
        $penjualan->harga_jual = $harga_jual;
        $penjualan->jumlah = $request->qty;
        $penjualan->total = $total;

        $penjualan->save();

        return redirect()->route('home')->with('success', 'Data berhasil disimpan');
        // return response()->json(['message' => 'Pesanan berhasil disimpan']);
    }

}
