@extends('frontend.layout.app')
@section('konten')
<section class="banner-area">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				
			</div>
		</div>
	</section>
<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div>Cari bedasarkan kategori</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a class="nav-link" href="{{url('/banyak')}}">Banyak Disukai</a>
						</li>

						<li class="main-nav-list"><a class="nav-link" href="{{url('/terbaru')}}">Terbaru</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="">
					<div class="">
						<select>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
                        <div class="single-product">
                        <img src="{{ asset('frontend') }}/assets/matca.png" class="rounded" alt="product"/>
							<div class="product-details">
                            <h4 class="mb-1">{{ $produk[0]->nama }}</h4>
                                <h5 class="product-price">
                                    <del>RP.20000</del>
                                    <span>RP.{{ $produk[0]->harga_jual }}</span></h5>
            
								<div class="price">
						</div>
								<div class="prd-bottom">
                                <a href="{{url('/form')}}" class="btn secondary-btn"><span class="ti-shopping-cart"></span>Pesan</a>
								</div>
</div>
</div>
						</div>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
                        <div class="single-product">
                        <img src="{{ asset('frontend') }}/assets/caramel.png" class="rounded" alt="product"/>
							<div class="product-details">
                            <h4 class="mb-1">{{ $produk[1]->nama }}</h4>
                                <h5 class="product-price">
                                    <del>RP.20000</del>
                                    <span>RP.{{ $produk[1]->harga_jual }}</span></h5>
            
								<div class="price">
						</div>
								<div class="prd-bottom">
                                <a href="{{url('/form')}}" class="btn secondary-btn"><span class="ti-shopping-cart"></span>Pesan</a>
								</div>
							</div>
						</div>
					</div>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
                        <div class="single-product">
                        <img src="{{ asset('frontend') }}/assets/Americano.png" class="rounded" alt="product"/>
							<div class="product-details">
                            <h4 class="mb-1">{{ $produk[2]->nama }}</h4>
                                <h5 class="product-price">
                                    <del>RP.20000</del>
                                    <span>RP.{{ $produk[2]->harga_jual }}</span></h5>
            
								<div class="price">
						</div>
								<div class="prd-bottom">
                                <a href="{{url('/form')}}" class="btn secondary-btn"><span class="ti-shopping-cart"></span>Pesan</a>
								</div>
							</div>
						</div>
						</div>
						<!-- single product -->
						
				</div>
			</div>
		</div>
	</section>
	
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
				</a>
			</div>
		</div>
				</section>
			</div>
		</div>
	</div>
@endsection