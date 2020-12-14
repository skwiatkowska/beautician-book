@extends('layouts.reception')
@section('title', 'Zarządzanie kontem klienta')
@section('content')

<div class="container">
	{{$customer}}
	<a href="/admin/klient/{{$customer->id}}">Dane
	<a href="/admin/klient/{{$customer->id}}/nowa_wizyta">Nowa wizyta</a>
	@foreach ($visits as $visit)
		{{$visit->employee->fname}}
		{{$visit->employee->lname}}
		{{$visit->day}}
		{{$visit->time}}
		{{$visit->treatment->name}}
		<form method="post" action="/admin/klient/{{$customer->id}}/usun_wizyte">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{$visit->id}}">
			<input type="submit" class="btn btn-sm btn-secondary"
				role="button" value="odwołaj" />
		</form>
	@endforeach
</div>
@endsection