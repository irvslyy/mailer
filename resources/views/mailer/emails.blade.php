<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> -->
	<style type="text/css">
		.container{
			text-align: center;
		}
		.btn-primary{
			width: 200px;
			height: 200px;
			background-color: blue;
			padding: 15px;
		    border-radius: 5px;
		    color: #fff;
		    box-shadow: 4px 0 4px #232323;
		}
		.row{

		}
		.card-header{
			color: black;
		}
	</style>
</head>
<body>

	<div class="container">  
	    <div class="row">
			<div class="card">
				<div class="card-header"><h3>{{ $nama }} </h3></div>
				<div class="card-body">
					<p>{{ $email }}</p> 
					<p>MNC Play</p> 
					<p>Selamat!</p> 
					<a href="{{route('verifikasi',  ['data' => $data->id])}}">verifikasi</a>
				</div>
			</div>
		</div>
	</div>

</body>
</html>





