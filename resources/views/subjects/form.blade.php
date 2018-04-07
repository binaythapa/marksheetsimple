<div class="form-group">

	{!! Form::label('code','Code') !!}
	{!! Form::text('code', null, ['class'=> 'form-control'] ) !!}

</div>	

<div class="form-group">

	{!! Form::label('name','Name:') !!}
	{!! Form::text('name', null, ['class'=>'form-control'] ) !!}

</div>	

<div class="form-group">

<label for="type"> Type: </label>
<select class="" name="type">
<option vlaue="COMPULSORY"> Compulsory </option>
<option value="ELECTIVE I"> Elective I</option>
<option vlaue="ELECTIVE II"> Elective II </option>

</select>


</div>

<div class="form-group">

	{!! Form::label('full_marks','Full Marks:') !!}
	{!! Form::text('full_marks', null, ['class'=>'form-control'] ) !!}

</div>	

<div class="form-group">

	{!! Form::label('pass_marks','Pass Marks:') !!}
	{!! Form::text('pass_marks', null, ['class'=>'form-control'] ) !!}

</div>	



<div class="form-group">

	{!! Form::label('Published_at','Registered On:') !!}
	{!! Form::input('date', 'created_at', date('Y-m-d'), ['class'=>'form-control'] ) !!}

</div>	


<div class="form-group">


	{!! Form::submit($submitbuttonname, ['class'=> 'btn btn-primary form-control'] ) !!}

</div>	



