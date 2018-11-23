@extends('layouts.app')
@section('title','Daftar Kepala Tanaman')
@section('style')
<style media="screen">
  body{
    background: url('img/keptan.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

  }
</style>
@endsection
@section('content')
<div class="managemen-rego-pantes">
	<div class="managemen-tittle">
		<h1>Daftar <span>Kepala Tanaman</span></h1>
	</div>
</div>
<div class="content-managemen-rego">

	<div class="table-rego table-responsive">
		<table class="table table-striped" id="color-striped" style="background-color: white;">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Nohp</th>
					<th>Email</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($keptans as $umum)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$umum->nama}}</td>
					<td>{{$umum->nohp}}</td>
					<td>{{$umum->email}}</td>
					<td>{{$umum->alamat}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>



@endsection
