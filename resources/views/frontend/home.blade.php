@extends('frontend.layout.app')
@section('konten')
<!--body content wrap start-->
<div class="main">

  
    

    

    <!--products section start-->
    <section id="product" class="ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-4">
                        <h2>We have <font style="color:brown">a special</font> taste</h2>
                        <p class="lead">The right taste comes from quality coffee beans </p>
                    </div>
                </div>
            </div>
            <!--start product carousel-->
            <div class="product-wrap pt-4">
                <div class="product-carousel owl-carousel owl-theme dot-indicator">
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/matca.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                                <h4 class="mb-1">{{ $produk[0]->nama }}</h4>
                                <h5 class="product-price">
                                    <del>RP.20000</del>
                                    <span>RP.{{ $produk[0]->harga_jual }}</span></h5>
                                <a href="{{url('frontend/form')}}" class="btn secondary-btn"><span class="ti-shopping-cart"></span>Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/caramel.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                            <h4 class="mb-1">{{ $produk[1]->nama }}</h4>
                                <h5 class="product-price">
                                    <del>RP.20000</del>
                                    <span>RP.{{ $produk[1]->harga_jual }}</span></h5>
                                <a href="{{url('frontend/form')}}" class="btn secondary-btn"><span class="ti-shopping-cart"></span>Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/Americano.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                            <h4 class="mb-1">{{ $produk[2]->nama }}</h4>
                                <h5 class="product-price">
                                    <del>RP.20000</del>
                                    <span>RP.{{ $produk[2]->harga_jual }}</span></h5>
                                <a href="{{url('frontend/form')}}" class="btn secondary-btn"><span class="ti-shopping-cart"></span> Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/Asian Dolce Latte.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                            <h4 class="mb-1">{{ $produk[3]->nama }}</h4>
                                <h5 class="product-price">
                                    <del>RP.20000</del>
                                    <span>RP.{{ $produk[3]->harga_jual }}</span></h5>
                                <a href="{{url('frontend/form')}}" class="btn secondary-btn"><span class="ti-shopping-cart"></span> Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/Cappuccino.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                            <h4 class="mb-1">{{ $produk[4]->nama }}</h4>
                                <h5 class="product-price">
                                    <del>RP.20000</del>
                                    <span>RP.{{ $produk[4]->harga_jual }}</span></h5>
                                <a href="{{url('frontend/form')}}" class="btn secondary-btn"><span class="ti-shopping-cart"></span> Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/Cafe Expresso.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                            <h4 class="mb-1">{{ $produk[5]->nama }}</h4>
                                <h5 class="product-price">
                                    <del>RP.20000</del>
                                    <span>RP.{{ $produk[5]->harga_jual }}</span></h5>
                                <a href="{{url('frontend/form')}}" class="btn secondary-btn"><span class="ti-shopping-cart"></span> Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end product carousel-->
        </div>
    </section>
    <!--products section end-->

    

    

    

</div>
<!--body content wrap end-->
@endsection


