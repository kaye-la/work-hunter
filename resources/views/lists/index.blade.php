@extends ('app')

@section ('content')
<div class='container'>

	<div class="row">
		<div class="col-3">
			<h3>FILTER PANEL</h3>
			<aside>
				<form action="/lists">
					<div class="form-group">
						<label for="name" class="from-control">Name</label>
						<input type="text"class="form-control" name="name">
					</div>
					<div class="form-group">
						<label for="specialization_filter" class="from-control">List of specializations</label>
						{!! Form::select('specialization_filter', $specialization, null) !!}
					</div>
						<button type="submit" class="btn btn-primary">Filter</button>	
				</form>
			</aside>
		</div>
	</div>
	<p></p>
	<table class="table">
		<thread>
			<th>Job name</th>
			<th>Specialization</th>
			@if (Auth::user()->is_admin != 1)
			<th colspan="3">Action</th>
			@endif
		</thread>
		<tbody>
			@foreach ($lists as $list)
			<tr>
				<td>{!! Html::linkRoute('lists.show', $list->name, $list->id) !!}</td>
				<td>{{ $list->specialization->sphere }}</td>
				@if (Auth::user()->is_recruiter)
					@if ($list->user_id==Auth::user()->id)
					<td>{!! Html::linkRoute('lists.edit', 'Edit', $list->id, array('class'=>'btn btn-default')) !!}</td>
					<td>
						{!! Form::open(array( 'route'=>array('lists.destroy', $list->id), 'method'=>'delete')) !!} 
						{!! Form::submit('Delete', array('class'=>'btn btin-default')) !!}
						{!! Form::close() !!}
					</td>
					@else
						<td></td>
						<td></td>
					@endif
				@elseif (Auth::user()->is_jobseeker)
					<td>{!! Html::linkRoute('lists.applications.create', 'Send application', $list->id, array('class'=>'btn btn-default')) !!}</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
