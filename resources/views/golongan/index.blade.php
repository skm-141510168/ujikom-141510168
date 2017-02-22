@extends('layouts.aa')
@section('content')

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		 	<div class="table-responsive table-border">
	 	       <table class="table">
                  <div class="container">
                   <table class="table">
					<thead>
						<tr class="active">
							<th>Kode Golongan</th>
							<th>Nama Golongan</th>
							<th>Besaran Uang</th>
							<th colspan="3"><center>Aksi</center></th>
						</tr>
					</thead>
					<tbody>
					@foreach($golongan as $data)
						<tr>
							<td>{{$data->kode_golongan}}</td>
							<td>{{$data->nama_golongan}}</td>
							<td>{{$data->besaran_uang}}</td>
							<td align="right">
                                    <a href="{{route('golongan.edit', $data->id)}}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>
                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-default btn-sm" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-erase"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('golongan.destroy', $data->id),
                                    'model' => $data
                                  ])
                                </td>
						</tr>
					@endforeach		
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection