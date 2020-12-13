@extends('layouts.reception')

@section('title', 'Pracownicy')


@section('content')


<div class="container">
    <h2 class="header-text text-center">Lista pracowników

        <table class="table table-striped">
            @foreach($employees as $employee)
            <tr>
                <td>
                    <strong>{{$employee->fname}} {{$employee->lname}}</strong>
                </td>
                <td>
                    <a href="terminy/{{$employee->id}}">umów wizytę</a>
                </td>
            </tr>
            @endforeach
        </table>
</div>



@endsection