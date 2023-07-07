<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class produk12 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $produk = DB::table('produk')
    ->join('kategori_produk', 'produk.kategori_produk_id', '=',
    'kategori_produk.id')
    ->select('produk.*', 'kategori_produk.nama as nama_kategori')
    ->get();
    return view('admin.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::all();
        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Produk;
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = KategoriProduk::all();
        $p = Produk::find($id);
    
        return view('admin.produk.update', compact('p', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();

        return redirect('admin/produk');
    }

    public function destroy(string $id)
    {
        DB::table('produk')->where('id', $id)->delete();
        return redirect('admin/produk');
    }
}
