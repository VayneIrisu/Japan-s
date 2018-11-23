@extends('layouts.app')
@section('title', $kepalatanaman->nama)
@section('content')

<div class="profile-kepalatanaman">
	<div class="col-xs-12 col-md-6 solve-padding-umum" >
		<div class="image-profile-all">
			<img src="{{$kepalatanaman->image}}" alt="">
			<p>#kepalatanaman</p>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 solve-padding-umum"  id="mod-prodfile-all">
		<div class="data-diri-profile-all">
			<div class="head-name-profile-all">
				<h1>{{$kepalatanaman->nama}}</h1>
			</div>
			<div class="edit-profile-all">
				<a href="/kepalatanaman/{{$kepalatanaman->id}}/profile">Edit Profile</a>
			</div>
		</div>
	</div>
</div>

@endsection
