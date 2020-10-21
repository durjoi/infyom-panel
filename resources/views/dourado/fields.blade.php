<div id="passo-1" style="display: block">
	<div class="form-group col-sm-6">
		<label for="nome">Nome</label>
		<select class="form-control" name="nome" id="nome">
			@foreach($result as $key => $value)
				<option value="{{ $value['id'] }}">{{ $value['nome'] }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group col-sm-6">
		<label for="idade">Idade</label>
		<input type="number" class="form-control" name="idade" id="idade">
	</div>

	<div class="form-group col-sm-6">
		<label for="peso">Peso</label>
		<input type="number" class="form-control" name="peso" id="peso">
	</div>

	<div class="form-group col-sm-6">
		<label for="altura">Altura(m)</label>
		<input type="number" class="form-control" name="altura" id="altura">
	</div>

	<div class="form-group col-sm-6">
		<label for="exampleInputAmount">Gênero (Mulher: 0; Homem: 1)</label>
		<div class="input-group">
			<div class="radio-inline">
				<label>
					<input type="radio" name="genero" id="mulher" value="0" checked>
					Mulher
				</label>
			</div>
			<div class="radio-inline">
				<label>
					<input type="radio" name="genero" id="homem" value="1">
					Homem
				</label>
			</div>
		</div>
	</div>

	<div class="form-group col-sm-6">
		<label for="distancia_predita">Distância predita</label>
		<input type="number" class="form-control" name="distancia_predita" id="distancia_predita">
	</div>

	<div class="form-group col-sm-6">
		<label for="distancia_obtida_no_teste">Distância obtida no teste</label>
		<input type="number" class="form-control" name="distancia_obtida_no_teste" id="distancia_obtida_no_teste">
	</div>

	<div class="form-group col-sm-6">
		<label for="percentual_do_predito">Percentual do predito</label>
		<div class="input-group">
			<input type="number" class="form-control" name="percentual_do_predito" id="percentual_do_predito">
			<div class="input-group-addon">%</div>
		</div>
	</div>

	<div class="form-group col-sm-6">
		<label for="velocidade_media_do_teste">Velocidade média do teste(m/min)</label>
		<input type="number" class="form-control" name="velocidade_media_do_teste" id="velocidade_media_do_teste">
	</div>

	<div class="form-group col-sm-6">
		<label for="velocidade_media">Velocidade média km/h</label>
		<input type="number" class="form-control" name="velocidade_media" id="velocidade_media">
	</div>

	<div class="form-group col-sm-12">
		<div style="float: right">
			<button class="btn btn-primary" type="submit" id="submit">Enviar <i class="fa fa-arrow-right"></i></button>
		</div>
	</div>
</div>
