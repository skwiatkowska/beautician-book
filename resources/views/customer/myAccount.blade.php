@extends('layouts.user')
@section('title', 'Moje konto')

 @section('content')

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                    <div class="row">
                    <hr>
                    <h4 class="header-text text-center">Twoje dane</h4>
                    </div>
                    <div class="row">
                    <div class="col-sm-3 pull-right">
                         <a type="button" class="btn btn-info" role="button" href="/ustawienia">Ustawienia</a>
                    </div>
                    </div><br/></div>
                    <div class="col-lg-10 col-lg-offset-1">
                    <div class="table-responsive col-md-10 col-md-offset-1">
                        <table class="table table-striped">
                            <tr>       
                                <td class="col-sm-4 col-sm-offset-3 text-right"><strong>Imię</strong>
                                </td><td class="col-sm-1"></td>
                                <td>
                                    {{$data->fname}}
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-4 col-sm-offset-3 text-right"><strong>lname</strong>
                                </td><td class="col-sm-1"></td>
                                <td>
                                    {{$data->lname}}
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-4 col-sm-offset-3 text-right"><strong>E-mail</strong>
                                </td><td class="col-sm-1"></td>
                                <td>
                                    {{$data->email}}
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-4 col-sm-offset-3 text-right"><strong>Telefon</strong>
                                </td><td class="col-sm-1"></td>
                                <td>
                                    {{$data->mobile}}
                                </td>
                            </tr>
                            <tr>                  
                                <td class="col-sm-4 col-sm-offset-3 text-right"><strong>Pesel</strong>
                                </td><td class="col-sm-1"></td>
                                <td>
                                    {{$data->pesel}}
                                </td>
                            </tr>
                           
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
