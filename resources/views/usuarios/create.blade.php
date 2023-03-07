@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Cadastrar Usuario</h1>
@stop

@section('content')

<x-form :action="route('user.store')" :update="false" />

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
