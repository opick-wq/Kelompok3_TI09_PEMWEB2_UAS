@extends('admin.layout.app')
@section('konten')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<table class="table table-striped">
    <tbody>
        <tr>
            <td>No</td>
            <td>{{ $kategori->id }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $kategori->nama }}</td>
        </tr>
    </tbody>
</table>


        
        

@endsection