@extends('site.layout.main')
@section('bodyContent')
    <div class="row">
        <div class="main-category mt-4">
            <h4 class="main-category-title">{{$category->name}}</h4>
        </div>
    </div>
<div class="row">
    <div class="col-md-8  col-lg-8 mt-4 gedf-main">
        <div class="col md-4 mt-3">
            @forelse ($category->posts as $post)
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4 mb-3">
                            <img src="{{asset('images/'.$post->post_cover)}}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8 mb-2">
                            <a href="{{route('site.content',[$category->name_slug,$post->post_slug])}}">  <div class="card-body" >
                                <h5 class="card-title">{{$post->post_title ?? ''}}</h5>
                                <p class="card-text">{!! $post->post_title !!}</p>
                                <p class="card-text"><small class="text-muted">{{$post->post_created_at}}</small></p>
                            </div></a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Não Existe Postagem Cadastradas!</p>
            @endforelse
        </div>

    </div>
    <div class="col-md-3 mt-4">
        @includeif('s.patricionio-right')

        <div class="widget mt-4">
            @includeif('templates.portaldosbumbas.includes.noticias-right')
        </div>
    </div>
</div>
@endsection
@section('styleCss')
    <style>
        .main-category {
            border-bottom: 1px solid;
            border-bottom-color: #37CD74;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .main-category .main-category-title-wrap {
            color: #303233;
        }
        .main-category-title {
            font-family: 'Ubuntu', sans-serif;
            font-weight: 300;
            font-size: 1.3em;
        }
        .card {
            border: none;

            border-bottom: 1px solid rgba(0,0,0,.125)!important;
        }

    </style>
@endsection
