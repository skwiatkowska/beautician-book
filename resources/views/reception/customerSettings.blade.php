@extends('layouts.reception')
@section('title', 'Zarządzanie')
@section('content')

<div class="container">
    <form method="post" action="ustawienia/zmien_dane">
        {{ csrf_field() }}
        <input type="text" class="form-control" id="fname" name="fname" placeholder="Imię" value="{{$customer->fname}}">
        <input type="text" class="form-control" id="lname" name="lname" value="{{$customer->lname}}">
        <input type="text" class="form-control" id="emaill" name="email" placeholder="E-mail"
            value="{{$customer->email}}">
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Telefon"
            value="{{$customer->mobile}}">
        <input type="number" class="form-control" id="pesel" name="pesel" placeholder="Pesel"
            value="{{$customer->pesel}}">
        <button type="submit" class="btn btn-primary form-control">Zatwierdź</button>
    </form>

    <h4>Reset hasła (PESEL)</h4>
    <form class="form-horizontal" method="post" action="ustawienia/zmien_haslo" align="center">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary form-control">Resetuj hasło</button>
    </form>

    <h4>Usuwanie konta</h4>
    <form method="post" action="ustawienia/usun" align="center">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger form-control">Usun</button>
    </form>
</div>

@endsection