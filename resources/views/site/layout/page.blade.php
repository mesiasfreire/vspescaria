@extends('site.layout.main')
    @section('bodyContent')


{{-- Destaque--}}
 @if(isset($posts_destaque))
 <section class="uk-container uk-margin">
     <div class="uk-child-width-1-3@m uk-margin-small-bottom" uk-grid>
         @forelse($posts_destaque as $pd)
             <div>
                 <div class="uk-inline">
                     <div class="uk-card-badge uk-label uk-label-success uk-text-small">{{$pd->category->name}}</div>
                     <a href="{{route('site.content',[$pd->category->name_slug,$pd->post_slug])}}" class="uk-link-toggle uk-text-center uk-text-small">
                         <img class="uk-img" src="{{asset('images/'. $pd->post_cover)}}" alt="" style="max-width: 100%">
                         <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                             <p >{{$pd->post_title}}</p>
                         </div>
                     </a>
                 </div>
             </div>
        @empty
        <span class="uk-text-center uk-text-small">Não existe postagem em destaques</span>
        @endforelse
     </div>
     <hr class="uk-divider-icon">
 </section>
 <!-- Demais Notícias -->


 <section class="uk-container uk-margin">
     <div class="uk-text-center" uk-grid>
         <div class="uk-width-2-3@s">
             <h4 class="uk-heading-divider uk-text-left uk-heading-bullet">Últimas Notícias</h4>
             <dl class="uk-description-list uk-text-left uk-description-list-divider">
             <div class="uk-child-width-1-2@s" uk-grid>
                @forelse($posts as $post)
                 <div>
                     <div class="uk-inline">
                         <div class="uk-card-badge uk-label uk-label-success uk-text-small">{{$post->category->name}}</div>
                         <a href="{{route('site.content',[$post->category->name_slug,$post->post_slug])}}" class="uk-link-toggle uk-text-center uk-text-small">
                             <img class="uk-img" src="{{asset('images/'. $post->post_cover)}}" alt="" style="max-width: 100%">
                             <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                                 <p>{{$post->post_title}}</p>
                             </div>
                         </a>
                     </div>
                 </div>
                @empty
                     <span class="uk-text-center uk-text-small">Não existe postagem em cadastradas</span>
                @endforelse
             </div>
         </div>

         <div class="uk-width-expand@s">
             <aside class="uk-width-medium@s uk-align-right">

{{--                 <div class="uk-margin-medium-bottom">--}}
{{--                     <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" loop muted playsinline uk-video="autoplay: inview"></video>--}}
{{--                 </div>--}}

                 <!-- Artigos Na MIra Sinny -->
                <div>
                    <img src="{{asset('images/na-mira-da-sinny-branca.png')}}" alt="Na Mira da Sinny">
                </div>
                <dl class="uk-description-list uk-text-left uk-description-list-divider">
                    @forelse($categories->where('name_slug','=','na-mira-da-sinny') as $category)
                        @foreach($category->posts->take(6) as $post)
                            <dt></dt>
                            <dd>
                                <a href="post.html" class="uk-link-heading">
                                   {{$post->post_title}}
                                </a>
                            </dd>
                        @endforeach

                   @empty
                        Não existem postagem cadastrada!
                    @endforelse
                 </dl>
                 <!-- <div class="uk-card uk-card-default uk-text-left uk-card-body uk-margin-small-bottom">

                 </div> -->
                <div class="uk-inline uk-margin-medium-bottom">
                    <img src="https://tpc.googlesyndication.com/simgad/2698632359244657825" alt="">
                </div>
             </aside>
         </div>
     </div>
 </section>
@endif


    @endsection
@section('styleCss')
@endsection

