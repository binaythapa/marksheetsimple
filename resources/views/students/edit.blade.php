@extends('layouts.app')

@section('content')

<h1> Edit the student: </h1>

<hr/>

{!! Form::model($student, ['method'=>'PATCH', 'action'=> ['studentsController@update',$student->id]]) !!}
@include('students.form',['submitbuttonname'=> 'Update student'])
{!! Form::close() !!}

@include('errors.list')

@endsection