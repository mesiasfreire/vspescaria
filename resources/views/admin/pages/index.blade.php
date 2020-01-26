@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

    <section class="content-header">
        <h1>
            Paginas
            <small>Gestão de páginas do site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fas fa-dashboard"></i> Admin </a></li>
            <li class="active">Paginas</li>
        </ol>
    </section>

@stop

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Lista de Páginas </h3>
            <div class="box-tools pull-right">
                 <a href="{{route('pages.create')}}" class="badge bg-green" data-original-title="Criar nova pagina">Novo <i class="fa fa-plus-circle"></i></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="">
            @include('admin.pages.includes.datatable')
        </div>
        <!-- /.box-body -->
    </div>

@stop
