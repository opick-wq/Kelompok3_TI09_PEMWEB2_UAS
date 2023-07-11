@extends('frontend.layout.app')
@section('konten')
<section class="banner-area">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				
			</div>
		</div>
	</section>
<section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Form Pemesanan</h3>
                        <form class="row contact_form" method="POST" action="{{url('/formstore')}}" enctype="multipart/form-data" >
{{ csrf_field() }}
                            <div class="col-md-12 form-group p_star">
                                <input type="date" class="form-control"  name="tanggal" value="" placeholder="Masukkan tanggal">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input placeholder="Nama" type="text" class="form-control"  name="nama_pemesan" value="">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" placeholder="No Hp" class="form-control" id="no_hp" name="no_hp" value="">
        
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input placeholder="Email" type="text" class="form-control" id="email" name="email" value="">
                            
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input placeholder="Alamat" type="text" class="form-control" id="alamat_pemesan" name="alamat_pemesan" value="">
            
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" name="deskripsi" value="">
                            </div>
                           
                            <div class="col-md-12 form-group">
                                    <h3>Pilih Produk Coffe yang ingin dibeli</h3>   
                          
      <select id="jenis" name="produk_id" class="country_select">
	  @foreach ($produk as $d) 
      <option value="{{$d->id}}">{{$d->nama}}</option>
        @endforeach
      </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="jumlah Pesanan" name="jumlah_pesanan" placeholder="Jumlah Pesanan" value="">
                            </div>
    <div class="col-12">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-success" value="pesan">
  </div>

  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection