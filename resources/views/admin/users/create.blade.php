@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREATE USUARIO</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.users.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'nombre') !!}
                    {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'ingresa nombre']) !!}

                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('email', 'email') !!}
                    {!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'ingresa email']) !!}

                    
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('password', 'password') !!}
                    {!! Form::password('password',null, ['class' => 'form-control', 'placeholder' => 'ingresa password']) !!}

                    
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                {!! Form::submit('crear', ['class' => 'btn btn-info'])  !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 