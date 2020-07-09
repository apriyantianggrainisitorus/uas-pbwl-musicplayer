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
			font-size: 35px;
			
		}

		table th {
			color: brown;
			font-family: century gothic;
		}

		table {
			margin-top: 10px;
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="container">
	<h2>Data Played</h2>

	<table class="table">
		<thead class="bg-light">
		<tr style="background-color:Bisque">
			<th scope="col">NO</th>
			<th scope="col">JUDUL</th>
			<th scope="col">TRACKS</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color: snow; color: indianred">
			<td>{{ $row->id }}</td>
			<td>{{ $row->tracks->album->artist->artist_name}} - {{ $row->tracks->tracks_name }}</td>
			<td>
				<audio controls><source src="{{ url('public/uploads/tracks/'. $row->tracks->tracks_file) }}" type="audio/mpeg" ></audio>
			</td>
			<td>
					<a href="{{ url('played/' . $row->id . '/edit')}}" class="btn btn-success">EDIT</a>
				
				<form action="{{ url('played/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-warning">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
		<a  href="{{ url('played/create') }}" class="btn btn-info bg-info">+ Tambah Data</a></thead>
</div>
</body>
</html>


@endsection