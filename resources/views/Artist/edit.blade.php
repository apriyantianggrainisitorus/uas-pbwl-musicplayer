@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
	<style type="text/css">
		h2 {
			margin-bottom: 20px;
			margin-top: 15px;
			text-align:center;
			color: PaleVioletRed;
			font-family: 'Marck Script';
			font-size: 40px;	}	
		.btn {
			color: MediumVioletRed;}
		label {
			font-family: 'Josefin Sans'; 
			color: PaleVioletRed;}
	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
	<h2>Edit Data Artist</h2>
	<form action="{{ url('/artist/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf
	<table>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Nama Artist</label>:
		<div class="col-sm-5">
			<input type="text" name="artist_name" value="{{ $rows->artist_name}}" style="background-color: PapayaWhip; color: black" class="form-control" id="inputEmail3">
		</div>
		</div>
	</table>
			<div class="form-group row">
			<div class="col-sm-10">
				<input type="submit" value="UPDATE" class="btn" style="background-color: khaki">
			<div>
			</div>
	</form>
</div>
</body>
</html>

@endsection