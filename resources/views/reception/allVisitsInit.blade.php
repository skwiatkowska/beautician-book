@extends('layouts.reception') @section('title', 'Lista pracowników') @section('content')

<div class="container">

    <div class="row">
        <div class="box">
            <div class="row">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @foreach($employees as $employee)
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/terminy/{{$employee->id}}">{{$employee->fname}} {{$employee->lname}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="row text-center">
                <h4><br><br><br><br>Wybierz pracownika, dla którego chcesz zobaczyć terminarz</h4>
            </div>
        </div>
    </div>

    @endsection
