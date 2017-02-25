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
									<th bgcolor="white"><center>Kode Tunjangan</th>
									<th bgcolor="white"><center>NIP Pegawai</th>
									<th bgcolor="white"><center>Nama Pegawai</th>
									<th bgcolor="white"><center>Besar Tunjangan</th>
									<th colspan="3"><center>Aksi</center></th>
								</tr>
							</thead>
							<tbody>
							@foreach($tunjangan_pegawai as $data)
								<tr>
									<td bgcolor="white"><center>{{$data->tunjangan->kode_tunjangan}}</td>
									<td bgcolor="white"><center>{{$data->pegawai->nip}}</td>
									<td bgcolor="white"><center>{{$users->where('id',$data->pegawai->user_id)->first()->name}}</td>
									<td bgcolor="white"><center>{{$data->tunjangan->besaran_uang}}</td>
									<td align="right">
                                    <a href="{{route('tunjanganpegawai.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>

                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger btn-sm" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-erase"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('tunjanganpegawai.destroy', $data->id),
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