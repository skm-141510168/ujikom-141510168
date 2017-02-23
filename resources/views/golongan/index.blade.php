@extends('layouts.vv')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <table class="table table-condensed">
                    <div class="input-group col-md-12">
                    <form action="golongan/?nama_golongan=nama_golongan">
                         <div class="form-group input-group">
                            <input type="text" class="form-control" name="nama_golongan" placeholder="cari berdasarkan nama golongan"><button class="btn btn-default" type="submit"><i class="fa fa-search">Cari</i></button>
                         </div>

                     </form> 
              
                    <thead>
                        <tr class=" bg-info">
                            <th bgcolor="white"><center>Kode Golongan</th>
                            <th bgcolor="white"><center>Nama Golongan</th>
                            <th bgcolor="white"><center>Besaran Uang</th>
                            <th bgcolor="white"colspan="3"><center>Action</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($golongan as $data)
                        <tr>
                            <td bgcolor="white"><center>{{$data->kode_golongan}}</td>
                            <td bgcolor="white"><center>{{$data->nama_golongan}}</td>
                            <td bgcolor="white"><center>{{$data->besaran_uang}}</td>
                            <td bgcolor="white"><center align="right">
                                <a href="{{route('golongan.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>
                                <td >
                                 <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger btn-sm" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-erase"></i></a>
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




























