@extends('layouts.reception') 
@section('title', 'Klienci')
@section('content')

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <div class="row">
                    <hr>
                    <h2 class="header-text text-center">Klienci
                    </h2>
                </div>
                <div class="row">
                    <div class="col-sm-3 pull-right">
                         <a type="button" class="btn btn-info" role="button" href="/admin/nowy_klient">Nowy klient</a>
                    </div>
                </div><br/>
                <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Imię i nazwisko</th>
                            <th>Pesel</th><th></th>
                            </tr></thead>
                            @foreach($customers as $customer)
                            <tr>
                         
                                <td>
                                    {{$customer->fname}} {{$customer->lname}}
                                </td>
                            
                                <td>
                                    {{$customer->pesel}}
                                </td>
                                <td>
                                <a href="klient/{{$customer->id}}">wybierz</a>
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
