@extends ('app')

@section ('content')
<div class='container'>
	<table class="table">
		<thread>
			<th>Application No.</th>
			<th>Vacancy name</th>
			<th>Job-seeker's name</th>
			<th>Job-seeker's e-mail</th>
		</thread>
		<tbody>
			@foreach ($myapps as $application)
			<tr>
				<td>{!! Html::linkRoute('showApplication', $application->id, $application->id) !!}</td>
				<td>{!! Html::linkRoute('lists.show', $application->vacancy->name, $application->vacancy->id) !!}</td>
				<td>{{ $application->user->name }}</td>
				<td>{{ $application->email }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<h2>You cannot edit or delete your submitted application!</h2>
</div>
@endsection
