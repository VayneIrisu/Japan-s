@extends('layouts.app')
@section('title', $pemantau->nama)
@section('content')
<div class="edit-profile">
	<div class="grup-all-edit-profile">
		<div class="image-form-edit">
			<img src="{{$pemantau->image}}" alt="">
			{{-- <img src="{{$pemantau->fotoKtp}}" alt=""> --}}
		</div>
		<div class="form-edit-data">
			<form action="/pemantau/{{ $pemantau->id }}" method="POST">
				<div class="form-group">
					<label for="name" style="display: block;">Nama</label>
					<input type="text" name="nama" placeholder="nama" value="{{ old('nama') ? old('nama') : $pemantau->nama  }}">
					@if ($errors->has('nama'))
					<span class="help-block">
						<strong>{{ $errors->first('nama') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<label for="name" style="display: block;">image</label>
					<input type="text" name="image" value="{{ old('image') ? old('image') : $pemantau->image  }}" placeholder="image">
					@if ($errors->has('image'))
					<span class="help-block">
						<strong>{{ $errors->first('image') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<label for="name" style="display: block;">nohp</label>
					<input type="text" name="nohp" value="{{ old('nohp') ? old('nohp') : $pemantau->nohp  }}" placeholder="nohp">
					@if ($errors->has('nohp'))
					<span class="help-block">
						<strong>{{ $errors->first('nohp') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<label for="name" style="display: block;">alamat</label>
					<input type="text" name="alamat" value="{{ old('alamat') ? old('alamat') : $pemantau->alamat  }}" placeholder="alamat">
					@if ($errors->has('alamat'))
					<span class="help-block">
						<strong>{{ $errors->first('alamat') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<label for="name" style="display: block;">email</label>
					<input type="text" name="email" value="{{ old('email') ? old('email') : $pemantau->email  }}" placeholder="email">
					@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
				{{ csrf_field() }}
				<input type="hidden" name="_method"  value="PUT">
				<button type="submit" id="edit-profile">Edit Profile</button>
			</form>
		</div>
	</div>
	<div class="pohon-satu">
		<img src="{{ asset('image/icon/pohon 4.png') }}" alt="">
	</div>
	<div class="pohon-dua">
		<img src="{{ asset('image/icon/pohon 5.png') }}" alt="">
	</div>
</div>
@endsection
