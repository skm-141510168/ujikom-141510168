@extends('layouts.aa')
@section('content')

    <h1>Update Kategori Lembur</h1>
  
   
     {!! Form::model($kategori_lembur,['method' => 'PATCH','route'=>['kategorilembur.update',$kategori_lembur->id]]) !!}
  

    <div class="form-group">
        {!! Form::label('Kode Kategori Lembur', 'Kode Kategori Lembur:') !!}
        {!! Form::text('kode_lembur',null,['class'=>'form-control']) !!}
    </div>
     
    <div class="form-group">
        {!! Form::label('Nama Jabatan', 'Nama Jabatan:') !!}
    <select name="id_jabatan" class="form-control">
        @foreach ($jabatan as $data)
        <option value="{{$data->id_jabatan}}">{{$data->nama_jabatan}}</option>
        @endforeach
    </select>

    <div class="form-group">
        {!! Form::label('Nama Golongan', 'Nama Jabatan:') !!}
    <select name="id_golongan" class="form-control">
        @foreach ($golongan as $data)
        <option value="{{$data->id_golongan}}">{{$data->nama_golongan}}</option>
        @endforeach
    </select>

    <div class="form-group">
        {!! Form::label('Besaran Uang', 'Besaran Uang:') !!}
        {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop