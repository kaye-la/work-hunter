@extends ('app')

@section('content')
<div class='container'>
  	{!! Form::open(array('route'=>'lists.store', 'class'=>'form'))!!}
 	
 	<div class='form-group'>
 		{!! Form::label('Vacancy name') !!}
 		{!! Form::text('name',
 				null, array(
 				'required',
				'class'=>'form-control',
				'placeholder'=>'Job Name'))
 		!!}
 	</div>

 	<div class='form-group'>
 		{!! Form::label('locations') !!}
 		{!! Form::select('location_id', $location, null,
 				array('class'=>'form-control'))
 		!!}
 	</div>

	<div class='form-group'>
 		{!! Form::label('List of specializations') !!}
 		{!! Form::select('specialization_id', $specialization, null,
 				array('class'=>'form-control'))
 		!!}
 	</div>

	<div class='form-group'>
 		{!! Form::label('List Work experience') !!}
 		{!! Form::select('work_experience_id', $work_experience, null,
 				array('class'=>'form-control'))
 		!!}
 	</div>
 	
 	<div class='form-group'>
 		{!! Form::label('Salary') !!}
 		{!! Form::textarea('salary', null,
 					array(
 						'required', 'class'=>'form-control',
 						'rows' => 2,
						'placeholder'=>'a few things about salary'))
 		!!}
	</div>

 	<div class='form-group'>
 		{!! Form::label('Description') !!}
 		{!! Form::textarea('description', null,
 					array(
 						'required', 'class'=>'form-control',
						'placeholder'=>'a few things to describe the job'))
 		!!}
	</div>

	<div class='form-group'>
 		{!! Form::label('Notes') !!}
 		{!! Form::textarea('notes', null,
 					array(
 						'class'=>'form-control',
 						'rows' => 4,
						'placeholder'=>'any other notes?'))
 		!!}
	</div>


 	<div class='form-group'>
		{!! Form::submit('Create Vacancy!',
 		array('class'=>'btn btn-primary'))
 		!!}
 	</div>
 	{!! Form::close() !!}
</div>
@endsection
