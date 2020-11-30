@extends('layouts.reception')
@section('title', 'Zarządzanie kontem pracownika')
@section('content')



<div class="container">
    <h4>Zmiana danych</h4>
    <form class="form-horizontal" method="post" action="ustawienia/zmien_dane" align="center">
        <div class="row">
            {{ csrf_field() }}
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Imię"
                value="{{$employee->fname}}">
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Nazwisko"
                value="{{$employee->lname}}">
            <input type="text" class="form-control" id="emaill" name="email" placeholder="E-mail"
                value="{{$employee->email}}">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Telefon"
                value="{{$employee->mobile}}">
            <button type="submit" class="btn btn-primary form-control">Zatwierdź</button>

    </form>

    <h4>Usuwanie konta</h4>
    <form class="form-horizontal" method="post" action="ustawienia/usun" align="center">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger form-control">Usuń</button>
    </form>
</div>


@endsection