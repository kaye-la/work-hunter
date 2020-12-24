@extends('app')

@section('content')

<div align ="center" class = "col-md-6">
	{!! Form::open(array('route' => 'postRegister', 'class' => 'form')) !!}

		<h1>Create an Account</h1>

		@if (count($errors) > 0)

			<div class="alert alert-danger">
				There were some problems creating an account:
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		
		@endif

		<div class="form-group">
		{!! Form::label('name', 'Your Name') !!}
		{!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'enter name')) !!}
		</div>

		<div class="form-group">
		{!! Form::label('email', 'Your E-mail Address') !!} 
		{!! Form::text('email', null, array('required', 'class'=>'form-control', 'placeholder'=>'enter email')) !!} 		
		</div>

		<div class="form-group">
		{!! Form::label('mobile_no', 'Your Mobile number') !!} 
		{!! Form::text('mobile_no', null, array('required', 'class'=>'form-control', 'placeholder'=>'enter mobile no')) !!} 		
		</div>

		<div class="form-group">
		{!! Form::label('type_user', 'Recruiter or Job-seeker? Choose') !!} 
		{!! Form::select('type_user', array('recruiter' => 'Recruiter', 'jobseeker' => 'Job-seeker')); !!}
		</div>

		<div class="form-group">
		{!! Form::label('organization_type', 'Your Organization Type (Your field of specialization, e.g Finance; Medical comp)') !!} 
		{!! Form::text('organization_type', null, array('class'=>'form-control', 'placeholder'=>'if you are job-seeker write "none" or skip it')) !!} 		
		</div>

		<div class="form-group">
		{!! Form::label('organization_name', 'Your Organization Name') !!} 
		{!! Form::text('organization_name', null, array('class'=>'form-control', 'placeholder'=>'if you are job-seeker write "none" or skip it')) !!} 		
		</div>

		<div class="form-group">
		    {!! Form::label('Your Password') !!}
		    {!! Form::password('password', array('required', 'class'=>'form-control', 'placeholder'=>'Password')) !!} 
		</div> 
		
		<div class="form-group">
		    {!! Form::label('Confirm Password') !!}
		    {!! Form::password('password_confirmation', array('required', 'class'=>'form-control', 'placeholder'=>'Confirm Password')) !!} 
		</div>

		<div class="form-group">
		    {!! Form::submit('Create My Account!', array('class'=>'btn btn-primary')) !!} 
		</div>

	{!! Form::close() !!}
</div>

@endsection
