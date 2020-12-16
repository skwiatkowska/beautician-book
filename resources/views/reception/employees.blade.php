@extends('layouts.reception')
@section('title', 'Lista pracowników')
@section('content')

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <div class="row">
                    <hr>
                    <h2 class="header-text text-center">Pracownicy
                    </h2>
                </div>
                <div class="row">
                    <div class="col-sm-3 pull-right">
                        <a type="button" class="btn btn-info" role="button" href="/admin/nowy_pracownik">Nowy</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Imię i nazwisko</th>
                                        <th>Telefon</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>
                                        {{$employee->fname}} {{$employee->lname}}
                                    </td>
                                    <td>
                                        {{$employee->mobile}}
                                    </td>
                                    <td>
                                        <a href="pracownik/{{$employee->id}}">wybierz</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
