@extends ('app')

@section('content')
<div class='container'>
  	{!! Form::open(array('route'=>array('lists.applications.store', $vacancy->id), 'class'=>'form'))!!}
 	<table class="table">
		<thread>
			<th>Vacancy:</th>
		</thread>
		<tbody>
			<td>{!! Html::linkRoute('lists.show', $vacancy->name, $vacancy->id) !!}</td>
		</tbody>
	</table>
 	<div class='form-group'>
 		{!! Form::label('E-mail:') !!}
 		{!! Form::text('email',
 				null, array(
				'class'=>'form-control',
				'placeholder'=>'enter your email'))
 		!!}
 	</div>
	<div class='form-group'>
 		{!! Form::label('Motivation letter:') !!}
 		{!! Form::textarea('motivation_letter', null,
 					array(
 						'required', 'class'=>'form-control',
						'placeholder'=>'why should they hire YOU?'))
 		!!}
	</div>

 	<div class='form-group'>
		{!! Form::submit('Send application!',
 		array('class'=>'btn btn-primary'))
 		!!}
 	</div>
 	{!! Form::close() !!}
</div>
@endsection
