@extends('layouts.app')
@section('title', 'login')
@section('style')
<style media="screen">
  body{
    background: url('img/tebu2.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

  }
</style>
@endsection
@section('content')
<div class="login-control">
	<div class="form-isian-login">
    <!-- <div class="image-tebu">
      <img src="{{ asset('img/tanaman.jpeg') }}" alt="">
    </div> -->
		<div class="isi-login">
			<div class="head-lofin-form">
				<h1>Login Di Sini</h1>
			</div>
			<form method="POST" action="{{ route('login') }}">
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<input type="email" name="email" value="{{ old('email') }}" required autofocus>
					@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<input type="password"  type="password" class="form-control" name="password" required>
					@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
				<button>Login</button>
			</form>
		</div>
	</div>
</div>
@endsection
