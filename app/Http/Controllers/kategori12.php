<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class kategori12 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = DB::table('kategori_produk')
        ->select('kategori_produk.*')
        ->get();
        return view('admin.kategori', compact('kategori'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = KategoriProduk::all();
        return view('admin.kategori.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new KategoriProduk;
        $kategori->nama = $request->nama;
        $kategori->save();
        return redirect('admin/kategori');
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
        $p = KategoriProduk::find($id);
    
        return view('admin.kategori.update', compact('p'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $kategori = KategoriProduk::find($request->id);
        $kategori->nama = $request->nama;
    
        $kategori->save();
        return redirect('admin/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id', $id)->delete();
        return redirect('admin/kategori');
    }
}
