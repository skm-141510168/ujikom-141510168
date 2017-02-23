@extends('layouts.vv')
@section('content')

    <h1>Update Jabatan</h1>
    {!! Form::model($jabatan,['method' => 'PATCH','route'=>['jabatan.update',$jabatan->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Kode Jabatan', 'Kode Jabatan:') !!}
        {!! Form::text('kode_jabatan',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nama Jabatan', 'Nama Jabatan:') !!}
        {!! Form::text('nama_jabatan',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Besaran Uang', 'Besaran Uang:') !!}
        {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop