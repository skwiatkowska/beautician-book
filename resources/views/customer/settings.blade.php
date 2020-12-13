@extends('layouts.user')

@section('title', 'Zarządzaj kontem')

@section('content')

<div class="container">
    <h4 class="header-text text-center">Zmień swoje dane</h4>
    <form class="form-horizontal" method="post" action="ustawienia/zmien_dane" align="center">
        {{ csrf_field() }}
        <input type="text" class="form-control" id="fname" name="fname" placeholder="Imię">
        <input type="text" class="form-control" id="lname" name="lname" placeholder="Nazwisko">
        <input type="text" class="form-control" id="emaill" name="email" placeholder="E-mail">
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Telefon">
        <input type="number" class="form-control" id="pesel" name="pesel" placeholder="Pesel">
        <button type="submit" class="btn btn-primary form-control">Zatwierdź</button>
    </form>
    <br>

    <h4 class="header-text text-center">Zmień hasło</h4>
    <form class="form-horizontal" method="post" action="ustawienia/zmien_haslo" align="center">
        {{ csrf_field() }}
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Stare hasło" required>
        <input type="password" class="form-control" id="pwd1" name="pwd1" placeholder="Nowe hasło" required>
        <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Nowe hasło" required>
        <button type="submit" class="btn btn-primary form-control">Zmień hasło</button>
    </form>
    <br>
    
    <h4 class="header-text text-center">Usuń konto</h4>
    <form class="form-horizontal" method="post" action="ustawienia/usun" align="center">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger form-control">Usuń</button>
    </form>
</div>

@endsection