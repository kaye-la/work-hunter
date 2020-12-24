@extends ('app')

@section ('content')

<div class='container'>
	{!! Form::model($list, array('route'=>array('lists.update',$list->id), 'method'=>'PUT', 'class'=>'form'))
	!!}
	<h2>Update Vacancy: {{ $list->name }}</h2>
	<div class='form-group'>
		{!! Form::label('Job name') !!}
		{!! Form::text('name', null,
			array('required',
			'class'=>'form-control',
			'placeholder'=>'Job name'))
		!!}
	</div>
	
 	<div class='form-group'>
 		{!! Form::label('locations') !!}
 		{!! Form::select('location_id', $location, $list->location_id,
 				array('class'=>'form-control'))
 		!!}
 	</div>

	<div class='form-group'>
 		{!! Form::label('List of specializations') !!}
 		{!! Form::select('specialization_id', $specialization, $list->specialization_id,
 				array('class'=>'form-control'))
 		!!}
 	</div>

	<div class='form-group'>
 		{!! Form::label('List Work experience') !!}
 		{!! Form::select('work_experience_id', $work_experience, $list->work_experience_id,
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
		{!! Form::submit('Update Vacancy!', array('class'=>'btn btn-primary')) !!}
	</div>
	{!! Form::close() !!}
</div>
@endsection