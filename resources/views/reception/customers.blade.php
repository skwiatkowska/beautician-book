@extends('layouts.reception')
@section('title', 'Klienci')
@section('content')

<div class="container">
    @foreach($customers as $customer)
    {{$customer}}
    @endforeach
</div>
@endsection