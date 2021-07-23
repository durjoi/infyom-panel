<div id="passo-1" style="display: block">
	<input type="hidden" value="{{ $result[0]->id }}" name="id">
	<div class="form-group col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body">
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
						<input type="date" class="form-control" name="relatorio" id="relatorio" value="{{ $result[0]->relatorio }}">
					</div>

					<div class="form-group col-sm-6">
						<label for="enviado_res">ENVIADO RES.</label>
						<input type="date" class="form-control" name="enviado_res" id="enviado_res" value="{{ $result[0]->enviado_res }}">
					</div>
				</div>
			</div>
		</div>
	</div>

	@if($result[0]->times_visited)
		@for($i = 1; $i < $result[0]->times_visited; $i++)
			<div class="form-group col-sm-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="form-group col-sm-6">
							<label for="<?php echo 'avaliacao_'.$i; ?>"><?php echo $i;?> RE - AVALIAÇÃO</label>
							<input type="text" class="form-control" name="<?php echo 'avaliacao_'.$i; ?>" id="<?php echo 'avaliacao_'.$i; ?>" value="<?php $av = 'avaliacao_'.($i); echo $result[0]->{$av}; ?>">
						</div>

						<div class="form-group col-sm-6">
							<label for="<?php echo 'data_'.$i; ?>">DATA</label>
							<input type="date" class="form-control" name="<?php echo 'data_'.$i; ?>" id="<?php echo 'data_'.$i; ?>" value="<?php $dt = 'data_'.($i); echo $result[0]->{$dt}; ?>">
						</div>

						<div class="form-group col-sm-6">
							<label for="<?php echo 'profissional_'.$i; ?>">PROFISSIONAL</label>
							<input type="text" class="form-control" name="<?php echo 'profissional_'.$i; ?>" id="<?php echo 'profissional_'.$i; ?>" value="<?php $pl = 'profissional_'.($i); echo $result[0]->{$pl}; ?>">
						</div>

						<div class="form-group col-sm-6">
							<label for="<?php echo 'relatorio_'.$i; ?>">RELATORIO</label>
							<input type="date" class="form-control" name="<?php echo 'relatorio_'.$i; ?>" id="<?php echo 'relatorio_'.$i; ?>" value="<?php $rt = 'relatorio_'.($i); echo $result[0]->{$rt}; ?>">
						</div>

						<div class="form-group col-sm-6">
							<label for="<?php echo 'enviado_res_'.$i; ?>">ENVIADO RES.</label>
							<input type="date" class="form-control" name="<?php echo 'enviado_res_'.$i; ?>" id="<?php echo 'enviado_res_'.$i; ?>" value="<?php $er = 'enviado_res_'.($i); echo $result[0]->{$er}; ?>">
						</div>
					</div>
				</div>
			</div>
		@endfor
	@endif
	<div class="form-group col-sm-12">
		<div style="float: right">
			<button class="btn btn-primary" type="submit" id="submit">Enviar <i class="fa fa-arrow-right"></i></button>
		</div>
	</div>
</div>