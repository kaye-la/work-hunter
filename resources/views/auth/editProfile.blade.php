@extends ('app')

@section ('content')

<div class='container'>
	{!! Form::model($user, array('route'=>array('auth.update',$user->id), 'method'=>'PUT', 'class'=>'form'))
	!!}
	<h2>Update Profile: {{ $user->name }}</h2>
	<div class='form-group'>
		{!! Form::label('Name') !!}
		{!! Form::text('name', null,
			array('required',
			'class'=>'form-control',
			'placeholder'=>'enter your name'))
		!!}
	</div>
	
 	<div class='form-group'>
 		{!! Form::label('Email') !!}
 		{!! Form::text('email', null,
			array('required',
			'class'=>'form-control',
			'placeholder'=>'enter your email'))
		!!}
 	</div>
	
	<div class='form-group'>
 		{!! Form::label('Mobile number') !!}
 		{!! Form::text('mobile_no', null,
			array('required',
			'class'=>'form-control',
			'placeholder'=>'enter your mobile number'))
		!!}
 	</div>

		
		<div class="form-group">
		{!! Form::label('organization_type', 'Your Organization Type (Your field of specialization, e.g Finance; Medical comp)') !!} 
		{!! Form::text('organization_type', null, array('class'=>'form-control', 'placeholder'=>'if you are job-seeker write "none" or skip it')) !!} 		
		</div>

		<div class="form-group">
		{!! Form::label('organization_name', 'Your Organization Name') !!} 
		{!! Form::text('organization_name', null, array('class'=>'form-control', 'placeholder'=>'if you are job-seeker write "none" or skip it')) !!} 		
		</div>

	<div class='form-group'>
		{!! Form::submit('Update Profile!', array('class'=>'btn btn-primary')) !!}
	</div>
	{!! Form::close() !!}
</div>
@endsection