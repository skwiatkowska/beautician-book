@extends('layouts.reception') 
@section('title', 'Klient') 
@section('content')
<div class="container">
    <div class="row">
        <div class="box">
            <div class="row">
                <hr>
                <h4 class="header-text text-center"><strong>{{$customer->fname}} {{$customer->lname}}</strong></h4>
                <div class="col-lg-10 col-lg-offset-3">
                    <div class="col-md-4 col-md-4-offset-1">
                        <a href="/admin/klient/{{$customer->id}}/wizyty" class="col-sm-8 btn btn-info">Wizyty
                        </a>
                    </div>
                    <div class="col-md-4 col-md-4-offset-1">
                        <a href="{{$customer->id}}/ustawienia" class="col-sm-8 btn btn-warning">Ustawienia</a>
                    </div>
                </div>
            </div>
            <br>
          
            <div class="row">
                <div class="table-responsive col-md-10 col-md-offset-1">
                    <table class="table table-striped">
                        <tr>
                            <td class="col-sm-4 col-sm-offset-3 text-right"><strong>Imię</strong>
                            </td>
                            <td class="col-sm-1"></td>
                            <td>
                                {{$customer->fname}}
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-4 col-sm-offset-3 text-right"><strong>lname</strong>
                            </td>
                            <td class="col-sm-1"></td>
                            <td>
                                {{$customer->lname}}
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-4 col-sm-offset-3 text-right"><strong>E-mail</strong>
                            </td>
                            <td class="col-sm-1"></td>
                            <td>
                                {{$customer->email}}
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-4 col-sm-offset-3 text-right"><strong>Telefon</strong>
                            </td>
                            <td class="col-sm-1"></td>
                            <td>
                                {{$customer->mobile}}
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-4 col-sm-offset-3 text-right"><strong>Pesel</strong>
                            </td>
                            <td class="col-sm-1"></td>
                            <td>
                                {{$customer->pesel}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
