@extends('layouts.user')

@section('title', 'terminy')


@section('content')

    <div class="container">

		<h2>{{$employee}} - Terminarz</h2>
		@foreach($deadlines as $date => $hours)
			<form role="form" class="label-center form-horizontal" method="POST"
				  action="../terminy/dodaj">
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
				<input type="hidden" name="id" value="{{$employee->id}}"/>
				<input type="hidden" name="data" value="{{$date}}">
			</form>
		@endforeach         
    </div>
@endsection
