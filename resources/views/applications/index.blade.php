@extends ('app')

@section ('content')
<div class='container'>
	<table class="table">
		<thread>
			<th>Application No.</th>
			<th>Vacancy name</th>
			<th>Job-seeker's name</th>
			<th>Job-seeker's e-mail</th>
		@if (Auth::user()->is_recruiter)	
			<th colspan="1">Action</th>
		@elseif (Auth::user()->is_jobseeker)	
			<th colspan="1">Application's status</th>
		@endif
		</thread>
		@if (Auth::user()->is_jobseeker)	
			<tbody>
				@foreach ($myapps as $application)
				@if ($application->user_id==$xid)
				<tr>
					<td>{!! Html::linkRoute('showApplication', $application->id, $application->id) !!}</td>
					<td>{!! Html::linkRoute('lists.show', $application->vacancy->name, $application->vacancy->id) !!}</td>
					<td>{{ $application->user->name }}</td>
					<td>{{ $application->email }}</td>
					<td>{{ $application->status }}</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		@elseif (Auth::user()->is_recruiter)
			<tbody>
				@foreach ($myapps as $application)
				@if ($application->vacancy->user_id==$xid)
				<tr>
					<td>{!! Html::linkRoute('showApplication', $application->id, $application->id) !!}</td>
					<td>{!! Html::linkRoute('lists.show', $application->vacancy->name, $application->vacancy->id) !!}</td>
					<td>{{ $application->user->name }}</td>
					<td>{{ $application->email }}</td>
					<td>{!! Html::linkRoute('editStatus', 'Change status/schedule interview', $application->id, array('class'=>'btn btn-default')) !!}</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		@elseif (Auth::user()->is_admin)
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
		@endif
	</table>
	<h2></h2>
</div>
@endsection