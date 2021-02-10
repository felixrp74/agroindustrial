@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">


@stop

@section('content_header')
    <h1>LISTA USUARIO</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    <div class="card">

        {{-- cabecera tarjeta --}}
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.users.create')}}">Agregar UsuarioSSSS</a>
        </div>

        {{-- cuerpo tarjeta --}}
        <div class="card-body">
            <table class="table table-striped" id="tablausuarios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>email</th>
                        <th>email</th>
                        <th>email</th>
                        {{-- <th>email</th> --}}
                        {{-- <th colspan="2">incor</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->tipo}}</td>
                            <td><a class="btn btn-info" href="{{route('admin.users.edit', $user)}}">Editar</a></td>
                            <td>
                                <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                    @csrf
                                    @method('delete')                                    

                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop



@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log('========================================');
            $('#tablausuarios').DataTable();

        } );

    </script>
@stop