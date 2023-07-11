@extends('frontend.layout.app')
@section('konten')
<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 background-img"
             style="background: url('{{ asset('frontend') }}/assets/SPECIAL.png')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between py-4">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white"><font style="color:yellow">Coffe </font>That
                        Inspires</h1>
                        <p class="lead">
                        Work can wait, smooth out your day , everyday
                        </p>
                        
                        <!--core feature list end-->
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="hero-animation-img">
                        <img src="{{ asset('frontend') }}/assets/LOGO.png" alt="app" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section start-->
    

    <!--about us section start-->
    

   

    

    

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
                                <h4 class="mb-1">Matcha Latte</h4>
                                <h5 class="product-price">
                                    <del>$10.00</del>
                                    <span>$5.00</span></h5>
                                <a href="#" class="btn secondary-btn"><span class="ti-shopping-cart"></span> Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/caramel.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                                <h4 class="mb-1">Caramel Macchiato</h4>
                                <h5 class="product-price">
                                    <del>$10.00</del>
                                    <span>$8.00</span></h5>
                                <a href="#" class="btn secondary-btn"><span class="ti-shopping-cart"></span> Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/Americano.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                                <h4 class="mb-1">Caffe Americano</h4>
                                <h5 class="product-price">
                                    <del>$10.00</del>
                                    <span>$6.00</span></h5>
                                <a href="#" class="btn secondary-btn"><span class="ti-shopping-cart"></span> Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/Asian Dolce Latte.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                                <h4 class="mb-1">Asian Dolce Latte</h4>
                                <h5 class="product-price">
                                    <del>$10.00</del>
                                    <span>$7.00</span></h5>
                                <a href="#" class="btn secondary-btn"><span class="ti-shopping-cart"></span> Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/Cappuccino.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                                <h4 class="mb-1">Cappuccino</h4>
                                <h5 class="product-price">
                                    <del>$10.00</del>
                                    <span>$8.00</span></h5>
                                <a href="#" class="btn secondary-btn"><span class="ti-shopping-cart"></span> Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product rounded border">
                            <img src="{{ asset('frontend') }}/assets/Cafe Expresso.png" class="rounded" alt="product"/>
                            <div class="product-info text-center pb-4 px-3">
                                <h4 class="mb-1">Cafe Expresso</h4>
                                <h5 class="product-price">
                                    <del>$10.00</del>
                                    <span>$6.00</span></h5>
                                <a href="#" class="btn secondary-btn"><span class="ti-shopping-cart"></span> Buy Now</a>
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


