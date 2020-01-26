@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

    <section class="content-header">
        <h1>
            Postagens
            <small>Gestão de postagem do site </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fas fa-dashboard"></i> Admin </a></li>
            <li class="active">Postagens</li>
        </ol>
    </section>

@stop

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Lista de Postagem </h3>

            <div class="box-tools pull-right">
                <a href="{{route('posts.create')}}" class="badge bg-green" data-original-title="Criar nova pagina">Novo <i class="fa fa-plus-circle"></i></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            @include('admin.post.includes.datatable')
        </div>
        <!-- /.box-body -->
    </div>

@stop
