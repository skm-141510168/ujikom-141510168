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
                                    <th bgcolor="white"><center>Nama Jabatan</th>
                                    <th bgcolor="white"><center>Nama Golongan</th>
                                    <th bgcolor="white"><center>Status</th>
                                    <th bgcolor="white"><center>Jumlah Anak</th>
                                    <th bgcolor="white"><center>Besaran Uang</th>
                                    <th colspan="3"><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tunjangan as $data)
                                <tr>
                                    <td bgcolor="white"><center>{{$data->kode_tunjangan}}</td>
                                    <td bgcolor="white"><center>{{$data->jabatan->nama_jabatan}}</td>
                                    <td bgcolor="white"><center>{{$data->golongan->nama_golongan}}</td>
                                    <td bgcolor="white"><center>{{$data->status}}</td>
                                    <td bgcolor="white"><center>{{$data->jumlah_anak}}</td>
                                    <td bgcolor="white"><center>{{$data->besaran_uang}}</td>
                                    <td align="right">
                                    <a href="{{route('tunjangan.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>

                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger btn-sm" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-erase"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('tunjangan.destroy', $data->id),
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