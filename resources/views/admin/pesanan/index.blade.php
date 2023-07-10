@extends('admin.layout.app')
@section('konten')
<h1 class="mt-4">Table Pesanan</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Master Data</li>
<li class="breadcrumb-item active">Table pesanan</li>
</ol>
<div class="card mb-4">
<div class="card-header">
<a class="btn btn-primary" href="{{url('admin/pesananCreate')}}">Create</a>
</div>
<div class="card-body">
<table id="datatablesSimple">
    <thead>
        <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Pemesan</th>
        <th>Alamat Pemesan</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>Jumlah Pesanan</th>
        <th>Deskripi</th>
        <th>Produk</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach($pesanan as $p)
        <tr>
        <td>{{$no}}</td>
        <td>{{$p->tanggal}}</td>
        <td>{{$p->nama_pemesan}}</td>
        <td>{{$p->alamat_pemesan}}</td>
        <td>{{$p->no_hp}}</td>
        <td>{{$p->email}}</td>
        <td>{{$p->jumlah_pesanan}}</td>
        <td>{{$p->deskripsi}}</td>
        <td>{{$p->nama_produk}}</td>
        <td>
<a href="{{url('admin/pesananEdit/'.$p->id)}}"  class="btn btn-warning">Edit</a>
<a href="{{url('admin/pesananDelete/'.$p->id)}}" class="btn btn-danger">Delete</a>
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
@endsection