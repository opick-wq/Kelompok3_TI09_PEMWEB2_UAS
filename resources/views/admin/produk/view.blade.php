@extends('admin.layout.app')
@section('konten')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<table class="table table-striped">
    <tbody>
        <tr>
            <td>No</td>
            <td>{{ $produk->id }}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>{{ $produk->kode }}</td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>{{ $produk->nama }}</td>
        </tr>
        <tr>
            <td>Produk ID</td>
            <td>{{ $produk->harga_beli }}</td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>{{ $produk->harga_jual }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $produk->stok }}</td>
        </tr>
        <tr>
            <td>Jumlah Pesanan</td>
            <td>{{ $produk->min_stok }}</td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>{{ $produk->deskripsi }}</td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>{{ $produk->nama_kategori }}</td>
        </tr>
    </tbody>
</table>


        
        

@endsection