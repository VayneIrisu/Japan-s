@extends('layouts.app')
@section('title', $petani->nama)
@section('content')

<div class="profile-petani">
	<div class="grup-petani-profile">
		<div class="image-content-petani">
			<img src="{{ $petani->image }}" alt="">
		</div>
		<div class="data-diri-petani">
			<div class="name-petani">
				<h2>{{$petani->nama}}</h2>
				<p>Email: {{$petani->email}}</p>
				<p>Alamat: {{$petani->alamat}}</p>
				<p>No: {{$petani->nohp}}</p>
			</div>
		</div>
		<a href="/petani/{{$petani->id}}/edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
	</div>
</div>

@endsection
