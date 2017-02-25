@extends('layouts.vv')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <table class="table table-condensed">
                    <div class="input-group col-md-12">

                    <form action="pegawai/?nama_pegawai=nama_pegawai">
                          <div class="form-group input-group">
                            <input type="text" class="form-control" name="nama_pegawai" placeholder="cari berdasarkan nama jabatan"><button class="btn btn-default" type="submit"><i class="fa fa-search">Cari</i></button>
                          </div>

                     </form> 
                           <thead>
								<tr>
									<th bgcolor="white"><center>Kode Kategori Lembur</th>						
									<th bgcolor="white"><center>Nama Pegawai</th>
									<th bgcolor="white"><center>Jumlah Jam</th>
									<th colspan="3"><center>Action</center></th>
								</tr>
							</thead>
							<tbody>
							@foreach($lembur_pegawai as $data)
								<tr>
									<td bgcolor="white"><center>{{$data->kategori_lembur->kode_lembur}}</td>
									<td bgcolor="white"><center>{{$users->where('id',$data->pegawai->user_id)->first()->name}}</td>
									<td bgcolor="white"><center>{{$data->jumlah_jam}}</td>
									<td align="right">
                                    <a href="{{route('lemburpegawai.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>

                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger btn-sm" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-erase"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('lemburpegawai.destroy', $data->id),
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