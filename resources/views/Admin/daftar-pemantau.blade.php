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
  	<div class="button-create-harga">
  		<a href="#!"  data-toggle="modal" data-target="#myModal">Registrasi Pemantau</a>
  	</div>
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

<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog modal-lg">

    <!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header" id="new-modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" id="title-moda-new">Registrasi Pemantau</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="/register-pemantau">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="title">Nama</label>
						<input type="text" name="name" class="form-control" placeholder="nama" value="{{ old('name') }}" required>
						@if ($errors->has('name'))
						<span class="help-block">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<label for="title">username</label>
						<input type="text" name="username" class="form-control" placeholder="username" value="{{ old('username') }}" required>
						@if ($errors->has('username'))
						<span class="help-block">
							<strong>{{ $errors->first('username') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<label for="title" class="text-create-event">Alamat</label>
						<input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{ old('alamat') }}" required>
						@if ($errors->has('alamat'))
						<span class="help-block">
							<strong>{{ $errors->first('alamat') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<label for="title" class="text-create-event">Nohp</label>
						<input type="text" name="nohp" class="form-control" placeholder="nohp" value="{{ old('nohp') }}" required>
						@if ($errors->has('nohp'))
						<span class="help-block">
							<strong>{{ $errors->first('nohp') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<label for="title" class="text-create-event">Email</label>
						<input type="email" name="email" class="form-control" placeholder="email" value="{{ old('email') }}" required>
						@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<label for="title" class="text-create-event">Password</label>
						<input type="password" name="password" class="form-control" placeholder="password" required>
						@if ($errors->has('password'))
						<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<label for="title" class="text-create-event">Confirm Password</label>
						<input type="password" class="form-control" name="password_confirmation" required>
					</div>
					<input type="hidden" name="type" class="form-control" value="pemantau" placeholder="alamat">
					<button type="submit" class="btn btn-block btn-default">Submit</button>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
	</div>
</div>

@endsection
