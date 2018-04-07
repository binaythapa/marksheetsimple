@extends('layouts.app')

@section('content')

<h1> Write a new student </h1>

<hr/>

{!! Form::open(['url'=>'students'])!!}

@include('students.form',['submitbuttonname' => 'Add student'])

{!! Form::close() !!}

@include('errors.list')

@endsection