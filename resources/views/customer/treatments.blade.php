@extends('layouts.user')

@section('title', 'Zabiegi')


@section('content')


<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-8 col-lg-offset-2">
                <hr>
                <h2 class="header-text text-center">Lista zabiegów
                </h2>
                <div class="table-responsive">
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
            </div>
        </div>
    </div>
</div>


@endsection