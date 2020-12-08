<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-dark" role="navigation">
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
                <ul class="nav navbar-nav ">
                    <li>
                        <a href="/admin">Strona startowa</a>
                    </li>
                    <li>
                        <a href="/admin/klienci">Klienci</a>
                    </li>
                    <li>
                        <a href="/admin/pracownicy">Pracownicy</a>
                    </li>
                    <li>
                        <a href="/admin/zabiegi">Zabiegi</a>
                    </li>
                    <li>
                        <a href="/admin/terminy">Wizyty</a>
                    </li>
                    <li>
                        <a href="/wyloguj">Wyloguj</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div class="container">

        <div class="row">
            {{--<div class="box">--}}

            @if (session('errors'))
            <div class="alert alert-dismissible alert-danger">
                Wystąpiły następujące błędy:<br />
                <ul>
                    @foreach(session('errors') as $error)
                    <li>{!!$error!!}</li>
                    @endforeach
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

            {{--</div>--}}
        </div>
    </div>

    @yield('content')

</body>
</html>
