@extends('layouts.user')

@section('title', 'Rejestracja nowego konta')
@section('content')

<div class="container">
    <form method="post">
        {{ csrf_field() }}
        <input type="text" id="fname" name="fname" placeholder="Imię" required>
        <input type="text" id="lname" name="lname" placeholder="Nazwisko" required>
        <input type="text" id="emaill" name="email" placeholder="E-mail" required>
        <input type="text" id="mobile" name="mobile" placeholder="Telefon" required>
        <input type="number" id="pesel" name="pesel" placeholder="Pesel" required>
        <input type="password" id="pwd" name="pwd" placeholder="Hasło" required>
        <button type="submit">Załóż konto</button>
    </form>
</div>



@endsection