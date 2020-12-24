@extends ('app')

@section ('content')
<div class='container'>
	<table class="table">
		<thread>
			<th>Job name</th>
			<th>Specialization</th>
			<th colspan="2">Action</th>
		</thread>
		<tbody>
			@foreach ($lists as $list)
			@if ($list->user_id==$xid)
			<tr>
				<td>{!! Html::linkRoute('lists.show', $list->name, $list->id) !!}</td>
				<td>{{ $list->specialization->sphere }}</td>
				<td>{!! Html::linkRoute('lists.edit', 'Edit', $list->id, array('class'=>'btn btn-default')) !!}</td>
				<td>
					{!! Form::open(array( 'route'=>array('lists.destroy', $list->id), 'method'=>'delete')) !!} 
					{!! Form::submit('Delete', array('class'=>'btn btin-default')) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>
@endsection

				