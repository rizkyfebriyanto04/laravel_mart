<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function produk(){

        {
            $title = 'Karya Midas Mandiri';

            $data = Produk::all();
            // dd($data);
            return view('backoffice.produk.index', compact('title', 'data'));
        }

    }

    public function simpanproduk(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'namaproduk' => 'required|string|max:255',
                'hargajual' => 'required|numeric',
                'keterangan' => 'nullable|string',
                'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi foto
            ]);

            $fotoPath = null;
            if ($request->hasFile('foto')) {
                $originalFileName = $request->file('foto')->getClientOriginalName();
                $uniqueFileName = time() . '_' . $originalFileName;
                $fotoPath = $request->file('foto')->storeAs('produk', $uniqueFileName, 'public');
            }
            // Simpan produk ke database
            $produk = new Produk;
            $produk->nama_produk = $request->input('namaproduk');
            $produk->harga_jual = $request->input('hargajual');
            $produk->keterangan = $request->input('keterangan');
            $produk->foto = $fotoPath;
            $produk->save();

            // Jika berhasil
            return redirect()->route('produk')->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            // Jika  error
            return redirect()->route('produk')->with('warning', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function deleteproduk($id)
    {
        try {
            $produk = Produk::findOrFail($id);

            if ($produk->foto) {
                Storage::disk('public')->delete($produk->foto);
            }

            $produk->delete();

            return redirect()->route('produk')->with('success', 'Produk berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('produk')->with('warning', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function editProduk($id)
    {
        $data = Produk::findOrFail($id);  // Menemukan produk berdasarkan ID
        return view('backoffice.produk.edit', compact('data'));
    }

    public function updateProduk(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        // Validasi input
        $request->validate([
            'namaproduk' => 'required',
            'hargajual' => 'required|numeric',
            'keterangan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        // Update data produk
        $produk->nama_produk = $request->namaproduk;
        $produk->harga_jual = $request->hargajual;
        $produk->keterangan = $request->keterangan;

        if ($request->hasFile('foto')) {
            $fileName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $fotoPath = $request->file('foto')->storeAs('produk', $fileName, 'public');
            $produk->foto = 'produk/' . $fileName;  // Menyimpan path gambar baru
        }

        $produk->save();

        return redirect()->route('produk')->with('success', 'Produk berhasil diperbarui!');
    }

    public function lappenjualan(Request $request)
    {
        $title = 'Karya Midas Mandiri';

        $data = DB::table('penjualan_m as jd')
                ->join('produk_m as pro','pro.id', '=', 'jd.produk_id')
                ->select(
                    'jd.*','pro.*')
                ->get();

        return view('backoffice.produk.lap-penjualan', compact('data' , 'title'));
    }

}
