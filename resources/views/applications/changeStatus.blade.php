@extends ('app')

@section ('content')

<div align = "center" class='container'>
	<h2>Application #{{ $application->id }}:</h2>
	<div>
		<p>Job-seeker's name: {!! Html::linkRoute('getProfile', $application->user->name, $application->user->id) !!}</p>
		<p>Job-seeker's e-mail: {{ $application->email }}</p>
		<p>Vacancy: {!! Html::linkRoute('lists.show', $application->vacancy->name, $application->vacancy->id) !!}</p>
		<p>Motivation letter: {{ $application->motivation_letter }}</p>
		<p>Created on: {{ $application->created_at }}</p>
	</div>
</div>

<div class='container'>
	{!! Form::model($application, array('route'=>array('updateStatus', $application->id), 'method'=>'PUT', 'class'=>'form'))
	!!}
	<h2>Update Status:</h2>
	
	<div class='form-group'>
 		{!! Form::label('Status') !!}
 		{!! Form::textarea('status', null,
 					array(
 						'required', 'class'=>'form-control',
						'placeholder'=>'You can schedule an interview or change applications status'))
 		!!}
	</div>

	<div class='form-group'>
		{!! Form::submit('Update Status!', array('class'=>'btn btn-primary')) !!}
	</div>
	{!! Form::close() !!}
</div>

@endsection
