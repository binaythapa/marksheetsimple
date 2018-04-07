

<div class="form-group">

	{!! Form::label('name','Name:') !!}
	{!! Form::text('name', null, ['class'=>'form-control'] ) !!}

</div>	

<div class="form-group">

	{!! Form::label('address','Address:') !!}
	{!! Form::textarea('address', null, ['class'=> 'form-control'] ) !!}

</div>	

<div class="form-group">

	{!! Form::label('code','Code') !!}
	{!! Form::textarea('code', null, ['class'=> 'form-control'] ) !!}

</div>	

<div class="form-group">

	{!! Form::label('Published_at','Registered On:') !!}
	{!! Form::input('date', 'created_at', date('Y-m-d'), ['class'=>'form-control'] ) !!}

</div>	


<div class="form-group">


	{!! Form::submit($submitbuttonname, ['class'=> 'btn btn-primary form-control'] ) !!}

</div>	



