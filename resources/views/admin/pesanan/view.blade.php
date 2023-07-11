@extends('admin.layout.app')
@section('konten')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<table class="table table-striped">
    <tbody>
        <tr>
            <td>No</td>
            <td>{{ $pesanan->id }}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>{{ $pesanan->tanggal }}</td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>{{ $pesanan->nama_pemesan }}</td>
        </tr>
        <tr>
            <td>Produk ID</td>
            <td>{{ $pesanan->alamat_pemesan }}</td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>{{ $pesanan->no_hp }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $pesanan->email }}</td>
        </tr>
        <tr>
            <td>Jumlah Pesanan</td>
            <td>{{ $pesanan->jumlah_pesanan }}</td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>{{ $pesanan->deskripsi }}</td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>{{ $pesanan->nama_produk }}</td>
        </tr>
    </tbody>
</table>


        
        

@endsection