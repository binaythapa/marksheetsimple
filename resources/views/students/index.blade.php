@extends('layouts.app')

@section('head')
<title> Something </title>
<link rel="stylesheet" hfref="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@stop

@section('content')

<div style=" text-align: center;">
	<h1 > students </h1>
<button name="button" type="button"><a href="/students/create"> Write a new student!!! </a></button>
</div>
<table class="table-striped" text-align="center" width="80%"> 
	<h3>
	<tr>
		<th> ID </th> <th> Name </th> <th> School </th> <th> Symbol </th>
	</tr>
@foreach ($students as $student)

 
	<tr>
		<td> {{ $student->school_id }} </td>
	<td> <a style="color:green;" href="/schools/{{ $student->student_id }}"> {{ $student->name }} </a> </td>

	<td> {{ $student->name }}

	</td>

	<td > {{ $student->DOB }}
		
	</td>

	
</h3>
@endforeach

<div  class="text-center">
	{!! $students->links(); !!}
</div>							<!-- class="text-center " -->

@endsection
