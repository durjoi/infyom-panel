<div id="passo-1" style="display: block">
	<input type="hidden" value="{{ $result[0]->id }}" name="id">
	<div class="form-group col-sm-6">
		<label for="nome">NOME</label>
		<select class="form-control" name="nome" id="nome" disabled>
			<option>{{ $result[0]->nome }}</option>
		</select>
	</div>

	<div class="form-group col-sm-6">
		<label for="avaliacao">AVALIAÇÃO</label>
		<input type="text" class="form-control" name="avaliacao" id="avaliacao" value="{{ $result[0]->avaliacao }}">
	</div>

	<div class="form-group col-sm-6">
		<label for="data">DATA</label>
		<input type="date" class="form-control" name="data" id="data" value="{{ $result[0]->data }}">
	</div>

	<div class="form-group col-sm-6">
		<label for="profissional">PROFISSIONAL</label>
		<input type="text" class="form-control" name="profissional" id="profissional" value="{{ $result[0]->profissional }}">
	</div>

	<div class="form-group col-sm-6">
		<label for="relatorio">RELATORIO</label>
		<input type="text" class="form-control" name="relatorio" id="relatorio" value="{{ $result[0]->relatorio }}">
	</div>

	<div class="form-group col-sm-6">
		<label for="enviado_res">ENVIADO RES.</label>
		<input type="date" class="form-control" name="enviado_res" id="enviado_res" value="{{ $result[0]->enviado_res }}">
	</div>

	<div class="form-group col-sm-12">
		<div style="float: right">
			<button class="btn btn-primary" type="submit" id="submit">Enviar <i class="fa fa-arrow-right"></i></button>
		</div>
	</div>
</div>