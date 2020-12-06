@extends('layouts.app')

@section('content')
	<section class="content-header">
		<br>
		<br>
		<h1 class="pull-left">
			Valores de Referência Power Breath
		</h1>
		<h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ url('power_breath/create') }}">Nova Entrada</a>
        </h1>
	</section>
	<br>
	<br>
	<form class="form-horizontal" method="POST" action="{{url('power_breath/delete')}}" id="delete_record_form" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div id="deleteRecordModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:20%;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" id="">Tem certeza que deseja deletar este registro?</h4>
						<input type="hidden" name="delete_record_id" id="delete_record_id">
						<input type="hidden" name="delete_patient_id" id="delete_patient_id">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger" name="confirm_delete" id="confirm_delete">Sim</button> 
						<button class="btn btn-success" data-dismiss="modal">Não</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<div class="content">
		<div class="clearfix"></div>

		<div class="clearfix"></div>
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Lista de informes</h3>
			</div>
			<div class="box-body">
				@section('css')
					@include('layouts.datatables_css')
				@endsection

				<table id="eval_table" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>NOME</th>
							<th>IDADE</th>
							<th>PESO</th>
							<th>ALTURA</th>
							<th>GÊNERO</th>
							<th style="width: 15%; text-align: center;">OPCIONES</th>
						</tr>
					</thead>
					<tbody>
						@foreach($result as $key => $value)
							<tr>
								<td>{{ $value['nome'] }}</td>
								<td>{{ $value['idade'] }}</td>
								<td>{{ $value['peso'] }}</td>
								<td>{{ $value['altura'] }}</td>
								<td>{{ $value['genero'] }}</td>
								<td style="text-align: center;">
									<a href="{{ url('power_breath/view/'.$value['id']) }}" class="btn btn-success" name="record_view" id="record_view">
										<i class="fa fa-eye"></i>
									</a>
									<a href="{{ url('power_breath/edit/'.$value['id']) }}" class="btn btn-primary" name="record_edit" id="record_edit">
										<i class="fa fa-pencil"></i>
									</a>
									<a class="btn btn-danger" name="record_delete" id="record_delete" patient_id="{{ $value['patient_id'] ?? '' }}" delete_id="{{ $value['id'] }}">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="text-center"></div>
	</div>
	@push('scripts')
		@include('layouts.datatables_js')
		<script type="text/javascript">
			$(document).ready(function() {
				$('#eval_table').DataTable();
			});

			$(document).on('click', '#record_delete', function() {
				$("#delete_record_id").val($(this).attr("delete_id"));
				$("#delete_patient_id").val($(this).attr("patient_id"));
				$('#deleteRecordModal').modal('toggle');
			});
		</script>
	@endpush
@endsection

