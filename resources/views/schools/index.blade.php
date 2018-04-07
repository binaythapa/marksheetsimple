@extends('layouts.app')

@section('head')
<title> Something </title>
<link rel="stylesheet" hfref="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@stop

@section('content')

<div style=" text-align: center;">
	<h1 > schools </h1>
<button name="button" type="button"><a href="/schools/create"> Write a new school!!! </a></button>
</div>
<table class="table-striped" text-align="center" width="80%"> 
	<h3>
	<tr>
		<th> ID </th> <th> Name </th> <th> Address </th> <th> Code </th>
	</tr>
@foreach ($schools as $school)

 
	<tr>
		<td> {{ $school->id }} </td>
	<td> <a style="color:green;" href="/schools/{{ $school->id }}"> {{ $school->name }} </a> </td>

	<td> {{ $school->address }}

	</td>

	<td > {{ $school->code }}
		
	</td>

	
</h3>
@endforeach

<div  class="text-center">
	{!! $schools->links(); !!}
</div>							<!-- class="text-center " -->

@endsection
