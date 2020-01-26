@extends('adminlte::page')

@section('title', 'Fest\'Norte')

@section('content_header')

    <section class="content-header">
        <h1>
            Paginas
            <small>Gestão de páginas do site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Admin </a></li>
            <li><a href="{{route('pages.index')}}"></a>Paginas</li>
            <li class="active">Nova Página</li>
        </ol>
    </section>

@stop

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Nova Página</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="">
            @include('admin.pages.partials.form')
        </div>
        <!-- /.box-body -->
    </div>

@stop


