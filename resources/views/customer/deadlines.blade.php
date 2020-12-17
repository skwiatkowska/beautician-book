@extends('layouts.user')

@section('title', 'Dostępne terminy')


@section('content')

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="header-text text-center">{{$employee->fname}} {{$employee->lname}} - <strong>Terminarz</strong>
                    </h2>
                    <br/>

                    @foreach($deadlines as $date => $hours)
                    <div class="row col-md-8 col-md-offset-2">
                        <div class="border">
                            <form role="form" class="label-center form-horizontal" method="POST"
                                  action="../terminy/dodaj">
                                <div class="row">
                                    {{ csrf_field() }}
                                    <div class="form-group text-center font">
                                        <label class="control-label">{{$date}}</label>
                                    </div>
                                    <div class="form-group">
                                        <select name="godzina" class="form-control">
                                            @foreach($hours as $hour )
                                                <option value="{{$hour}}">{{$hour}}</option>
                                            @endforeach
                                        </select>
                                        <select name="zabieg" class="form-control">
                                            @foreach($treatments as $treatment )
                                                <option value="{{$treatment->id}}">{{$treatment->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group text-center">
                                        <input class="btn btn-info" type="submit" value="Rezerwuj termin">
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$employee->id}}"/>
                                <input type="hidden" name="data" value="{{$date}}">
                            </form>
                        </div></div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


@endsection
