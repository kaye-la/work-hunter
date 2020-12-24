@extends ('app')

@section ('content')
<div class='container'>
	<h2>
		@if ($user->is_recruiter)
		Recruiter: 
		@else
		Job-seeker:
		@endif
		{{ $user->name }}</h2>
	<div>
		<!-- <p>Last modified: {{ $user->updated_at }}</p>-->
		<p>User name: {{ $user->name }}</p>
		<p>E-mail: {{ $user->email }}</p>
		<p>Mobile number: {{ $user->mobile_no }}</p>
		<p>Organization type: {{ $user->organization_type }}</p>
		<p>Organization name: {{ $user->organization_name }}</p>
		<p>Created on: {{ $user->created_at }}</p>
		@if (Auth::user()->id == $user->id)
		<tbody>
			<td>{!! Html::linkRoute('auth.edit', 'Edit', $user->id, array('class'=>'btn btn-default')) !!}</td>
		</tbody>
		@endif
	</div>
</div>
@endsection
