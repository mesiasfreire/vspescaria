<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.7/dist/css/uikit.min.css" />

    @yield('styleCss')
    @stack('styleCss')

</head>
<body class="uk-background-muted" uk-height-viewport="expand: true" class="uk-width-1-1 uk-height-1-1">
<div id="app">
    <header class="uk-width-1-1">
        <div class="uk-container uk-background-light">
            <nav class="uk-navbar-container uk-navbar-transparent uk-navbar uk-padding-small" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active">
                            <a href="{{route('site.index')}}">
                                <img src="{{asset('/images/fest-norte-preto.png')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                @includeIf('site.includes.menu',['categories'=>$categories])
            </nav>
        </div>
    </header>

    <main class="uk-width-1-1">
            @includeIf('site.partials.patrocinio')
            @yield('bodyContent')
    </main>
    @include('site.includes.footer')

</div>



<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.7/dist/js/uikit-icons.min.js"></script>
@yield('scripts')
</body>
</html>








