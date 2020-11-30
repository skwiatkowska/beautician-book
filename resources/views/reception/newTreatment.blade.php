@extends('layouts.reception')
@section('title', 'Nowy zabieg')
@section('content')



<div class="container">

                    <form class="form-horizontal" method="post" action="/admin/zabiegi/nowy"
                        align="center">
                        <div class="row">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Nazwa</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Nazwa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-sm-3 control-label">Cena</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="price" name="price"
                                            placeholder="Cena" >
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

@endsection