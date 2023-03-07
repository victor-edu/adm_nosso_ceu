@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Funcionarios</h1>
@stop

@section('content')
    {{-- Setup data for datatables --}}
    
    
        <ul class="list-group">
           
                           
        </ul>
    
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">CPF</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            @foreach ($user as $usuario)
                <tbody>
                    <tr>
                        <th scope="row"> {{$usuario->id}}</th>
                        <td> {{$usuario->name}}</td>
                        <td> {{$usuario->email}}</td>
                        <td> {{$usuario->cpf}}</td>
                        <td>  
                            <a href="{{route('user.edit', $usuario->id)}}" class="btn btn-primary btn-sm">
                                E
                            </a>
                        </td>
                        <td>
                            <form action="{{route('user.destroy', $usuario->id)}}" method="POST" class="ms-2">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    X
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
          </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
