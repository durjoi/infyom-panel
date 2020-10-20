@extends('layouts.app')

@section('content')
	<section class="content-header">
		<h1>
			Avaliação Terapêutica
		</h1>
		
		<br>
	</section>
	<div class="content">
		@include('adminlte-templates::common.errors')
		<div class="box box-primary">
			<div class="box-body">
				<div class="row">
					{!! Form::open(['route' => 'iluminacaoPublicas.store', 'url' => 'submitEvalReport', 'method' => 'post']) !!}

						@include('iluminacao_publicas.fields')

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
