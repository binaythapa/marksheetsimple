@extends('layouts.app')

@section('content')

<h1> Write a new subject </h1>

<hr/>

{!! Form::open(['url'=>'subjects'])!!}

@include('subjects.form',['submitbuttonname' => 'Add subject'])

{!! Form::close() !!}

@include('errors.list')

@endsection