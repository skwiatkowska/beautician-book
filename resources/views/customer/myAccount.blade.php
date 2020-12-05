@extends('layouts.user')
@section('title', 'Moje konto')

@section('content')

<div class="container">
    <a type="button" class="btn btn-info" role="button" href="/ustawienia">Ustawienia</a>
    {{$data}}
</div>

@endsection