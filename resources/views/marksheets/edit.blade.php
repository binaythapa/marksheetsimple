@extends('layouts.app')

@section('content')

<h1> Edit the school: </h1>

<hr/>

{!! Form::model($school, ['method'=>'PATCH', 'action'=> ['SchoolsController@update',$school->id]]) !!}
@include('schools.form',['submitbuttonname'=> 'Update school'])
{!! Form::close() !!}

@include('errors.list')

@endsection