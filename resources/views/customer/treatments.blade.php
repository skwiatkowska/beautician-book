@extends('layouts.user')

@section('title', 'Zabiegi')


@section('content')


<div class="container">


    <table class="table table-striped">
        <tr>
            <th>Nazwa</th>
            <th>Przybliżona cena</th>
            <th></th>
        </tr>
        @foreach($treatments as $treatment)
        <tr>
            <td>
                {{$treatment->name}}
            </td>
            <td>
                {{$treatment->price}}
            </td>
            <td>
                <a href="/pracownicy">wybierz specjalistę</a>
            </td>
        </tr>
        @endforeach
    </table>

</div>


@endsection