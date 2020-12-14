@extends('layouts.reception')

@section('title', 'Dostępne terminy')


@section('content')

<div class="container">
{{$employee}}
	@foreach($deadlines as $date => $hours)
		<form role="form" method="post" action="{{$employee->id}}/dodaj">
			{{ csrf_field() }}
			<label class="control-label">{{$date}}</label>
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
			<input type="submit" value="Rezerwuj termin">
			<input type="hidden" name="empl_id" value="{{$employee->id}}" />
			<input type="hidden" name="data" value="{{$date}}">
		</form>
	@endforeach
</div>


@endsection