@extends ('app')

@section ('content')
<div class='container'>
	<h2>{{ $list->name }}</h2>
	<div>
		<p>Created on: {{ $list->created_at }}</p>
		<p>Last modified: {{ $list->updated_at }}</p>
		<p>Job name: {{ $list->name }}</p>
		<p>Location: {{ $list->location->address }}</p>
		<p>Specialization: {{ $list->specialization->sphere }}</p>
		<p>Work experience: {{ $list->work_experience->experience }}</p>
		<!--
		<td>{!! Html::linkRoute('lists.show', $list->name, $list->id) !!}</td>
								<li>{!! Html::linkRoute('getProfile', 'View Profile', Auth::user()->id) !!}</li>-->
		<p>Recruiter: {!! Html::linkRoute('getProfile', $list->user->name, $list->user->id) !!}</p>
		<p>Salary: {{ $list->salary }}</p>
		<p>Description: {{ $list->description }}</p>
		<p>Notes: {{ $list->notes }}</p>
	</div>
</div>
@endsection
