@extends('layouts.vv')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
               <table class="table table-condensed">
                   <div class="input-group col-md-12">
                    <thead>
								<tr>
									<th bgcolor="white"><center>NIP</th>
									<th bgcolor="white"><center>Nama</th>
									<th bgcolor="white"><center>Email</th>
									<th bgcolor="white"><center>Jabatan</th>
									<th bgcolor="white"><center>Golongan</th>
									<th bgcolor="white"><center>Photo</th>
									<th colspan="3"><center>Aksi</center></th>
								</tr>
							</thead>
							<tbody>
							@foreach($pegawai as $data)
								<tr>
									<td bgcolor="white"><center>{{$data->nip}}</td>
									<td bgcolor="white"><center>{{$data->User->name}}</td>
									<td bgcolor="white"><center>{{$data->User->email}}</td>
									<td bgcolor="white"><center>{{$data->jabatan->nama_jabatan}}</td>
									<td bgcolor="white"><center>{{$data->golongan->nama_golongan}}</td>
									<td><img src="{{ asset('assets/'.$data->photo) }}" width="50" height="50"></td>
                                    <td align="center">
                                    <a href="{{route('pegawai.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>

                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger btn-sm" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-erase"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('pegawai.destroy', $data->id),
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
	</div>
</div>
@endsection