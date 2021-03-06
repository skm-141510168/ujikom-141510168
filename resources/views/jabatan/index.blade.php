@extends('layouts.vv')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <table class="table table-condensed">
                    <div class="input-group col-md-12">
                     <form action="jabatan/?nama_jabatan=nama_jabatan">
                          <div class="form-group input-group">
                            <input type="text" class="form-control" name="nama_jabatan" placeholder="cari berdasarkan nama jabatan"><button class="btn btn-default" type="submit"><i class="fa fa-search">Cari</i></button>
                          </div>

                     </form> 
              
                    <thead>
						<tr class="active">
							<th bgcolor="white"><center>Kode jabatan</th>
							<th bgcolor="white"><center>Nama jabatan</th>
							<th bgcolor="white"><center>Besaran Uang</th>
							<th colspan="3"><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
					@foreach($jabatan as $data)
						<tr>
							<td bgcolor="white"><center>{{$data->kode_jabatan}}</td>
							<td bgcolor="white"><center>{{$data->nama_jabatan}}</td>
							<td bgcolor="white"><center>{{$data->besaran_uang}}</td>
							<td align="right">
                                    <a href="{{route('jabatan.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>

                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" c class="btn btn-danger btn-sm" title="Delete" data-toggle="tooltip"><i  class="glyphicon glyphicon-erase"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('jabatan.destroy', $data->id),
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