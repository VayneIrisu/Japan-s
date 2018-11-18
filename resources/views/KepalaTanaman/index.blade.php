@extends('layouts.app')
@section('title', $umum->name)
@section('content')

<div class="profile-kepalatanaman">
	<div class="col-xs-12 col-md-6 solve-padding-umum" >
		<div class="image-profile-all">
			<img src="{{$umum->image}}" alt="">
			<p>#kepalatanaman</p>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 solve-padding-umum"  id="mod-prodfile-all">
		<div class="data-diri-profile-all">
			<div class="head-name-profile-all">
				<h1>{{$kepalatanaman->name}}</h1>
			</div>
			<div class="detail-aksi-all">
				<div class="history">
					<h2>History</h2>
					<p>10</p>
				</div>
			</div>
			<div class="edit-profile-all">
				<a href="/kepalatanaman/{{$umum->id}}/edit">Edit Profile</a>
			</div>
		</div>
	</div>
</div>

@endsection
