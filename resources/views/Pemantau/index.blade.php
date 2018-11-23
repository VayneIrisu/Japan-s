@extends('layouts.app')
@section('title', $pemantau->nama)
@section('content')

<div class="profile-umum">
	<div class="col-xs-12 col-md-6 solve-padding-umum" >
		<div class="image-profile-all">
			<img src="{{$pemantau->image}}" alt="">
			<p>#Pemantau</p>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 solve-padding-umum"  id="mod-prodfile-all">
		<div class="data-diri-profile-all">
			<div class="head-name-profile-all">
				<h1>{{$pemantau->nama}}</h1>
			</div>
			<div class="edit-profile-all">
				<a href="/pemantau/{{$pemantau->id}}/edit">Edit Profile</a>
			</div>
		</div>
	</div>
</div>

@endsection
