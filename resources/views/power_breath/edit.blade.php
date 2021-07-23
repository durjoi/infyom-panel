@extends('layouts.app')

@section('content')
	<section class="content-header">
		<h1>Power Breathe</h1>
		<br>
	</section>
	<div class="content">
		@include('adminlte-templates::common.errors')
		<div class="box box-primary">
			<div class="box-body">
				<div class="row">
					{!! Form::open(['url' => 'power_breath/update', 'method' => 'post']) !!}
						@include('power_breath.edit_fields')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
