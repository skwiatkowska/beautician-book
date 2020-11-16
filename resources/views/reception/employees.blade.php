@extends('layouts.reception')
@section('title', 'Lista pracowników')
@section('content')

<div class="container">
    @foreach($employees as $employee)
    {{$employee}}
    @endforeach
</div>



@endsection