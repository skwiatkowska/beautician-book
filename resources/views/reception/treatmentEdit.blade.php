@extends('layouts.reception')
@section('title', 'Edycja - zabieg')
@section('content')



<div class="container">
    <div class="row">
        <div class="box">

            <div class="col-lg-6 col-lg-offset-3">
                <div class="row">
                    <hr>
                    <h4 class="header-text text-center">{{$treatment->name}}</h4>
                    <form class="form-horizontal" method="post" action="/admin/zabiegi/{{$treatment->id}}/edytuj"
                        align="center">
                        <div class="row">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Nazwa</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Nazwa" value="{{$treatment->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-sm-3 control-label">Cena</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="price" name="price"
                                            placeholder="Cena" value="{{$treatment->price}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-sm-offset-2">
                                        <button type="submit" class="btn btn-primary form-control">Zatwierdź</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
