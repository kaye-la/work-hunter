@extends ('app')

@section ('content')
<div class='container'>
	<h2>Application #{{ $application->id }}:</h2>
	<div>
		<p>Job-seeker's name: {!! Html::linkRoute('getProfile', $application->user->name, $application->user->id) !!}</p>
		<p>Job-seeker's e-mail: {{ $application->email }}</p>
		<p>Vacancy: {!! Html::linkRoute('lists.show', $application->vacancy->name, $application->vacancy->id) !!}</p>
		<p>Motivation letter: {{ $application->motivation_letter }}</p>
		<p>Created on: {{ $application->created_at }}</p>
		<p>Application's status: {{ $application->status }}</p>
	</div>
</div>
@endsection
