@extends('layouts.vv')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <table class="table table-condensed">
               
               <div class="input-group col-md-12">
                    <form action="kategorilembur/?nama_kategori_=nama_kategori">
                        <div class="form-group input-group">
                           <input type="text" class="form-control" name="nama_kategori_" placeholder="cari berdasarkan nama kategori lembur"><button class="btn btn-default" type="submit"><i class="fa fa-search">Cari</i></button>
                        </div>

                     </form> 
              

                    <div class="input-group col-md-12">
                           <thead>
								<tr class="active">
									<th bgcolor="white"><center>Kode Kategori Lembur</th>				
									<th bgcolor="white"><center>Jabatan</th>
									<th bgcolor="white"><center>Golongan</th>
									<th bgcolor="white"><center>Besaran Uang</th>
									<th colspan="3"><center>Action</center></th>
								</tr>
							</thead>
							<tbody>
							@foreach($kategori_lembur as $data)
								<tr>
									<td bgcolor="white"><center>{{$data->kode_lembur}}</td>
									<td bgcolor="white"><center>{{$data->jabatan->nama_jabatan}}</td>
									<td bgcolor="white"><center>{{$data->golongan->nama_golongan}}</td>
									<td bgcolor="white"><center>{{$data->besaran_uang}}</td>
									<td align="right">
                                    <a href="{{route('kategorilembur.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>

                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger btn-sm" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-erase"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('kategorilembur.destroy', $data->id),
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