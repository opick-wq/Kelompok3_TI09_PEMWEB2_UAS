@extends('admin.layout.app')
@section('konten')

@if(Auth::user()-> role != 'pelanggan')
<h1 class="mt-4">Table Produk</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Master Data</li>
<li class="breadcrumb-item active">Table produk</li>
</ol>




<div class="card mb-4">
<div class="card-header">
@if(Auth::user() -> role == 'admin')
<a class="btn btn-primary" href="{{url('admin/produkCreate')}}">Create</a>
@endif
</div>
<div class="card-body">
<table id="datatablesSimple">
    <thead>
        <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>Stok</th>
        <th>Minimal Stok</th>
        <th>Deskripi</th>
        <th>Kategori Produk</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1; @endphp
    @foreach($produk as $p)
        <tr>
        <td>{{$no}}</td>
        <td>{{$p->kode}}</td>
        <td>{{$p->nama}}</td>
        <td>{{$p->harga_jual}}</td>
        <td>{{$p->harga_beli}}</td>
        <td>{{$p->stok}}</td>
        <td>{{$p->min_stok}}</td>
        <td>{{$p->deskripsi}}</td>
        <td>{{$p->nama_kategori}}</td>
        <td>
<a href="{{url('admin/produkEdit/'.$p->id)}}"  class="btn btn-warning">Edit</a>
<a href="{{url('admin/produkView/'.$p->id)}}"  class="btn btn-warning">View</a>
<a href="{{url('admin/produkDelete/'.$p->id)}}" class="btn btn-danger">Delete</a>
</td>
        </tr>
    @php $no++
    @endphp
    @endforeach
    </tbody>
</table>
</div>
</div>
</div>
@else

@include('admin.access_denied')
@endif
@endsection