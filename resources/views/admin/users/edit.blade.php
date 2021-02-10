@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDIT USUARIO</h1>
@stop

@section('content')
    
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'nombre') !!}
                {!! Form::text('name',$user->name, ['class' => 'form-control', 'placeholder' => 'ingresa ']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {{-- {!! Form::label('slug', 'slug') !!}
                {!! Form::text('slug',$category->slug, ['class' => 'form-control', 'placeholder' => 'ingresa slug', 'readonly']) !!}

                
                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror --}}

                {!! Form::label('email', 'email') !!}
                {!! Form::email('email',$user->email, ['class' => 'form-control', 'placeholder' => 'ingresa email']) !!}

                
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

            {!! Form::submit('Actualizar', ['class' => 'btn btn-info'])  !!}


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