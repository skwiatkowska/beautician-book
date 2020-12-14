@extends('layouts.user')

@section('title', 'Logowanie')

@section('content')

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h3 class="text-center">Logowanie</h3>
                <form method="post" role="form" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group required">
                        <label class="control-label"></label>
                        <div class="col-sm-6 col-sm-offset-3">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="control-label"></label>
                        <div class="col-sm-6 col-sm-offset-3">
                            <input type="password" class="form-control" name="password" placeholder="Hasło" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3 text-center">
                            Loguj jako:
                            <input type="radio" name="user_type" value="customer" checked> Klient
                            <input type="radio" name="user_type" value="reception"> Recepcja
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <input class="btn btn-primary" type="submit" value="Zaloguj" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
