<div id="passo-1" style="display: block">
	<div class="form-group col-sm-6">
		<label for="nome">NOME</label>
		<select class="form-control" name="nome" id="nome">
			@foreach($result as $key => $value)
				<option value="{{ $value['id'] }}">{{ $value['nome'] }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group col-sm-6">
		<label for="avaliacao">AVALIAÇÃO</label>
		<input type="text" class="form-control" name="avaliacao" id="avaliacao">
	</div>

	<div class="form-group col-sm-6">
		<label for="data">DATA</label>
		<input type="date" class="form-control" name="data" id="data">
	</div>

	<div class="form-group col-sm-6">
		<label for="profissional">PROFISSIONAL</label>
		<input type="text" class="form-control" name="profissional" id="profissional">
	</div>

	<div class="form-group col-sm-6">
		<label for="relatorio">RELATORIO</label>
		<input type="date" class="form-control" name="relatorio" id="relatorio">
	</div>

	<div class="form-group col-sm-6">
		<label for="enviado_res">ENVIADO RES.</label>
		<input type="date" class="form-control" name="enviado_res" id="enviado_res">
	</div>

	<div class="form-group col-sm-12">
		<div style="float: right">
			<button class="btn btn-primary" type="submit" id="submit">Enviar <i class="fa fa-arrow-right"></i></button>
		</div>
	</div>
</div>