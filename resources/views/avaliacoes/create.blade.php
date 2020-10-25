@extends('layouts.app')

@section('content')
	<section class="content-header">
		<h1>
			Cronograma Avaliações e Reavaliações
		</h1>
		
		<br>
	</section>
	<div class="content">
		@include('adminlte-templates::common.errors')
		<div class="box box-primary">
			<div class="box-body">
				<div class="row">
					{!! Form::open(['url' => 'avaliacoes/insert', 'method' => 'post']) !!}

						@include('avaliacoes.fields')

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
