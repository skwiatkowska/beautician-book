@extends('layouts.user')

@section('title', 'Zarządzaj kontem')

@section('content')

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-6 col-lg-offset-3">
                <div class="row">
                    <hr>
                    <h4 class="header-text text-center">Zmień swoje dane</h4>
                    <form class="form-horizontal" method="post" action="ustawienia/zmien_dane" align="center">
                        <div class="row">
                            {{ csrf_field() }}
                            <fieldset>

                                <div class="form-group">
                                    <label for="fname" class="col-sm-3 control-label">Imię</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="fname" name="fname"
                                               placeholder="Imię">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="lname" class="col-sm-3 control-label">Nazwisko</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lname" name="lname"
                                               placeholder="Nazwisko">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">E-mail</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="emaill" name="email"
                                               placeholder="E-mail">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="mobile" class="col-sm-3 control-label">Telefon</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                               placeholder="Telefon">
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label for="pesel" class="col-sm-3 control-label">Pesel</label>

                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="pesel" name="pesel"
                                               placeholder="Pesel">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-3 col-sm-offset-2">
                                        <button type="submit" class="btn btn-primary form-control">Zatwierdź</button>
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </form>
                </div>
                <br>
                <div class="row">
                    <hr>
                    <h4 class="header-text text-center">Zmień hasło</h4>
                    <form class="form-horizontal" method="post" action="ustawienia/zmien_haslo" align="center">
                        <div class="row">
                            {{ csrf_field() }}
                            <fieldset>

                            <div class="form-group required">
                                    <label for="pwd" class="col-sm-3 control-label">Stare hasło</label>

                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="pwd" name="pwd"
                                               placeholder="Stare hasło" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="pwd" class="col-sm-3 control-label">Nowe hasło</label>

                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="pwd1" name="pwd1"
                                               placeholder="Nowe hasło" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="pwd" class="col-sm-3 control-label">Powtórz<br/> nowe hasło</label>

                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="pwd2" name="pwd2"
                                               placeholder="Nowe hasło" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-sm-offset-2">
                                        <button type="submit" class="btn btn-primary form-control">Zmień hasło</button>
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </form>
                </div>
                <br>
                <div class="row">
                    <hr>
                    <h4 class="header-text text-center">Usuń konto</h4>
                    <div class="text-justify small">
                    </div>
                    <form class="form-horizontal" method="post" action="ustawienia/usun" align="center">
                        <div class="row">
                            {{ csrf_field() }}
                            <fieldset>

                                <div class="form-group">
                                    <div class="col-sm-3 col-sm-offset-2">
                                        <button type="submit" class="btn btn-danger form-control">Usuń</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection 
