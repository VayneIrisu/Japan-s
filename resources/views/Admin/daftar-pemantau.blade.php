@extends('layouts.app')
@section('title','Daftar Pemantau')
@section('style')
<style media="screen">
  body{
    background: url('img/pemantau.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

  }
</style>
@endsection
@section('content')
<div class="managemen-rego-pantes">
	<div class="managemen-tittle">
		<h1>Daftar <span>Pemantau</span></h1>
	</div>
</div>
<div class="content-managemen-rego">

	<div class="table-rego table-responsive">
		<table class="table table-striped" id="color-striped"style="background-color: white;">
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
				@foreach ($pemantaus as $mitra)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$mitra->nama}}</td>
					<td>{{$mitra->nohp}}</td>
					<td>{{$mitra->email}}</td>
					<td>{{$mitra->alamat}}</td>
					<td>{{$mitra->user->status}}</td>
					<td class="aksi-managmen">
						<a href="#!" data-toggle="modal" data-target="#myModalEdit{{$mitra->id}}">Update</a>
						<a href="#!">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
