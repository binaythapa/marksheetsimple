@extends('layouts.app')

@section('content')

<h1> Edit the subject: </h1>

<hr/>

{!! Form::model($subject, ['method'=>'PATCH', 'action'=> ['SubjectsController@update',$subject->id]]) !!}
@include('subjects.form',['submitbuttonname'=> 'Update subject'])
{!! Form::close() !!}

@include('errors.list')

@endsection