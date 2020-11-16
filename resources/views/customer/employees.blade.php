@extends('layouts.user')

@section('title', 'Pracownicy')
@section('content')

<div class="container">

    @foreach($employees as $employee)
    {{$employee}}
    @endforeach

</div>


@endsection