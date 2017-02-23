@extends('layo@extends('layouts.vv')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <table class="table table-condensed">
                    <div class="input-group col-md-12">
                            <thead>
                                <tr>
                                    <th bgcolor="white"><center>Tunjangan Pegawai</th>
                                    <th bgcolor="white"><center>Jumlah Jam Lembur</th>
                                    <th bgcolor="white"><center>Jumalah Uang Lembur</th>
                                    <th bgcolor="white"><center>Gaji Pokok</th>
                                    <th bgcolor="white"><center>Total Gaji</th>
                                    <th bgcolor="white"><center>Tanggal Pengambilan</th>
                                    <th bgcolor="white"><center>Status Pengambilan</th>
                                    <th bgcolor="white"><center>Petugas Penerima</th>

                                    <th colspan="3"><center>Action</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tunjangan as $data)
                                <tr>
                                    <td bgcolor="white"><center>{{$data->tunjangan_pegawai->tunjangan_id}}</td>
                                    <td bgcolor="white"><center>{{$data->jumlah_jam_lembur}}</td>
                                    <td bgcolor="white"><center>{{$data->jumlah_uang_lembur}}</td>
                                    <td bgcolor="white"><center>{{$data->gaji_pokok}}</td>
                                    <td bgcolor="white"><center>{{$data->tanggal_pengambilan}}</td>
                                    <td bgcolor="white"><center>{{$data->status_pengambilan}}</td>
                                    <td bgcolor="white"><center>{{$data->petugas_penerima}}</td>
                                    <td align="right">
                                    <a href="{{route('penggajian.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
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