<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow"/>

    <link rel="icon" href="favicons/favicon.svg">
    <title>VS - Pesca Esportiva</title>
    <meta name="description" content="Victor Souza Pesca esportiva em Barcelos e Uatumã"/>
    <meta name="robots" content="index, follow"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta itemprop="name" content="Victor Souza Pesca esportiva em Barcelos e Uatumã"/>
    <meta itemprop="description" content="Victor Souza Pesca esportiva em Barcelos e Uatumã"/>
    <meta itemprop="image" content="{{asset('images/_cdn/logo.png')}}"/>
    <meta itemprop="url" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/breakpoints.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/lightbox/css/lightbox.css')}}">

</head>

<body>
@include('sweetalert::alert')

<!-- Global site tag (gtag.js) - Google Analytics -->


<!-- Back to top button -->
<a class="back-top" id="button">
    <img src="{{asset('images/_cdn/up-arrow.png')}}" alt="voltar para o topo">
</a>

<div class="main-container-header" id="home">
    <video id="videoBG" poster="{{asset('images/_cdn/poster.jpg')}}" autoplay muted loop>
        <source src="{{asset('videos/amazonia-expeditions-river1.mp4')}}" type="video/mp4">
    </video>

    <header class="header">
        <a href="" class="logo">
            <img src="{{asset('images/_cdn/logo.png')}}" alt="Vitor Pesca Esportiva">
        </a>
        <input class="menu-btn" type="checkbox" id="menu-btn"/>
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="#home">Início</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#routes">Roteiros</a></li>
            <li><a href="#contact">Contato</a></li>
        </ul>
    </header>

    <div class="content">
        <main class="main-home">
            <div class="titulo">
                <h1>Victor Souza Pescaria Esportiva</h1>
                <p class="tagline mb-60">VENHA VIVER CONOSCO ESSA EXPERIÊNCIA</p>
            </div>
        </main>
    </div>
</div>


<!-- Section About -->
<section class="main-container bg-white" id="about">
    <div class="content p-100">
        <div class="flex">
            <article class="flex-2">
                <header class="about">
                    <h1>Sobre <span class="f-green f-300">Nós</span></h1>
                    <p>Victor Souza Pescaria Esportiva</p>
                </header>
                <p>Conheça nosso barco tumbira e nossos serviços de lazer através de pesca esportiva!
                    Nossa empresa tem como objetivo proporcionar experiências incríveis através da pesca esportiva
                    que é realizada com fins de diversão e se tornar o esporte mais saudável e com menor impacto para ao
                    meio ambiente.</p>
            </article>
            <article class="flex-2">
                <img src="{{asset('images/_cdn/barco-de-frente.jpeg')}}" alt="">
            </article>
        </div>

        <div class="flex m-20">
            <header class="about">
                <p><b>Estrutura do Barco</b></p>
            </header>


            <div class="flex-8">
                <a href="{{asset('images/_cdn/cabine-suites.jpeg')}}" data-lightbox="set" data-title="My caption">
                    <img class="example-image" src="{{asset('images/_cdn/cabine-suites.jpeg')}}" alt=""/>
                </a>
            </div>
            <div class="flex-8">
                <a href="{{asset('images/_cdn/interior-do-banheiro2.jpeg')}}" data-lightbox="set"
                   data-title="My caption">
                    <img class="example-image" src="{{asset('images/_cdn/interior-do-banheiro2.jpeg')}}" alt=""/>
                </a>
            </div>
            <div class="flex-8">
                <a href="{{asset('images/_cdn/interior-do-banheiro.jpeg')}}" data-lightbox="set"
                   data-title="My caption">
                    <img class="example-image" src="{{asset('images/_cdn/interior-do-banheiro.jpeg')}}" alt=""/>
                </a>
            </div>
            <div class="flex-8">
                <a href="{{asset('images/_cdn/roll.jpeg')}}" data-lightbox="set" data-title="My caption">
                    <img class="example-image" src="{{asset('images/_cdn/roll.jpeg')}}" alt=""/>
                </a>
            </div>
            <div class="flex-8">
                <a href="{{asset('images/_cdn/roll1.jpeg')}}" data-lightbox="set" data-title="My caption">
                    <img class="example-image" src="{{asset('images/_cdn/roll1.jpeg')}}" alt=""/>
                </a>
            </div>
            <div class="flex-8">
                <a href="{{asset('images/_cdn/roll3.jpeg')}}" data-lightbox="set" data-title="My caption">
                    <img class="example-image" src="{{asset('images/_cdn/roll3.jpeg')}}" alt=""/>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Section Routes -->
<section class="main-container bg-light" id="routes">
    <div class="content p-100">
        <header class="speaker-title m-20 mb-60">
            <h1>roteiros</h1>
            <div class="div-200"></div>
        </header>
        <main class="flex">
            <article class="flex-2">
                <div class="speakers mb-60">
                    <div class="avatar">
                        <img src="{{asset('images/_cdn/barcelos.jpeg')}}" alt="">
                    </div>
                    <div class="bio">
                        <h1>Barcelos</h1>
                        <h2>Translado avião + 1 dia de hotel</h2>
                        <div class="div-50 mb-10"></div>
                        <p>Horários</p>
                        <ul class="skills">
                            <li>Chegada</li>
                            <li><i class="fas fa-moon fa-2x"></i></li>
                            <li>Retorno</li>
                            <li><i class="fas fa-cloud-sun fa-2x"></i></li>
                        </ul>
                    </div>
                </div>
            </article>
            <article class="flex-2">
                <div class="speakers mb-60">
                    <div class="avatar">
                        <img src="{{asset('images/_cdn/uatuma.jpg')}}" alt="">
                    </div>
                    <div class="bio">
                        <h1>Uatumã</h1>
                        <h2>Manaus x Itapiranga x Barco Uatumã</h2>
                        <div class="div-50 mb-10"></div>
                        <p>Horários</p>
                        <ul class="skills">
                            <li>Chegada</li>
                            <li><i class="fas fa-moon fa-2x"></i></li>
                            <li>Retorno</li>
                            <li><i class="fas fa-cloud-sun fa-2x"></i></li>
                        </ul>
                    </div>
                </div>
            </article>
        </main>
    </div>
</section>

<!-- Section Activities -->

<!-- Section About -->
<section class="main-container bg-lightdark" id="contact">
    <div class="content">
        <header class="location m-20">
            <h1>fale conosco</h1>
            <div class="div-200 mb-60"></div>
        </header>
        <div class="flex">
            <article class="flex-2 mb-30">
                <p class="p_contato">Através do e-mail</p>
                <p class="email_contato">contato@vspescaesportiva.com</p>
                <p class="p_contato">Por telefone</p>
                <p class="email_contato">(92) 993474914/(92) 992167750</p>
                <p class="p_contato">Siga-nos no Facebook</p>
                <a href="https://www.facebook.com/PESCAVICTORSOUZA/"><i
                        class="fab fa-facebook-square fa-2x"></i></a>
            </article>
            <article class="flex-2">
                {{Form::open(['route' => 'site.email'])}}
                {!! Form::label('nome','Nome')!!}
                {!! Form::text('nome',null,['placeholder'=>'Informe o seu nome']) !!}
                @error('nome')
                <div style="color:#8c4f4d ">{{$message}}</div>
                <br>
                @enderror
                {!! Form::label('email','Email')!!}
                {!! Form::text('email',null,['placeholder'=>'Informe o seu e-mail','id'=>'email']) !!}
                @error('email')
                <div style="color:#8c4f4d ">{{$message}}</div>
                <br>
                @enderror
                {!! Form::label('assunto','Assunto')!!}
                {!! Form::textarea('assunto',null,['placeholder'=>'Digite suas informações aqui...','id'=>'assunto','rows'=>'5']) !!}
                @error('assunto')
                <div style="color:#8c4f4d ">{{$message}}</div>
                <br>
                @enderror
                {!! Form::submit('Enviar Contato') !!}

                {!! Form::close() !!}
            </article>
        </div>
    </div>
</section>

<footer class="main-container bg-dark ">
    <div class="p-15 t-center ">
        <small>Copyright &copy2019 - Vitor Pescaria Esportiva. All Rights Reserved.</small>
    </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="{{asset('/js/lightbox.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    var btn = $('#button');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });
</script>

</body>

</html>
