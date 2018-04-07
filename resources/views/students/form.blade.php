

<div class="form-group">

	{!! Form::label('first_name','Fisrt Name:') !!}
	{!! Form::text('first_name', null, ['class'=>'form-control'] ) !!}

</div>	

<div class="form-group">

	{!! Form::label('last_name','Last Name:') !!}
	{!! Form::text('last_name', null, ['class'=>'form-control'] ) !!}

</div>

<div class="form-group">

	{!! Form::label('address','Address:') !!}
	{!! Form::text('address', null, ['class'=> 'form-control'] ) !!}

</div>	

<div class="form-group">

	{!! Form::label('DOB','Date Of Birth:') !!}
	{!! Form::input('date', 'created_at', date('Y-m-d'), ['class'=>'form-control'] ) !!}

</div>	


<label for="gender"> Gender: </label>
<select name="gender">
	<option value="Male"> Male </option>
	<option value="Female"> Female </option>
</select>

<div class="form-group">
<label for="elect_1"> Elective I <label>
	@foreach($elect1s as $e)
	<input type="radio" name="elect_1" value="{{ $e->id}} " > {{ $e->name}}  
	@endforeach
</div>


	<div class="form-group" >

	<label for="elect_2"> Elective I <label>
	@foreach($elect1s as $e)
	<input type="radio" name="elect_2" value="{{ $e->id}} " > {{ $e->name}}  
	@endforeach
</div>

<div class="form-group">

	{!! Form::label('Published_at','Registered On:') !!}
	{!! Form::input('date', 'created_at', date('Y-m-d'), ['class'=>'form-control'] ) !!}

</div>	


<div class="form-group">


	{!! Form::submit($submitbuttonname, ['class'=> 'btn btn-primary form-control'] ) !!}

</div>	



