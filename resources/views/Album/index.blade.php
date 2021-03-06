@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
	
	<style type="text/css">
		h2	{
			margin-bottom: 20px;
			margin-top: 15px;
			text-align:center;
			color: PaleVioletRed;
			font-family: 'Marck Script';
			font-size: 35px;		}
		table th {
			color: Brown;
			font-family: Rancho;
		}
		table {
			margin-top: 10px;
			text-align: center;
			font-family: Rancho;
		}
	</style>
</head>
<body>
	<div class="container">
	<h2>Data Album</h2>
	
	<table class="table">
		<thead class="bg-light">
		<tr style="background-color:Bisque">
			<th scope="col">NO</th>
			<th scope="col">NAMA</th>
			<th scope="col">ARTIST</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color:snow ; color: indianred">
			<td>{{ $row->id }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->artist->artist_name }}</td>
			<td>
				<a href="{{ url('album/' . $row->id . '/edit')}}" class="btn btn-success">EDIT</a>
				
				<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-warning">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a  href="{{ url('album/create') }}" class="btn btn-info bg-info">+ Tambah Data</a></thead>
</div>
</body>
</html>


@endsection