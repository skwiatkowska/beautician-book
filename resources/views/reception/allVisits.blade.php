@extends('layouts.reception')
@section('title', 'Terminarz')
@section('content')

<div class="container">
    <div class="box">
        <div class="row">
            <ul class="nav nav-tabs" role="tablist">
                @foreach($employees as $employee)
                <li class="nav-item">
                    <a class="nav-link" href="/admin/terminy/{{$employee->id}}">{{$employee->fname}}
                        {{$employee->lname}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="row">
            <h2 class="intro-text text-center">{{$employeeData->fname}} {{$employeeData->lname}}
            </h2>
            <div class="col-md-3 col-md-offset-1">
                <input type="date" class="form-control" id="chooseDate" required value="{{date('Y-m-d')}}"
                    onchange="getExactDate()">
            </div>
            <div class="col-sm-3 pull-right">
                <button type="button" class="btn btn-info info newDeadlineBtn" role="button">Nowy
                    termin</button>
            </div>
        </div>
        <div class="new-deadline-form">
            <div class="border">
                <form role="form" class="form-horizontal" method="post" action="{{$employeeData->id}}/dodaj">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group text-center">
                            <label class="control-label">Nowy termin</label>
                            <br>
                            <br>
                            <div class="row col-md-6 col-md-offset-3">
                                <input type="date" class="form-control" id="date" name="date"
                                    min="{{date('Y-m-d', strtotime('+1 day'))}}"
                                    value="{{date('Y-m-d', strtotime('+1 day'))}}" required>
                                <input type="time" class="form-control" id="time_from" name="time_from" min="07:00"
                                    max="19:00" step="1800" value="09:00" required>

                                <input type="time" class="form-control" id="time_to" name="time_to" min="07:00"
                                    max="19:00" step="1800" value="17:00" required>

                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input class="btn btn-info" type="submit" value="Dodaj">
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="change-hours col-md-10 col-md-offset-1">
            <br>
            <div class="border">
                <form role="form" class="form-horizontal" method="post" action="{{$employeeData->id}}/zmien">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="form-group text-center">
                            <label class="control-label">Zmień godziny w tym dniu</label>
                            <br />
                            <div class="row col-md-8 col-md-offset-2">

                                <table id="changeDeadlinesTable" class="table table-striped">
                                    <tr class="text-center">
                                        <th class="small">Godzina rozpoczęcia</th>
                                        <th class="small">Godzina zakończenia</th>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <input type="time" class="form-control" id="time_from" name="time_from"
                                                min="07:00" max="20:00" step="1800" value="09:00" required>
                                        </td>
                                        <td>
                                            <input type="time" class="form-control" id="time_to" name="time_to"
                                                min="07:00" max="20:00" step="1800" value="16:00" required>
                                        </td>
                                    </tr>
                                </table>

                                <div class="form-group text-center">
                                    <input class="btn btn-info" type="submit" value="Zmień">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="date" id="change-date" />
                    </div>
                </form>
            </div>
        </div>
        <div class="row text-center" id="noVisits">
            <p><br>Brak terminów w danym dniu</p>
        </div>
        <br>
        <br>
        <div class="row col-md-12 col-md-offset-0">
            @foreach($employeeVisits as $date => $hours)
            <div class="border data">
                <div class="row">
                    <div class="form-group text-center font">
                        <label class="col-md-7 col-md-offset-2 text-center control-label data-label">{{$date}}</label>
                        <form role="form" method="post" action="{{$employeeData->id}}/usun" id="deletingVisitsForm">
                            {{ csrf_field() }}
                            <button type="submit"
                                class="deleteDeadlineBtn col-md-1 pull-right btn btn-danger">X</button>
                            <input type="hidden" name="date" value="{{$date}}" />
                        </form>
                        <button type="button" onclick="editDeadlineForm('{{$date}}')"
                            class="editDeadlineBtn col-md-1 pull-right btn btn-info" role="button"><span
                                class="glyphicon glyphicon-pencil"></span></button>
                        <br>
                    </div>
                    <div class="form-group">
                        <table class="table table-striped table-numbered">
                            @foreach($hours as $hour )
                            @if(strlen($hour) < 6) <tr>
                                <td>
                                </td>
                                <td>
                                    {{$hour}}
                                </td>
                                <td>
                                    brak wizyty
                                </td>
                                <td>
                                </td>
                                </tr>
                                @else
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                        {{$hour->time}}
                                    </td>
                                    <td>
                                        <a href="/admin/klient/{{$hour->cust_id}}">{{$hour->fname}}
                                            {{$hour->lname}}</a>
                                    </td>
                                    <td>
                                        {{$hour->name}}
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script>
        var noVisits = $('#noVisits');
        noVisits.hide();
        $(".new-deadline-form").hide();
        $('.change-hours').hide();
        $(".newDeadlineBtn").click(function(){
            $(".new-deadline-form").toggle();
        });
        function editDeadlineForm(date) {
            $('.change-hours').toggle();
            $('#change-date').val(date);
        };
        getExactDate();
    
function getExactDate() {
  var input, filter, data, label, i, txtValue;
  input = document.getElementById("chooseDate");
  filter = input.value.toUpperCase();
  var data = $('.data');
  var noneCounts = 0;
  for (i = 0; i < data.length; i++) {
    label = data[i].getElementsByTagName("label")[0];
       
    if (label) {
      txtValue = label.textContent || label.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        data[i].style.display = "";
        noVisits.hide();
      } else {
        data[i].style.display = "none";
        noneCounts += 1;
      }
    }
  }
  if(data.length == noneCounts){
    noVisits.show();
  }
}
    </script>
    @endsection
