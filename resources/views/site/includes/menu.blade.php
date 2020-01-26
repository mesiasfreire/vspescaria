<div class="uk-navbar-right">
    <ul class="uk-navbar-nav uk-visible@m">
        @foreach($categories as $category)
            @if(!$category->parent_id)
                  <li> <a href="{{route('site.page',$category->name_slug)}}">{{$category->name}}</a></li>
                @if($category->categories->isNotEmpty())
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                    @foreach($category->categories as $subCategory)
                        <li><a href="{{route('site.page',$subCategory->name_slug)}}">{{$subCategory->name}}</a></li>
                    @endforeach
                        </ul>
                    </div>
                @endif
            @endif
         @endforeach
    </ul>
    <a href="#" class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
</div>

<!-- Mobile Navbar -->
<div id="sidenav" uk-offcanvas="flip: false; overlay: true" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <a href="{{route('site.index')}}">
            <img src="{{asset('/images/fest-norte-branco.png')}}" alt="">
        </a>
        <hr class="uk-nav-divider"></hr>

        <ul class="uk-nav uk-nav-default">
         @foreach($categories as $category)
                <li> <a href="{{route('site.page',$category->name_slug)}}">{{$category->name}}</a></li>
         @endforeach
        </ul>
        <hr class="uk-nav-divider"></hr>
        <div class="uk-margin">
            <span class="uk-nav-header">Redes Sociais</span>
            <ul class="uk-iconnav uk-margin-small-top">
                <li><a href="#" uk-icon="icon: facebook"></a></li>
                <li><a href="#" uk-icon="icon: twitter"></a></li>
                <li><a href="#" uk-icon="icon: instagram"></a></li>
                <li><a href="#" uk-icon="icon: google-plus"></a></li>
            </ul>
        </div>
    </div>
</div>

