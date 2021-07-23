@extends('layouts.app')

@section('content')
	<section class="content-header">
		<h1>
			Valor predito do teste de caminhada pela equação de DOURADO
		</h1>
		
		<br>
	</section>
	<div class="content">
		@include('adminlte-templates::common.errors')
		<div class="box box-primary">
			<div class="box-body">
				<div class="row">
					{!! Form::open(['url' => 'dourado/insert', 'method' => 'post']) !!}

						@include('dourado.fields')

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
