<<<<<<< HEAD
@extends('layouts.vv')
=======
@extends('layo@extends('layouts.vv')
>>>>>>> 715ea6955697cfd909e760221a9806559fbc8aa3
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

<<<<<<< HEAD
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                
                <div class="panel-body">
     <div class="table-responsive">
     <hr>
                       
      <table class="table table-bordered table-hover">
       <thead>
        <tr>
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Nip</center></p></th>
                          <th><p class="center"><center>Nama pegawai</center></p></th>
                          <th><p class="center"><center>Jumlah jam lembur</center></p></th>
                          <th><p class="center"><center>Jumlah uang lembur</center></p></p></th>
                          <th><p class="center"><center>Gaji pokok</center></p></p></th>
                          <th><p class="center"><center>Total gaji</center></p></p></th>
                          <th><p class="center"><center>Tanggal pengambilan</center></p></p></th>
                          <th><p class="center"><center>Status pengambilan</center></p></p></th>
                          <th><p class="center"><center>Petugas penerima</center></p></p></th>
                          <th colspan="2"><p class="center"><center>Action</center></p></th>
        </tr>
       </thead>
       <tbody>
       
       @php
       $no=1;
       @endphp
       @foreach($penggajian as $data)
        <tr>
                                    <td><center>{{$no++}}</center></td>
                                    <td><center>{{$data->tunjangan_pegawai->pegawai->nip}}</center></td>
                                    <td><center>{{$data->tunjangan_pegawai->pegawai->User->name}}</center></td>
                                    <td><center>{{$data->jumlah_jam_lembur}} jam</center> </td>
                                    <td><center>Rp. {{$data->jumlah_uang_lembur}}</center> </td>
                                    <td><center>Rp. {{$data->gaji_pokok}}</center> </td>
                                    <td><center>Rp. {{$data->total_gaji}}</center> </td>
                                    <td><center>{{$data->tanggal_pengambilan}}</center> </td>
                                    
                                    @if($data->status_pengambilan == 0)
                                    
                                        <td><center>Belum Diambil</center> </td>
                                    
                                    @endif
                                    @if($data->status_pengambilan == 1)
                                    
                                        <td><center>Sudah Diambil</center></td>
                                    
                                    @endif
                                  <td><center>{{$data->petugas_penerima}}</center> </td>
                                  <td align="center"><center>
                                    <a href="{{route('penggajian.edit', $data->id)}}" class="btn btn-primary"> Edit</a></center>
                                </td>
                               
                                  <td><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('penggajian.destroy', $data->id),
                                    'model' => $data
                                  ])
                                </center></td>
        </tr>
       @endforeach
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </div>
=======
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
>>>>>>> 715ea6955697cfd909e760221a9806559fbc8aa3
</div>
@endsection