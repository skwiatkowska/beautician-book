@extends('layouts.reception') @section('title', 'Lista pracowników') @section('content')

<div class="container">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        @foreach($employees as $employee)
        <li class="nav-item">
            <a class="nav-link" href="/admin/terminy/{{$employee->id}}">{{$employee->fname}} {{$employee->lname}}</a>
        </li>
        @endforeach
    </ul>
</div>

@endsection