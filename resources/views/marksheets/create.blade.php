@extends('layouts.app')

@section('content')

<h1> Write a new school </h1>

<hr/>

{!! Form::open(['url'=>'schools'])!!}

@include('schools.form',['submitbuttonname' => 'Add school'])

{!! Form::close() !!}

@include('errors.list')

@endsection