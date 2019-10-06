@extends('layouts.app')

@section('content')

<div class="container">
		<form action="{{route('verifikasipost', ['data' => $data->id]) }}" method="POST">
					@csrf
					@method('PUT')
	<div class="row">
		<div class="col-md-12">
			<div class="row">
						<div class="col-md-12">
							  <div class="form-group">
							    <label for="nama">nama pelangan</label>
							    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" placeholder="name" value="{{$data->nama}}">
							  </div>
						</div>
			</div>
			<div class="row">
						<div class="col-md-12">
							  <div class="form-group">
							    <label for="email">email pelangan</label>
							    <input type="text" name="email" class="form-control" id="email" aria-describedby="email" placeholder="name" value="{{$data->email}}">
							  </div>
						</div>
			</div>
			<div class="row">
						<div class="col-md-12">
							  <div class="form-group">
							    <label for="password">password pelangan</label>
							    <input type="text" name="password" class="form-control" id="password" aria-describedby="password" placeholder="name" value="{{$data->password}}">
							  </div>
						</div>
			</div>
		</div>
	</div>
	
	<button type="submit" class="btn btn-primary mt-2">verifikasi</button>
  		</form>
</div>

@endsection