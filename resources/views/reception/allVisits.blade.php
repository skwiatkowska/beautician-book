@extends('layouts.reception')
@section('title', 'Terminarz')
@section('content')

<div class="container">

    <ul class="nav nav-tabs" role="tablist">
        @foreach($employees as $employee)
        <li class="nav-item">
            <a class="nav-link" href="/admin/terminy/{{$employee->id}}">{{$employee->fname}}
                {{$employee->lname}}</a>
        </li>
        @endforeach
    </ul>
    {{$employeeData}}


    <form role="form" class="form-horizontal" method="post" action="{{$employeeData->id}}/dodaj">
        {{ csrf_field() }}
        <label class="control-label">Nowy termin</label>
        <input type="date" class="form-control" id="date" name="date">
        <input type="time" class="form-control" id="time_from" name="time_from">
        <input type="time" class="form-control" id="time_to" name="time_to">
        <input class="btn btn-info" type="submit" value="Dodaj">
    </form>

    <form role="form" class="form-horizontal" method="post" action="{{$employeeData->id}}/zmien">
        {{ csrf_field() }}
        <label class="control-label">Zmień godziny w tym dniu</label>
        <input type="time" class="form-control" id="time_from" name="time_from">
        <input type="time" class="form-control" id="time_to" name="time_to">
        <input type="hidden" name="date" id="change-date" />
    </form>
    @foreach($employeeVisits as $date => $hours)
    {{$date}}
    @foreach($hours as $hour )

    {{$hour}}
    @endforeach
    @endforeach
</div>

@endsection