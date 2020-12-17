@extends('layouts.reception')

@section('title', 'Dostępne terminy')


@section('content')

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="header-text text-center">Terminarz: {{$employee->fname}} {{$employee->lname}}
                </h2>
                @foreach($deadlines as $date => $hours)
                <div class="border">
                    <form role="form" class="label-center form-horizontal" method="post"
                        action="{{$employee->id}}/dodaj">
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
                            {{--<div class="clearfix"></div>--}}
                        </div>
                        <input type="hidden" name="empl_id" value="{{$employee->id}}" />

                        <input type="hidden" name="data" value="{{$date}}">

                    </form>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>


@endsection
