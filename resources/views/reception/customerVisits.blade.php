@extends('layouts.reception')
@section('title', 'Zarządzanie kontem klienta')
@section('content')

<div class="container">
    <div class="row">
        <div class="box">
            <div class="row">
                <hr>
                <h4 class="header-text text-center"><strong>{{$customer->fname}} {{$customer->lname}}</strong></h4>
                <div class="col-lg-10 col-lg-offset-3">
                    <div class="col-md-4 col-md-4-offset-1">
                        <a href="/admin/klient/{{$customer->id}}" class="col-sm-8 btn btn-info">Dane
                        </a>
                    </div>
                    <div class="col-md-4 col-md-4-offset-1">
                        <a href="/admin/klient/{{$customer->id}}/nowa_wizyta" class="col-sm-8 btn btn-danger">Nowa
                            wizyta</a>
                    </div>
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="table-responsive">
                        @if($visits->count() == 0)
                        <h2 class="header-text text-center">Brak wizyt
                        </h2>
                        @else
                        <div class="container col-md-12">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h2 class="panel-title text-center">
                                            <a data-toggle="collapse" href="#today"> <b>Dziś</b></a>
                                        </h2>
                                    </div>
                                    <div id="today" class="panel-collapse collapse in">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Pracownik</th>
                                                <th>Dzień</th>
                                                <th>Godzina</th>
                                                <th>Zabieg</th>
                                                <th></th>
                                            </tr>
                                            @foreach ($visits as $visit)
                                            @if($visit->day == date('Y-m-d'))

                                            <tr>
                                                <td class="col-md-5">
                                                    {{$visit->employee->fname}}
                                                    {{$visit->employee->lname}}
                                                </td>
                                                <td>
                                                    {{$visit->day}}
                                                </td>
                                                <td>
                                                    {{$visit->time}}
                                                </td>
                                                <td>
                                                    {{$visit->treatment->name}}
                                                </td>
                                                <td>
                                                    <form method="post"
                                                        action="/admin/klient/{{$customer->id}}/usun_wizyte">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{$visit->id}}">
                                                        <input type="submit" class="btn btn-sm btn-secondary"
                                                            role="button" value="odwołaj" />
                                                    </form>
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="container col-md-12">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h2 class="panel-title text-center">
                                            <a data-toggle="collapse" href="#future">
                                                <b>Nadchodzące</b></a>
                                        </h2>
                                    </div>
                                    <div id="future" class="panel-collapse collapse">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Pracownik</th>
                                                <th>Dzień</th>
                                                <th>Godzina</th>
                                                <th>Zabieg</th>
                                                <th>Odwołaj</th>
                                            </tr>
                                            @foreach ($visits as $visit)
                                            @if(date('Y-m-d', strtotime($visit->day)) > date('Y-m-d'))
                                            <tr>
                                                <td class="col-md-5">
                                                    {{$visit->employee->fname}}
                                                    {{$visit->employee->lname}}
                                                </td>

                                                <td>
                                                    {{$visit->day}}
                                                </td>
                                                <td>
                                                    {{$visit->time}}
                                                </td>
                                                <td>
                                                    {{$visit->treatment->name}}
                                                </td>
                                                <td>
                                                    <form method="post"
                                                        action="/admin/klient/{{$customer->id}}/usun_wizyte">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{$visit->id}}">
                                                        <input type="submit" class="btn btn-sm btn-secondary"
                                                            role="button" value="odwołaj" />
                                                    </form>
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container col-md-12">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h2 class="panel-title text-center">
                                            <a data-toggle="collapse" href="#past"> <b>Minione</b></a>
                                        </h2>
                                    </div>
                                    <div id="past" class="panel-collapse collapse">
                                        <table class="table table-striped">
                                            <tr>
                                                <th class="col-md-5">Pracownik</th>
                                                <th class="col-md-3">Dzień</th>
                                                <th class="col-md-2">Godzina</th>
                                                <th class="col-md-2">Zabieg</th>
                                                <th></th>
                                            </tr>
                                            @foreach ($visits as $visit)
                                            @if($visit->day < date('Y-m-d')) <tr>
                                                <td>
                                                    {{$visit->employee->fname}}
                                                    {{$visit->employee->lname}}
                                                </td>
                                                <td>
                                                    {{$visit->day}}
                                                </td>
                                                <td>
                                                    {{$visit->time}}
                                                </td>
                                                <td>
                                                    {{$visit->treatment->name}}
                                                </td>
                                                <td>
                                                </td>
                                                </tr>
                                                @endif
                                                @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
