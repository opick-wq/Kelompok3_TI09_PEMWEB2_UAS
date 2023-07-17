@extends('layouts.app')

@section('content')
<section class="banner-area">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{asset('frontend/assets/logo.png')}}" alt="">
						<div class="hover">
							<h4>Pelanggan baru di website kami?</h4>
							<p>Silahkan daftarkan segera akunmu untuk bisa segera memesan kopi</p>
							@if (Route::has('register'))
                            <a class="btn btn-success" href="{{ route('register') }}">Daftar</a>
                            @endif
                        </div>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Login Untuk Masuk</h3>
						<form class="row login_form" action="{{ route('login') }}" method="post">
						@csrf
							<div class="col-md-12 form-group">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus >

@error('email')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
							</div>
							<div class="col-md-12 form-group">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

@error('password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
								<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label" for="remember">
	{{ __('Remember Me') }}
</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
							<button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
