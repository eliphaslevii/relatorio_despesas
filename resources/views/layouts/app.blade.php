<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animated.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fiori-fundamentals.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/appends.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/javascript.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/jquery.maskMoney.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/material/bin/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.czMore-latest.js') }}"></script>

    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" defer ></script>
    <script src="{{asset('js/html2pdf.bundle.js')}}" defer></script>
    <script src="{{asset('js/jspdf.js')}}" defer></script>
    <script src="{{asset('js/jspdf.min.js')}}" defer></script>
    <script src="{{asset('js/jspdf.plugin.autotable.js')}}" defer></script>
    <script src="{{asset('js/jspdf.debug.js')}}" defer></script>
    <script src="{{asset('js/html2canvas.js')}}" defer></script>
    <script src="{{asset('js/html2canvas.min.js')}}" defer></script>

    <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute('6LeOU_MUAAAAAM_5L24vwHRgVnGxM7NQz9X5zplL', {action: 'submit'}).then(function (token) {
                });
            });
        }

    </script>
</head>
<body>

<div id="app" class="">

    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img style="width: 100%;height: 100%" src="{{asset('img/hitech.jpg')}}">
                </div>
                <a><img class="circle white" id="myimg" src=""></a>
                <input id="userphoto" value="{{Auth::user()->name}}" hidden>
            <script>
                $(document).ready(function(){
                var y = $('#userphoto').val();

                if(y === 'Vanderson Campos')
                {
                    $('#myimg').attr('src',"{{asset('img/VandersonCampos.jpeg')}}");
                }
                else if(y === 'Luiz Cesar Lopes Junior')
                {
                    $('#myimg').attr('src',"{{asset('img/LuizCesar.jpeg')}}");
                }
            })
            </script>
                <a><span class="white-text name">{{ Auth::user()->name }} </span></a>
                <a><span class="white-text email">{{ Auth::user()->email }}</span></a>
            </div>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header"><i class="material-icons">cloud</i>Relatório de despesas</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="material-icons">event_note</i>RDV</a></li>
                            <li><a href="{{route('relatorio')}}"><i class="material-icons">event</i>Relatório</a></li>
                            <li><a href="{{route('edit')}}"><i class="material-icons">create</i>Edição</a></li>

                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <div class="divider"></div>
        </li>
        @can('view', App\Customer::class)
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header"><i class="material-icons">trending_up</i>Financeiro</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('checkout')}}"><i class="material-icons">mail</i>Análise</a></li>
                            <li><a href="{{route('aprovados')}}"><i class="material-icons">attach_money</i>Aprovados</a></li>
                            <li><a href="{{route('edit')}}"><i class="material-icons">create</i>Edição</a></li>

                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <div class="divider"></div>
        </li>
        @endcan
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header"><i class="material-icons">settings</i>Setup</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href=""><i class="material-icons">video_library</i>Pferd Learning</a></li>
                        <li><a href="{{route('bug')}}"><i class="material-icons">bug_report</i>Reportar bug</a></li>
                        <li><a href="{{route('suggestion')}}"><i class="material-icons">chat_bubble</i>Sugestões</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <li>
            <div class="divider"></div>
        </li>
        <ul class="">
            <li><a href="javascript:void" onclick="$('#logout-form').submit();"><i class="material-icons">settings_power</i>Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
            @csrf
        </form>
    </ul>
    <nav class="white darken-4">
        <div class="nav-wrapper"
             style="background-image: linear-gradient(to bottom,rgba(255,255,255,1),rgba(220,220,220,0.8))">
            <a  data-target="slide-out" style="margin-top:0.2%" class="sidenav-trigger show-on-large blue darken-2 btn-floating
            btn-large waves-effect waves-light" id="menu"><i
                    class="material-icons icon-black white-text large">menu</i></a>
            <div class="col s4 m4">
                <a href="#" class="brand-logo right">

                    <img class="right imgsize" id="" src="{{asset('img/logo.png')}}" style="margin-top: 20px;margin-right: 20px">
                </a>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>

