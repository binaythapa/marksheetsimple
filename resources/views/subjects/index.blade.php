@extends('layouts.app')

@section('head')
<title> Something </title>
<link rel="stylesheet" hfref="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@stop

@section('content')

<div style=" text-align: center;">
	<h1 > subjects </h1>
<button name="button" type="button"><a href="/subjects/create"> Write a new subject!!! </a></button>
</div>
<table class="table-striped" text-align="center" width =" 70%" height="90%"> 
	<h3>
	<tr>
		<th> ID </th> <th> Code </th> <th> Name </th> <th> Type </th> <th> Full Marks </th> <th> Pass Marks </th>
	</tr>
@foreach ($subjects as $subject)

 
	<tr>
		<td height = "40"> {{ $subject->id }} </td>
	<td height = "40"> <a style="color:green;" href="/subjects/{{ $subject->id }}"> {{ $subject->code }} </a> </td>

	<td height = "40"> {{ $subject->name }}

	</td>

	<td height = "40" > {{ $subject->type }}
		
	</td>

	<td height = "40" > {{ $subject->full_marks }}
		
	</td>

<td height = "40" > {{ $subject->pass_marks }}
		
	</td>

	</td>




	
</h3>
@endforeach

<div  class="text-center">
	{!! $subjects->links(); !!}
</div>							<!-- class="text-center " -->

@endsection
