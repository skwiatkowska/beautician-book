@extends('layouts.user')

@section('title', 'Pracownicy')
@section('content')

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-8 col-lg-offset-2">
                <hr>
                <h2 class="header-text text-center">Lista pracowników
                </h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        @foreach($employees as $employee)
                        <tr>
                            <td>
                                <strong>{{$employee->fname}} {{$employee->lname}}</strong>
                            </td>
                            <td>
                                <a href="pracownicy/{{$employee->id}}">umów wizytę</a>
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
