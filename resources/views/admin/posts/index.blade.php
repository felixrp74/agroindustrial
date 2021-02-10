@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

@stop

@section('content_header')
    <a class="btn btn-success float-right" href="{{route('admin.posts.create')}}">Crear Publicacion</a>    
    <h1>LISTA de  PUBLICACION</h1>

@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    {{-- @livewire('admin.posts-index')  --}}
    
    


@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    {{-- https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js
    https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js  --}}
    <script> 
        $('#emocionado').DataTable();
        console.log('bmaos');
    </script>
@stop