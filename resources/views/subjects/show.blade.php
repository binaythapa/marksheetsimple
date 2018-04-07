@extends('layouts.app')

@section('head')
<title> Something </title>
<link rel="stylesheet" hfref="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
@stop

@section('content')



<h1> {{ $subject->name }} </h1>

<article>
	{{ $subject->type}}

	{{ $subject->code}}


</article>


<div class="form-control"> 

	<!-- <a href="/subjects/{{ $subject->id }}/edit">  </a> -->
<a href="/subjects/{{ $subject->id }}/edit"> Edit {{ $subject->name }} </a> </div>

@stop