@extends('layouts.user')

@section('title', 'Logowanie')

@section('content')

<div class="container">

    <form method="post">
        {{ csrf_field() }}
        <input type="email" name="email" placeholder="E-mail" required>

        <input type="password" name="password" placeholder="Hasło" required>

        <input class="btn btn-primary" type="submit" value="Zaloguj" />

    </form>

</div>

@endsection