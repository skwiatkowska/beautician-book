@extends('layouts.reception') @section('title', 'Zarządzanie kontem pracownika') @section('content')



<div class="container">
    <div class="row">
        <div class="box">

            <div class="col-lg-6 col-lg-offset-3">
                <div class="row">
                    <hr>
                    <h4 class="header-text text-center">Zmiana danych</h4>
                    <form class="form-horizontal" method="post" action="ustawienia/zmien_dane" align="center">
                        <div class="row">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="fname" class="col-sm-3 control-label">Imię</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="fname" name="fname"
                                            placeholder="Imię" value="{{$employee->fname}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lname" class="col-sm-3 control-label">Nazwisko</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lname" name="lname"
                                            placeholder="Nazwisko" value="{{$employee->lname}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">E-mail</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="emaill" name="email"
                                            placeholder="E-mail" value="{{$employee->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-3 control-label">Telefon</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            placeholder="Telefon" value="{{$employee->mobile}}">
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
                    <h4 class="header-text text-center">Usuwanie konta</h4>
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
