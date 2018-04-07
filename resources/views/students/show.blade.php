@extends('layouts.app')

@section('head')
<title> Something </title>
<link rel="stylesheet" hfref="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
@stop

@section('content')



<h1> {{ $school->name }} </h1>

<article>
	{{ $school->address}}

	{{ $school->code}}


</article>


<div class="form-control"> 

	<!-- <a href="/schools/{{ $school->id }}/edit">  </a> -->
<a href="/schools/{{ $school->id }}/edit"> Edit {{ $school->name }} </a> </div>

@stop