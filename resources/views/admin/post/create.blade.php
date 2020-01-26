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
            <li><a href="{{route('posts.index')}}"></a>Posts</li>
        </ol>
    </section>

@stop

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Nova Postagem</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="">
            @includeIf('admin.post.partials.form')
        </div>
        <!-- /.box-body -->
    </div>

@stop

@section('js')
    @includeIf('admin.includes.tinymce-editor')
@endsection


