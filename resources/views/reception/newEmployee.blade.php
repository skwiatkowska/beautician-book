@extends('layouts.reception')

@section('title', 'Rejestracja nowego Pracownika')

@section('content')

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-12">
                <hr>
                <h2 class="header-text text-center">
                    <strong>Nowy pracownik</strong>
                </h2>
                <div class="col-md-6 col-md-offset-3">
                    <form class="form-horizontal" method="post" align="center">
                        <div class="row">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group required">
                                    <label for="fname" class="col-sm-2 control-label">Imię</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="fname" name="fname"
                                            placeholder="Imię" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="lname" class="col-sm-2 control-label">Nazwisko</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lname" name="lname"
                                            placeholder="Nazwisko" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="email" class="col-sm-2 control-label">E-mail</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="emaill" name="email"
                                            placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="email" class="col-sm-2 control-label">Telefon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            placeholder="Telefon" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-sm-offset-2">
                                        <button type="submit" class="btn btn-primary form-control">Załóż konto</button>
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
