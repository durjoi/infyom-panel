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
					@include('avaliacoes.view_fields')
				</div>
			</div>
		</div>
	</div>
@endsection
