@extends('layouts.reception')

@section('title', 'Rejestracja nowego Pracownika')

@section('content')

<div class="container">

    <form method="post">
        {{ csrf_field() }}
        <input type="text" id="fname" name="fname" placeholder="Imię" required>
        <input type="text" id="lname" name="lname" placeholder="Nazwisko" required>
        <input type="text" id="emaill" name="email" placeholder="E-mail" required>
        <input type="text" id="mobile" name="mobile" placeholder="Telefon" required>
        <button type="submit">Załóż konto</button>
    </form>

</div>



@endsection