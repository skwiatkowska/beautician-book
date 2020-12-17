@extends('layouts.reception')
@section('title', 'Zabiegi')
@section('content')

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <div class="row">
                    <hr>
                    <h2 class="header-text text-center">Lista zabiegów
                    </h2>
                </div>
                <div class="row">
                    <div class="col-sm-3 pull-right">
                        <a type="button" class="btn btn-info" role="button" href="/admin/zabiegi/nowy">Nowy</a>
                    </div>
                </div><br />
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Nazwa</th>
                                    <th>Przybliżona cena</th>
                                    <th colspan="2"></th>
                                </tr>
                                @foreach($treatments as $treatment)
                                <tr>
                                    <td>
                                        {{$treatment->name}}
                                    </td>
                                    <td>
                                        {{$treatment->price}}
                                    </td>
                                    <td>
                                        <a href="/admin/zabiegi/{{$treatment->id}}/edytuj">edytuj</a>
                                    </td>
                                    <td>
                                        <form method="post" action="/admin/zabiegi/{{$treatment->id}}/usun">
                                            {{ csrf_field() }}
                                            <button class="btn" role="submit">usuń</button>
                                        </form>
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
