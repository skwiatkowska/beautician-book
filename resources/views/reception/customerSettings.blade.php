@extends('layouts.reception') 
@section('title', 'Zarządzanie danymi klienta') 
@section('content')

<div class="container">
    <div class="row">
        <div class="box"><br />
            <div class="row">
                <h4 class="header-text text-center"><strong>{{$customer->fname}} {{$customer->lname}}</strong>
                </h4>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
                <div class="row">
                    <hr>
                    <h4 class="header-text text-center">Zmiana danych </h4>
                    <form class="form-horizontal" method="post" action="ustawienia/zmien_dane" align="center">
                        <div class="row">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="fname" class="col-sm-3 control-label">Imię</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="fname" name="fname"
                                            placeholder="Imię" value="{{$customer->fname}}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="lname" class="col-sm-3 control-label">Nazwisko</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lname" name="lname"
                                            value="{{$customer->lname}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">E-mail</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="emaill" name="email"
                                            placeholder="E-mail" value="{{$customer->email}}">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="mobile" class="col-sm-3 control-label">Telefon</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            placeholder="Telefon" value="{{$customer->mobile}}">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="pesel" class="col-sm-3 control-label">Pesel</label>

                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="pesel" name="pesel"
                                            placeholder="Pesel" value="{{$customer->pesel}}">
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
                    <h4 class="header-text text-center">Reset hasła (PESEL)</h4>
                    <form class="form-horizontal" method="post" action="ustawienia/zmien_haslo" align="center">
                        <div class="row">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-sm-3 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary form-control">Resetuj hasło</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <br>
                <div class="row">
                    <hr>
                    <h4 class="header-text text-center">Usuwanie konta</h4>
                    <form class="form-horizontal" method="post" action="ustawienia/usun" align="center">
                        <div class="row">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-sm-3 col-sm-offset-2">
                                        <button type="submit" class="btn btn-danger form-control">Usun</button>
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
</div>

@endsection
