<div id="passo-1" style="display: block">
	<input type="hidden" value="{{ $result[0]->id }}" name="id">
	<div class="form-group col-sm-12">
		<label for="idade">NOME</label>
		<select class="form-control" name="nome" id="nome" disabled>
			<option value="{{ $result[0]->nome }}">{{ $result[0]->nome }}</option>
		</select>
	</div>
	<div class="form-group col-sm-3">
		<label for="idade">IDADE (anos)</label>
		<input type="number" class="form-control" value="{{ $result[0]->idade }}" name="idade" id="idade">
	</div>
	<div class="form-group col-sm-3">
		<label for="peso">PESO (Kg)</label>
		<input type="number" class="form-control" value="{{ $result[0]->peso }}" name="peso" id="peso">
	</div>
	<div class="form-group col-sm-3">
		<label for="altura">ALTURA (cm)</label>
		<input type="number" class="form-control" value="{{ $result[0]->altura }}" name="altura" id="altura">
	</div>
	<div class="form-group col-sm-3">
		<label for="genero">GÊNERO (M=1 F=0)</label>
		<input type="number" class="form-control" value="{{ $result[0]->genero }}" name="genero" id="genero">
	</div>

	<div class="form-group col-sm-6">
		<label for="quadríceps">Pico de Torque Quadríceps</label>
		<input type="number" class="form-control" value="{{ $result[0]->quadríceps }}" name="quadríceps" id="quadríceps">
	</div>

	<div class="form-group col-sm-3">
		<label for="quadríceps_valor_obtido">Valor Obtido</label>
		<input type="number" class="form-control" value="{{ $result[0]->quadríceps_valor_obtido }}" name="quadríceps_valor_obtido" id="quadríceps_valor_obtido">
	</div>

	<div class="form-group col-sm-3">
		<label for="quadríceps_predito">%Predito</label>
		<div class="input-group" >
			<input type="number" class="form-control" value="{{ $result[0]->quadríceps_predito }}" name="quadríceps_predito" id="quadríceps_predito">
			<div class="input-group-addon">%</div >
		</div>
	</div>

	<div class="form-group col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<label>Volume Pulmonar</label>
			</div>
			<div class="panel-body">
				<div>
					<div class="form-group col-sm-3">
						<label>Masculino</label>
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->pulmonar_m }}" name="pulmonar_m" id="pulmonar_m">
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->pulmonar_m_valor_obtido }}" name="pulmonar_m_valor_obtido" id="pulmonar_m_valor_obtido">
					</div>
					<div class="form-group col-sm-3">
						<div class="input-group" >
							<input type="number" class="form-control" value="{{ $result[0]->pulmonar_m_predito }}" name="pulmonar_m_predito" id="pulmonar_m_predito">
							<div class="input-group-addon">%</div >
						</div>
					</div>
				</div>
				<div>
					<div class="form-group col-sm-3">
						<label>Feminino</label>
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->pulmonar_f }}" name="pulmonar_f" id="pulmonar_f">
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->pulmonar_f_valor_obtido }}" name="pulmonar_f_valor_obtido" id="pulmonar_f_valor_obtido">
					</div>
					<div class="form-group col-sm-3">
						<div class="input-group" >
							<input type="number" class="form-control" value="{{ $result[0]->pulmonar_f_predito }}" name="pulmonar_f_predito" id="pulmonar_f_predito">
							<div class="input-group-addon">%</div >
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<label>Pereira et al, Novos valores de espirometria forçada em brasileiros adultos de raça branca J Bras Pneumol, 2007</label>
			</div>
		</div>
	</div>

	<div class="form-group col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<label>Força Muscular Inspiratoria</label>
			</div>
			<div class="panel-body">
				<div>
					<div class="form-group col-sm-3">
						<label>Masculino</label>
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->inspiratoria_m }}" name="inspiratoria_m" id="inspiratoria_m">
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->inspiratoria_m_valor_obtido }}" name="inspiratoria_m_valor_obtido" id="inspiratoria_m_valor_obtido">
					</div>
					<div class="form-group col-sm-3">
						<div class="input-group" >
							<input type="number" class="form-control" value="{{ $result[0]->inspiratoria_m_predito }}" name="inspiratoria_m_predito" id="inspiratoria_m_predito">
							<div class="input-group-addon">%</div >
						</div>
					</div>
				</div>
				<div>
					<div class="form-group col-sm-3">
						<label>Feminino</label>
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->inspiratoria_f }}" name="inspiratoria_f" id="inspiratoria_f">
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->inspiratoria_f_valor_obtido }}" name="inspiratoria_f_valor_obtido" id="inspiratoria_f_valor_obtido">
					</div>
					<div class="form-group col-sm-3">
						<div class="input-group" >
							<input type="number" class="form-control" value="{{ $result[0]->inspiratoria_f_predito }}" name="inspiratoria_f_predito" id="inspiratoria_f_predito">
							<div class="input-group-addon">%</div >
						</div>
					</div>
				</div>
			</div>
			<div class="panel-heading">
				<label>Força Muscular Expiratoria</label>
			</div>
			<div class="panel-body">
				<div>
					<div class="form-group col-sm-3">
						<label>Masculino</label>
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->expiratoria_m }}" name="expiratoria_m" id="expiratoria_m">
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->expiratoria_m_valor_obtido }}" name="expiratoria_m_valor_obtido" id="expiratoria_m_valor_obtido">
					</div>
					<div class="form-group col-sm-3">
						<div class="input-group" >
							<input type="number" class="form-control" value="{{ $result[0]->expiratoria_m_predito }}" name="expiratoria_m_predito" id="expiratoria_m_predito">
							<div class="input-group-addon">%</div >
						</div>
					</div>
				</div>
				<div>
					<div class="form-group col-sm-3">
						<label>Feminino</label>
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->expiratoria_f }}" name="expiratoria_f" id="expiratoria_f">
					</div>
					<div class="form-group col-sm-3">
						<input type="number" class="form-control" value="{{ $result[0]->expiratoria_f_valor_obtido }}" name="expiratoria_f_valor_obtido" id="expiratoria_f_valor_obtido">
					</div>
					<div class="form-group col-sm-3">
						<div class="input-group" >
							<input type="number" class="form-control" value="{{ $result[0]->expiratoria_f_predito }}" name="expiratoria_f_predito" id="expiratoria_f_predito">
							<div class="input-group-addon">%</div >
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<label>COSTA et al, Novos valores de referência  para pressões  respiratorias máximas na população brasileira: correções, J Bras Pneumol, 2017</label>
			</div>
		</div>
	</div>

	<div class="form-group col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<label>VVM - Ventilação voluntaria maxima//VEF1</label>
			</div>
			<div class="panel-body">
				<div>
					<div class="form-group col-sm-3">
						<label for="vef1_1">VEF1</label>
					</div>
					<div class="form-group col-sm-2">
						<input type="number" class="form-control" value="{{ $result[0]->vef1_1 }}" name="vef1_1" id="vef1_1">
					</div>
					<div class="form-group col-sm-3">
						<label for="predito_h">Valor predito (H)</label>
					</div>
					<div class="form-group col-sm-2">
						<input type="number" class="form-control" value="{{ $result[0]->predito_h }}" name="predito_h" id="predito_h">
					</div>
					<div class="form-group">
						
					</div>
					<div class="form-group col-sm-2">
						<div class="input-group" >
							<input type="number" class="form-control" value="{{ $result[0]->vef1_1_predito }}" name="vef1_1_predito" id="vef1_1_predito" placeholder="%Predito">
							<div class="input-group-addon">%</div >
						</div>
					</div>
				</div>
				<div>
					<div class="form-group col-sm-3">
						<label for="vef1_2">VEF1</label>
					</div>
					<div class="form-group col-sm-2">
						<input type="number" class="form-control" value="{{ $result[0]->vef1_2 }}" name="vef1_2" id="vef1_2">
					</div>
					<div class="form-group col-sm-3">
						<label for="predito_m">Valor predito (M)</label>
					</div>
					<div class="form-group col-sm-2">
						<input type="number" class="form-control" value="{{ $result[0]->predito_m }}" name="predito_m" id="predito_m">
					</div>
					<div class="form-group col-sm-2">
						<div class="input-group" >
							<input type="number" class="form-control" value="{{ $result[0]->vef1_2_predito }}" name="vef1_2_predito" id="vef1_2_predito" placeholder="%Predito">
							<div class="input-group-addon">%</div >
						</div>
					</div>
				</div>
			</div>

			<div class="panel-body">
				<div>
					<div class="form-group col-sm-3">
						<label for="estimado_h">VVM 1' estimado (H)</label>
					</div>
					<div class="form-group col-sm-2">
						<input type="number" class="form-control" value="{{ $result[0]->estimado_h }}" name="estimado_h" id="estimado_h">
					</div>
					<div class="form-group col-sm-3">
						<label for="vvm_1">VVM 1'</label>
					</div>
					<div class="form-group col-sm-2">
						<input type="number" class="form-control" value="{{ $result[0]->vvm_1 }}" name="vvm_1" id="vvm_1">
					</div>
					<div class="form-group col-sm-2">
						<input type="number" class="form-control" value="{{ $result[0]->limite_predito }}" name="limite_predito" id="limite_predito" placeholder="Limite inferior">
					</div>
				</div>
				<div>
					<div class="form-group col-sm-3">
						<label for="vvm_15">VVM 15"</label>
					</div>
					<div class="form-group col-sm-2">
						<input type="number" class="form-control" value="{{ $result[0]->vvm_15 }}" name="vvm_15" id="vvm_15">
					</div>
					<div class="form-group col-sm-3">
						<label for="avaliado">VVM 15" avaliado</label>
					</div>
					<div class="form-group col-sm-2">
						<input type="number" class="form-control" value="{{ $result[0]->avaliado }}" name="avaliado" id="avaliado">
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<label for="genero">Pereira et al, Novos valores de espirometria forçada em brasileiros adultos de ra</label>
			</div>
		</div>
	</div>
	<div class="form-group col-sm-12">
		<div style="float: right">
			<button class="btn btn-primary" type="submit" id="submit">Enviar <i class="fa fa-arrow-right"></i></button>
		</div>
	</div>
</div>