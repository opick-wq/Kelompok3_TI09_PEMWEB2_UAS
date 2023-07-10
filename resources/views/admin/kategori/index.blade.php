@extends('admin.layout.app')
@section('konten')
<h1 class="mt-4">Table Kategori</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Master Data</li>
<li class="breadcrumb-item active">Table Kategori</li>
</ol>
<div class="card mb-4">
<div class="card-header">
<a class="btn btn-primary" href="{{url('admin/kategoriCreate')}}">Create</a>
</div>
<div class="card-body">
<table id="datatablesSimple">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>action</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach($kategori as $p)
        <tr>
        <td>{{$no}}</td>
        <td>{{$p->nama}}</td>
        <td>
<a href="{{url('admin/kategoriEdit/'.$p->id)}}"  class="btn btn-warning">Edit</a>
<a href="{{url('admin/kategoriDelete/'.$p->id)}}" class="btn btn-danger">Delete</a>
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