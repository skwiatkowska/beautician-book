@extends('layouts.reception')
@section('title', 'Zarządzanie kontem pracownika')
@section('content')



<div class="container">
    <div class="row">
        <div class="box">
            <div class="row">
                <hr>
                <h4 class="header-text text-center">{{$employee->fname}}
                    {{$employee->lname}}</h4>
            </div>
            <div class="col-lg-10 col-lg-offset-3">
                <div class="col-md-4 col-md-4-offset-1">
                    <a href="/admin/terminy/{{$employee->id}}" class="col-sm-8 btn btn-info">Terminarz
                    </a>
                </div>
                <div class="col-md-4 col-md-4-offset-1">
                    <a href="{{$employee->id}}/ustawienia" class="col-sm-8 btn btn-warning">Ustawienia</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="table-responsive col-md-10 col-md-offset-1">
                                <table class="table table-striped">
                                    <td class="col-sm-4 col-sm-offset-3 text-right"><strong>Imię</strong>
                                    </td>
                                    <td class="col-sm-1"></td>
                                    <td>
                                        {{$employee->fname}}
                                    </td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-4 col-sm-offset-3 text-right"><strong>Nazwisko</strong>
                                        </td>
                                        <td class="col-sm-1"></td>
                                        <td>
                                            {{$employee->lname}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-4 col-sm-offset-3 text-right"><strong>E-mail</strong>
                                        </td>
                                        <td class="col-sm-1"></td>
                                        <td>
                                            {{$employee->email}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-4 col-sm-offset-3 text-right"><strong>Telefon</strong>
                                        </td>
                                        <td class="col-sm-1"></td>
                                        <td>
                                            {{$employee->mobile}}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
