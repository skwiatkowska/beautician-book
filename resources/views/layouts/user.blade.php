<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>

    <!-- Navigation -->

    <nav class="navbar navbar-light " role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">O nas</a>
                    </li>

                    <li>
                        <a href="/pracownicy">Pracownicy</a>
                    </li>
                    <li>
                        <a href="/zabiegi">Zabiegi</a>
                    </li>
                    @auth
                    <li>
                        <a href="/terminy">Moje wizyty</a>
                    </li>
                    <li>
                        <a href="/dane">Moje konto</a>
                    </li>
                    <li>
                        <a href="/wyloguj">Wyloguj</a>
                    </li>
                    @endauth
                    @guest


                    <li>
                        <a href="/rejestracja">Rejestracja</a>
                    </li>
                    <li>
                        <a href="/logowanie">Logowanie</a>
                    </li>


                    @endguest

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div class="container">

        <div class="row">
            {{--<div class="box">--}}

            {{-- @if (session('errors'))
            <div class="alert alert-dismissible alert-danger">
                <ul>
                    @foreach(session('errors') as $error)
                    <li>{!!$error!!}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}

            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="ul-alert">
                    {!! implode('', $errors->all('<li>:message</li>'))
                    !!}
                </ul>
            </div>

            @endif



            @if (session('info'))
            <div class="container2">
                <div class="alert alert-success">
                    <ul>
                        <li><strong>{{session('info')}}</strong></li>
                    </ul>
                </div>
            </div>
            @endif
        </div>
    </div>



    @yield('content')

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
