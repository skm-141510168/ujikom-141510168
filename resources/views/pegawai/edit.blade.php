@extends('layouts.vv')
@section('content')

    <h1>Update Pegawai</h1>
  
   
     {!! Form::model($pegawai,['method' => 'PATCH','route'=>['pegawai.update',$pegawai->id],'files'=>true]) !!}
  
+
    <div class="form-group">
        {!! Form::label('NIP', 'NIP:') !!}
        {!! Form::text('nip',null,['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('Email', 'Email:') !!}
    <select name="id_user" class="form-control">
        @foreach ($user as $data)
        <option value="{{$data->id_user}}">{{$data->name}}</option>
        @endforeach
    </select>

    <div class="form-group">
        {!! Form::label('Email', 'Email:') !!}
    <select name="id_user" class="form-control">
        @foreach ($user as $data)
        <option value="{{$data->id_user}}">{{$data->email}}</option>
        @endforeach
    </select>

    <div class="form-group">
        {!! Form::label('Nama Jabatan ', 'Nama Jabatan:') !!}
    <select name="id_jabatan" class="form-control">
        @foreach ($jabatan as $data)
        <option value="{{$data->id_jabatan}}">{{$data->nama_jabatan}}</option>
        @endforeach
    </select>

    <div class="form-group">
        {!! Form::label('Nama Golongan', 'Nama Golongan:') !!}
    <select name="id_golongan" class="form-control">
        @foreach ($golongan as $data)
        <option value="{{$data->id_golongan}}">{{$data->nama_golongan}}</option>
        @endforeach
    </select> 



    <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
            <label for="foto" class="col-md-4 control-label">Photo</label>
                <div class="col-md-6">
                        <input id="photo" type="file" class="form-control" name="foto" value="{{ old('photo') }}" required autofocus>
                               @if ($errors->has('photo'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('photo') }}</strong>
                                   </span>
                               @endif
                </div>
              </div><br><br>
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop