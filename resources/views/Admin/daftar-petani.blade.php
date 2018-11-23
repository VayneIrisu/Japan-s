@extends('layouts.app')
@section('title','Daftar Petani')
@section('style')
<style media="screen">
  body{
    background: url('img/petani.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

  }
</style>
@endsection
@section('content')
<div class="managemen-rego-pantes">
	<div class="managemen-tittle">
		<h1>Managemen <span>Petani</span></h1>
	</div>
</div>

<div class="table-rego table-responsive">
		<table class="table table-striped" id="color-striped "style="background-color: white;">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Nohp</th>
					<th>Email</th>
					<th>Nik</th>
					<th>Jenis Kelamin</th>
					<th>Status</th>
					<th>Agama</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($petanis as $petani)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$petani->name}}</td>
					<td>{{$petani->nohp}}</td>
					<td>{{$petani->email}}</td>
					<td>{{$petani->nik}}</td>
					<td>{{$petani->jenisKelamin}}</td>
					<td>{{$petani->status}}</td>
					<td>{{$petani->agama}}</td>
					<td class="aksi-managmen">
						<a href="#!">Update</a>
						<a href="#!">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
