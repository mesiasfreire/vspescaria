@extends('templates.portaldosbumbas.main')

@section('bodyContent')
<div class="row">
    <div class="col-md-8  col-lg-8 mt-4 gedf-main">
        {{dd($catPosts)}}
        @forelse ($posts->posts as $post)

            <div class="card mb-5">
                <img class="card-img" src="{{asset('images/'.$post->post_cover)}}" alt="Imagem do card">
                <div class="card-img-overlay"  style="background: linear-gradient(0deg, rgba(45,39,39,0.6797093837535014) 0%, rgba(25,23,23,0.12788865546218486) 44%); top:50% !important;">
                    <p class="card-text badge badge-warning" style="font-size: 0.875em;font-weight: 400">{{$post->category->name ??' '}}</p>
                    <h5 class="card-title text-white fonte" style="font-size: 1.875em; font-family: 'Ubuntu', sans-serif; font-weight: 700" >{{$post->post_title ?? ''}}</h5>
                </div>
            </div>
        @empty
            <p>Não Existe Postagem Cadastradas!</p>
        @endforelse
    </div>
    <div class="col-md-3 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="h5">@LeeCross</div>
                <div class="h7 text-muted">Fullname : Miracles Lee Cross</div>
                <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                    etc.
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="h6 text-muted">Followers</div>
                    <div class="h5">5.2342</div>
                </li>
                <li class="list-group-item">
                    <div class="h6 text-muted">Following</div>
                    <div class="h5">6758</div>
                </li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="h5">@LeeCross</div>
                <div class="h7 text-muted">Fullname : Miracles Lee Cross</div>
                <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                    etc.
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="h6 text-muted">Followers</div>
                    <div class="h5">5.2342</div>
                </li>
                <li class="list-group-item">
                    <div class="h6 text-muted">Following</div>
                    <div class="h5">6758</div>
                </li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
</div>
@endsection
