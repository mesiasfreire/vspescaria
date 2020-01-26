@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    @if(isset($errors) and count($errors) > 0)
        <div id="msg" class="alert alert-error">
            <p>{{$error}}</p>
        </div>
    @elseif(isset($success) and count($success) > 0)
        <div id="msg" class="alert alert-success">
            <p>{{$success}}</p>
        </div>
    @endif
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Principal</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Principal</li>
            </ol>
        </div>
    </div>

@stop

@section('content')
    Bem Vindo
@stop
