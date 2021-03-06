<div id="passo-1" style="display: block">
  <input type="hidden" value="{{ $result[0]->id }}" name="id">
  <div class="form-group col-sm-6">
    <label>NOME DO PACIENTE</label>
    <input type="text" class="form-control" name="name_patient" value="{{ $result[0]->name_patient }}" >
  </div>

  <div class="form-group col-sm-6">
    <label>REGISTRO</label>
    <input type="text" class="form-control" name="record" value="{{ $result[0]->record }}" >
  </div>

  <div class="form-group col-sm-6">
    <label>NOME DO CUIDADOR / RESPONSÁVEL</label>
    <input type="text" class="form-control" name="name_of_caregiver_guardian" value="{{ $result[0]->name_of_caregiver_guardian }}" >
  </div>

  <div class="form-group col-sm-6">
    <label>DATA DE NASCIMENTO</label>
    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{ $result[0]->date_of_birth }}" onfocusout="myFunction()">
  </div>

  <div class="form-group col-sm-6">
    <label>IDADE</label>
    <input type="text" class="form-control" name="age" id="age" value="{{ $result[0]->age }}" readonly>
  </div>

  <script type="text/javascript">
    function myFunction() {
      dob = new Date(document.getElementById("date_of_birth").value)
      dob = dob.getFullYear()
      var age = "";
      var today = new Date();
      age = today.getFullYear() - dob;
      if (!isNaN(age)) {
        $('#age').val(age);
      } else {
        $('#age').val("");
      }
    }
  </script>

  <div class="form-group col-sm-6">
    <label>SEXO</label>
    <br>
    Masculino
    <input type="radio" name="sex" value="Masculino" {{$result[0]->sex == "Masculino" ? "checked" : ""}}> 
    Feminino
    <input type="radio" name="sex" value="Feminino" {{$result[0]->sex == "Feminino" ? "checked" : ""}} >

  </div>

  <div class="form-group col-sm-6">
    <label>DATA E HORARIO DA AVALIAÇÃO</label>
    <input type="datetime-local" class="form-control" name="assessment_date_and_time" value="{{ $result[0]->assessment_date_and_time }}" >
  </div>

  <div class="form-group col-sm-6">
    <label>PROFISSIONAL PULSAR RESPONSÁVEL</label>
    <input type="text" class="form-control" name="responsible_pulsar_professional" value="{{ $result[0]->responsible_pulsar_professional }}" >
  </div>

  <div class="form-group col-sm-6">
    <label>MÉDICO(S) ASSISTENTE(S)</label>
    <input type="text" class="form-control" name="assistant_physician_name_specialty" value="{{ $result[0]->assistant_physician_name_specialty }}" >
  </div>

  <div class="form-group col-sm-12">
    <label>NOME/ESPECIALIDADE</label>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-3" colspan="2">Preencher nome e sobrenome do profissional/ especialidade</th>
          <th class="col-md-3">TELEFONE</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><label>1</label></td>
          <td><input type="text" class="form-control" name="first_last_1" value="{{ $result[0]->first_last_1 }}" ></td>
          <td><input type="number" class="form-control" name="telephone_1" value="{{ $result[0]->telephone_1 }}" ></td>
        </tr>
        <tr>
          <td><label>2</label></td>
          <td><input type="text" class="form-control" name="first_last_2" value="{{ $result[0]->first_last_2 }}" ></td>
          <td><input type="number" class="form-control" name="telephone_2" value="{{ $result[0]->telephone_2 }}" ></td>
        </tr>
        <tr>
          <td><label>3</label></td>
          <td><input type="text" class="form-control" name="first_last_3" value="{{ $result[0]->first_last_3 }}" ></td>
          <td><input type="number" class="form-control" name="telephone_3" value="{{ $result[0]->telephone_3 }}" ></td>
        </tr>
        <tr>
          <td><label>4</label></td>
          <td><input type="text" class="form-control" name="first_last_4" value="{{ $result[0]->first_last_4 }}" ></td>
          <td><input type="number" class="form-control" name="telephone_4" value="{{ $result[0]->telephone_4 }}" ></td>
        </tr>
        <tr>
          <td><label>5</label></td>
          <td><input type="text" class="form-control" name="first_last_5" value="{{ $result[0]->first_last_5 }}" ></td>
          <td><input type="number" class="form-control" name="telephone_5" value="{{ $result[0]->telephone_5 }}" ></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group col-sm-12">
    <div style="float: right">
      <a class="btn btn-primary" onclick="$('#passo-1').css('display', 'none'); $('#passo-2').css('display', 'block'); window.scrollTo(0, 0);">Próximo <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<div id="passo-2" style="display: none">

  <div class="form-group col-sm-8">
    <label>ESTRATIFICAÇÃO DE RISCO CARDIOVASCULAR PARA ATIVIDADE FISICA</label>
    <select class="form-control" id="cardiovascular" name="cardiovascular" >
      <option name="low" {{ ($result[0]->cardiovascular=="Baixo")? "selected" : "" }} value="Baixo">Baixo</option>
      <option name="moderate" {{ ($result[0]->cardiovascular=="Moderado")? "selected" : "" }} value="Moderado">Moderado</option>
      <option name="high" {{ ($result[0]->cardiovascular=="Alto")? "selected" : "" }} value="Alto">Alto</option>
      <option name="very_high" {{ ($result[0]->cardiovascular=="Muito alto")? "selected" : "" }} value="Muito alto">Muito alto</option>
    </select>
  </div>

  <div class="form-group col-sm-12">
    <label>PATOLOGIAS</label>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-2">PROBLEMA PRIMÁRIO</th>
          <th class="col-md-2">CO-MORBIDADES</th>
          <th class="col-md-2">PROBLEMAS CLINICO-SOCIAIS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><textarea class="form-control" style="resize: none;" name="primary_problem" >{{ $result[0]->primary_problem }}</textarea></td>
          <td><textarea class="form-control" style="resize: none;" name="co_morbidities" >{{ $result[0]->co_morbidities }}</textarea></td>
          <td><textarea class="form-control" style="resize: none;" name="clinical_and_social_problems" >{{ $result[0]->clinical_and_social_problems }}</textarea></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group col-sm-12">
    <label>SINAIS VITAIS (BASAL)</label>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-2">FC</th>
          <th class="col-md-2">PA</th>
          <th class="col-md-2">SPO2</th>
          <th class="col-md-2">BORG AO REPOUSO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><textarea class="form-control" style="resize: none;" name="fc" >{{ $result[0]->fc }}</textarea></td>
          <td><textarea class="form-control" style="resize: none;" name="pa" >{{ $result[0]->pa }}</textarea></td>
          <td><textarea class="form-control" style="resize: none;" name="spo2" >{{ $result[0]->spo2 }}</textarea></td>
          <td><textarea class="form-control" style="resize: none;" name="borg_at_rest" >{{ $result[0]->borg_at_rest }}</textarea></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group col-sm-12">
    <div style="float: left">
      <a class="btn btn-primary" onclick="$('#passo-2').css('display', 'none'); $('#passo-1').css('display', 'block'); window.scrollTo(0, 0);"><i class="fa fa-arrow-left"></i> Previo</a>
    </div>
    <div style="float: right">
      <a class="btn btn-primary" onclick="$('#passo-2').css('display', 'none'); $('#passo-3').css('display', 'block'); window.scrollTo(0, 0);">Próximo <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<div id="passo-3" style="display: none">

  <div class="form-group col-sm-12">
    <label>BIOIMPEDANCIOMETRIA</label>
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td><label>PESO (kg)</label></td>
          <td><input type="number" class="form-control" name="weight" value="{{ $result[0]->weight }}" ></td>
          <td><label>GORDURA CORPORAL (%)</label></td>
          <td><input type="number" class="form-control" name="body_fat" value="{{ $result[0]->body_fat }}" ></td>
        </tr>
        <tr>
          <td><label>IMC</label></td>
          <td><input type="number" class="form-control" name="bmi" value="{{ $result[0]->bmi }}" ></td>
          <td><label>MASSA MUSCULAR (%)</label></td>
          <td><input type="number" class="form-control" name="muscle_mass" value="{{ $result[0]->muscle_mass }}" ></td>
        </tr>
        <tr>
          <td><label>TAXA METABOLICA (kcal)</label></td>
          <td><input type="number" class="form-control" name="metabolic_rate" value="{{ $result[0]->metabolic_rate }}" ></td>
          <td><label>GORD. VISCERAL</label></td>
          <td><input type="number" class="form-control" name="gord_viscerel" value="{{ $result[0]->gord_viscerel }}" ></td>
        </tr>
        <tr>
          <td><label>IDADE METABOLICA</label></td>
          <td><input type="number" class="form-control" name="metabolic_age" value="{{ $result[0]->metabolic_age }}" ></td>
          <td><label>ALTURA</label></td>
          <td><input type="number" class="form-control" name="height" value="{{ $result[0]->height }}" ></td>
        </tr>
      </tbody>
    </table>
  </div>



  <div class="form-group col-sm-12">
    <label>AVALIAÇÃO RESPIRATÓRIA</label>
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td><label>RITMO E SENSAÇÃO</label></td>
          <td><input type="number" class="form-control" name="rhythm_and_sensation" value="{{ $result[0]->rhythm_and_sensation }}" ></td>
          <td><label>PADRÃO MUSCULAR</label></td>
          <td><input type="number" class="form-control" name="muscle_pattern" value="{{ $result[0]->muscle_pattern }}" ></td>
        </tr>
        <tr>
          <td><label>AUSCULTA PULMONAR</label></td>
          <td><input type="number" class="form-control" name="pulmonary_auscultation" value="{{ $result[0]->pulmonary_auscultation }}" ></td>
          <td><label>EXPANSIBILIDADE</label></td>
          <td><input type="number" class="form-control" name="expandability" value="{{ $result[0]->expandability }}" ></td>
        </tr>
        <tr>
          <td><label>SECREÇÃO</label></td>
          <td><input type="number" class="form-control" name="secretion" value="{{ $result[0]->secretion }}" ></td>
          <td><label>TOSSE</label></td>
          <td><input type="number" class="form-control" name="cough" value="{{ $result[0]->cough }}" ></td>
        </tr>
        <tr>
          <td><label>
            ABDOME
            <ol>
              <li>Inspeção</li>
              <li>Circunferência</li>
            </ol>
          </label></td>
          <td>
            <ul class="list-unstyled">
              <li><input type="number" class="form-control" name="abdomen_inspection" value="{{ $result[0]->abdomen_inspection }}" ></li>
              <li><input type="number" class="form-control" name="circumference" value="{{ $result[0]->circumference }}" ></li>
            </ul>
          </td>
          <td><label>VEF1/CVF</label></td>
          <td><input type="number" class="form-control" name="vef1_cvf" value="{{ $result[0]->vef1_cvf }}" ></td>
        </tr>
        <tr>
          <td><label>CAPACIDADE VITAL LENTA</label></td>
          <td><input type="number" class="form-control" name="slow_vital_capacity" value="{{ $result[0]->slow_vital_capacity }}" ></td>
          <td><label>PFE/ VEF1</label></td>
          <td><input type="number" class="form-control" name="pfe_vef1" value="{{ $result[0]->pfe_vef1 }}" ></td>
        </tr>
        <tr>
          <td><label>CAPACIDADE VITAL FORÇADA</label></td>
          <td><input type="number" class="form-control" name="forced_vital_capacity" value="{{ $result[0]->forced_vital_capacity }}" ></td>
          <td><label>VVM</label></td>
          <td><input type="number" class="form-control" name="vvm" value="{{ $result[0]->vvm }}" ></td>
        </tr>
        <tr>
          <td><label>SINDEX/PIMAX</label></td>
          <td><input type="number" class="form-control" name="sindex_pimax" value="{{ $result[0]->sindex_pimax }}" ></td>
          <td><label>PFI (K5)</label></td>
          <td><input type="number" class="form-control" name="pfi" value="{{ $result[0]->pfi }}" ></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group col-sm-12">
    <div style="float: left">
      <a class="btn btn-primary" onclick="$('#passo-3').css('display', 'none'); $('#passo-2').css('display', 'block'); window.scrollTo(0, 0);"><i class="fa fa-arrow-left"></i> Previo</a>
    </div>
    <div style="float: right">
      <a class="btn btn-primary" onclick="$('#passo-3').css('display', 'none'); $('#passo-4').css('display', 'block'); window.scrollTo(0, 0);">Próximo <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<div id="passo-4" style="display: none">

  <div class="form-group col-sm-12">
    <label>HISTÓRIA CLÍNICO-FUNCIONAL</label>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-2">Data</th>
          <th class="col-md-2">Cronologia dos acontecimentos</th>
          <th class="col-md-2">Medicações em uso</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="date" class="form-control" name="clinical_functional_history_datedate" value="{{ $result[0]->clinical_functional_history_datedate }}" ></td>
          <td><textarea style="resize: none;" class="form-control" name="chronology_of_events" >{{ $result[0]->chronology_of_events }}</textarea></td>
          <td><textarea style="resize: none;" class="form-control" name="medications_in_use" >{{ $result[0]->medications_in_use }}</textarea></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group col-sm-8">
    <label>SUPORTE VENTILATÓRIO/OXIGENOTERAPIA</label>
    <select class="form-control" id="oxygen_therapy" name="oxygen_therapy" >
      <option name="intermittent" {{ ($result[0]->oxygen_therapy=="Intermitente")? "selected" : "" }} value="Intermitente">Intermitente</option>
      <option name="persistent" {{ ($result[0]->oxygen_therapy=="Persistente")? "selected" : "" }} value="Persistente">Persistente</option>
      <option name="night" {{ ($result[0]->oxygen_therapy=="Noturno")? "selected" : "" }} value="Noturno">Noturno</option>
    </select>
  </div>


  <div class="form-group col-md-12">

    <label>ACOMPANHAMENTO FISIOTERAPÊUTICO</label>
  </div>

  <div class="form-group col-md-8">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-2" colspan="3" style="text-align: center;">MRC – FORÇA MUSCULAR PERIFÉRICA</th> 
        </tr>
        <tr>
          <th class="col-md-2">Movimento</th>
          <th class="col-md-2" style="text-align: center;">D</th>
          <th class="col-md-2" style="text-align: center;">E</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td><span>Abdução de Ombro</span></td>
          <td><input class="form-control" type="number" name="d_shoulder_abduction" value="{{ $result[0]->d_shoulder_abduction }}" ></td>
          <td><input class="form-control" type="number" name="e_shoulder_abduction" value="{{ $result[0]->e_shoulder_abduction }}" ></td>
        </tr>
        <tr>
          <td><span>Flexão Cotovelo</span></td>
          <td><input class="form-control" type="number" name="d_elbow_flexion" value="{{ $result[0]->d_elbow_flexion }}" ></td>
          <td><input class="form-control" type="number" name="e_elbow_flexion" value="{{ $result[0]->e_elbow_flexion }}" ></td>
        </tr>
        <tr>
          <td><span>Extensão de Punho</span></td>
          <td><input class="form-control" type="number" name="d_cuff_extension" value="{{ $result[0]->d_cuff_extension }}" ></td>
          <td><input class="form-control" type="number" name="e_cuff_extension" value="{{ $result[0]->e_cuff_extension }}" ></td>
        </tr>
        <tr>
          <td><span>Flexão de Quadril</span></td>
          <td><input class="form-control" type="number" name="d_hip_flexion" value="{{ $result[0]->d_hip_flexion }}" ></td>
          <td><input class="form-control" type="number" name="e_hip_flexion" value="{{ $result[0]->e_hip_flexion }}" ></td>
        </tr>
        <tr>
          <td><span>Extensão de Joelho</span></td>
          <td><input class="form-control" type="number" name="d_knee_extension" value="{{ $result[0]->d_knee_extension }}" ></td>
          <td><input class="form-control" type="number" name="e_knee_extension" value="{{ $result[0]->e_knee_extension }}" ></td>
        </tr>
        <tr>
          <td><span>Dorsiflexão Tornozelo</span></td>
          <td><input class="form-control" type="number" name="d_ankle_dorsiflexion" value="{{ $result[0]->d_ankle_dorsiflexion }}" ></td>
          <td><input class="form-control" type="number" name="e_ankle_dorsiflexion" value="{{ $result[0]->e_ankle_dorsiflexion }}" ></td>
        </tr>
        <tr>
          <td><label>TOTAL</label></td>
          <td colspan="2"><input class="form-control" type="number" name="movement_total" value="{{ $result[0]->movement_total }}" ></td>
        </tr>
        <tr>
          <td><label>PREENSÃO PALMAR</label></td>
          <td colspan="2"><input class="form-control" type="number" name="palm_hold" value="{{ $result[0]->palm_hold }}" ></td>
        </tr>
      </tbody>
    </table>
  </div>



  <div class="form-group col-sm-4">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-2" colspan="2" style="text-align: center;">MRC – SENSAÇÃO DE DISPNÉIA</th>  
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span>Dispneia a exercícios intensos</span></td>
          <td style="text-align: center;"><label>1</label></td>
        </tr>
        <tr>
          <td><span>Dispneia andando rápido no plano ou subindo aclives leves</span></td>
          <td style="text-align: center;"><label>2</label></td>
        </tr>
        <tr>
          <td><span>Andar mais lentamente que pessoas da mesma idade devido à dispneia ou parar para respirar andando normalmente no plano.</span></td>
          <td style="text-align: center;"><label>3</label></td>
        </tr>
        <tr>
          <td><span>Parar para respirar após caminhar 90 metros ou alguns minutos no plano.</span></td>
          <td style="text-align: center;"><label>4</label></td>
        </tr>
        <tr>
          <td><span>Não sair de casa devido à dispneia.</span></td>
          <td style="text-align: center;"><label>5</label></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group col-sm-12">
    <div style="float: left">
      <a class="btn btn-primary" onclick="$('#passo-4').css('display', 'none'); $('#passo-3').css('display', 'block'); window.scrollTo(0, 0);"><i class="fa fa-arrow-left"></i> Previo</a>
    </div>
    <div style="float: right">
      <a class="btn btn-primary" onclick="$('#passo-4').css('display', 'none'); $('#passo-5').css('display', 'block'); window.scrollTo(0, 0);">Próximo <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<div id="passo-5" style="display: none">


  <div class="form-group col-sm-8">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>FSS</th>
          <th style="text-align: center;">1</th>
          <th style="text-align: center;">2</th>
          <th style="text-align: center;">3</th>
          <th style="text-align: center;">4</th>
          <th style="text-align: center;">5</th>
          <th style="text-align: center;">6</th>
          <th style="text-align: center;">7</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Mobilização no Leito</td>
          <td style="text-align: center;"><input type="radio" name="bed_mobilization" value="1" {{ ($result[0]->bed_mobilization=="1")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="bed_mobilization" value="2" {{ ($result[0]->bed_mobilization=="2")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="bed_mobilization" value="3" {{ ($result[0]->bed_mobilization=="3")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="bed_mobilization" value="4" {{ ($result[0]->bed_mobilization=="4")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="bed_mobilization" value="5" {{ ($result[0]->bed_mobilization=="5")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="bed_mobilization" value="6" {{ ($result[0]->bed_mobilization=="6")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="bed_mobilization" value="7" {{ ($result[0]->bed_mobilization=="7")? "checked" : "" }} ></td>
        </tr>
        <tr>
          <td>Transferência Deitado para Sentado</td>
          <td style="text-align: center;"><input type="radio" name="transfer_sitting_to_sitting" value="1" {{ ($result[0]->transfer_sitting_to_sitting=="1")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sitting_to_sitting" value="2" {{ ($result[0]->transfer_sitting_to_sitting=="2")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sitting_to_sitting" value="3" {{ ($result[0]->transfer_sitting_to_sitting=="3")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sitting_to_sitting" value="4" {{ ($result[0]->transfer_sitting_to_sitting=="4")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sitting_to_sitting" value="5" {{ ($result[0]->transfer_sitting_to_sitting=="5")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sitting_to_sitting" value="6" {{ ($result[0]->transfer_sitting_to_sitting=="6")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sitting_to_sitting" value="7" {{ ($result[0]->transfer_sitting_to_sitting=="7")? "checked" : "" }} ></td>
        </tr>
        <tr>
          <td>Transferência Sedestação para Ortostase</td>
          <td style="text-align: center;"><input type="radio" name="transfer_sedation_to_orthostasis" value="1" {{ ($result[0]->transfer_sedation_to_orthostasis=="1")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sedation_to_orthostasis" value="2" {{ ($result[0]->transfer_sedation_to_orthostasis=="2")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sedation_to_orthostasis" value="3" {{ ($result[0]->transfer_sedation_to_orthostasis=="3")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sedation_to_orthostasis" value="4" {{ ($result[0]->transfer_sedation_to_orthostasis=="4")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sedation_to_orthostasis" value="5" {{ ($result[0]->transfer_sedation_to_orthostasis=="5")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sedation_to_orthostasis" value="6" {{ ($result[0]->transfer_sedation_to_orthostasis=="6")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="transfer_sedation_to_orthostasis" value="7" {{ ($result[0]->transfer_sedation_to_orthostasis=="7")? "checked" : "" }} ></td>
        </tr>
        <tr>
          <td>Deambulação</td>
          <td style="text-align: center;"><input type="radio" name="ambulation" value="1" {{ ($result[0]->ambulation=="1")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="ambulation" value="2" {{ ($result[0]->ambulation=="2")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="ambulation" value="3" {{ ($result[0]->ambulation=="3")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="ambulation" value="4" {{ ($result[0]->ambulation=="4")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="ambulation" value="5" {{ ($result[0]->ambulation=="5")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="ambulation" value="6" {{ ($result[0]->ambulation=="6")? "checked" : "" }} ></td>
          <td style="text-align: center;"><input type="radio" name="ambulation" value="7" {{ ($result[0]->ambulation=="7")? "checked" : "" }} ></td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <div class="form-group col-sm-4">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-2" colspan="2" style="text-align: center;">Descrição</th> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span>Total Assistência</span></td>
          <td style="text-align: center;"><label>1</label></td>
        </tr>
        <tr>
          <td><span>Máxima Assistência</span></td>
          <td style="text-align: center;"><label>2</label></td>
        </tr>
        <tr>
          <td><span>Moderada Assistência</span></td>
          <td style="text-align: center;"><label>3</label></td>
        </tr>
        <tr>
          <td><span>Mínima Assistência</span></td>
          <td style="text-align: center;"><label>4</label></td>
        </tr>
        <tr>
          <td><span>Supervisão</span></td>
          <td style="text-align: center;"><label>5</label></td>
        </tr>
        <tr>
          <td><span>Independência Modificada</span></td>
          <td style="text-align: center;"><label>6</label></td>
        </tr>
        <tr>
          <td><span>Independência Completa</span></td>
          <td style="text-align: center;"><label>7</label></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group col-sm-8">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-2" colspan="3" style="text-align: center;">TUG – TIME UP AND GO</th>  
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span>Tempo</span></td>
          <td colspan="2"><input class="form-control" type="number" name="time" value="{{ $result[0]->time }}" ></td>
        </tr>
        <tr>
          <td><span>Risco de queda? (> 14 seg) </span></td>
          <td colspan="2"><input class="form-control" type="number" name="risk_of_falling" value="{{ $result[0]->risk_of_falling }}" ></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="2" style="text-align: center;">Satisfatório</td>
        </tr>
        <tr>
          <td><span>Saída da Cadeira</span></td>
          <td style="text-align: center;">
            <input type="radio" id="chair_exit" name="chair_exit" value="s" {{ ($result[0]->chair_exit=="s")? "checked" : "" }} >
            <label for="chair_exit">S</label>
          </td>
          <td style="text-align: center;">
            <input type="radio" id="chair_exit" name="chair_exit" value="n" {{ ($result[0]->chair_exit=="n")? "checked" : "" }} >
            <label for="chair_exit">N</label>
          </td>
        </tr>
        <tr>
          <td><span>Marcha</span></td>
          <td style="text-align: center;">
            <input type="radio" id="march1" name="march" value="s" {{ ($result[0]->march=="s")? "checked" : "" }} >
            <label for="march1">S</label>
          </td>
          <td style="text-align: center;">
            <input type="radio" id="march2" name="march" value="n" {{ ($result[0]->march=="n")? "checked" : "" }} >
            <label for="march2">N</label>
          </td>
        </tr>
        <tr>
          <td><span>Contorno</span></td>
          <td style="text-align: center;">
            <input type="radio" id="contour1" name="contour" value="s" {{ ($result[0]->contour=="s")? "checked" : "" }} >
            <label for="contour1">S</label>
          </td>
          <td style="text-align: center;">
            <input type="radio" id="contour2" name="contour" value="n" {{ ($result[0]->contour=="n")? "checked" : "" }} >
            <label for="contour2">N</label>
          </td>
        </tr>
        <tr>
          <td><span>Rotação no eixo</span></td>
          <td style="text-align: center;">
            <input type="radio" id="axis_rotation1" name="axis_rotation" value="s" {{ ($result[0]->axis_rotation=="s")? "checked" : "" }} >
            <label for="axis_rotation1">S</label>
          </td>
          <td style="text-align: center;">
            <input type="radio" id="axis_rotation2" name="axis_rotation" value="n" {{ ($result[0]->axis_rotation=="n")? "checked" : "" }} >
            <label for="axis_rotation2">N</label>
          </td>
        </tr>
        <tr>
          <td><span>Sentar na cadeira</span></td>
          <td style="text-align: center;">
            <input type="radio" id="sitting_on_chair1" name="sitting_on_chair" value="s" {{ ($result[0]->sitting_on_chair=="s")? "checked" : "" }} >
            <label for="sitting_on_chair1">S</label>
          </td>
          <td style="text-align: center;">
            <input type="radio" id="sitting_on_chair2" name="sitting_on_chair" value="n" {{ ($result[0]->sitting_on_chair=="n")? "checked" : "" }} >
            <label for="sitting_on_chair2">N</label>
          </td>
        </tr>
        <tr>
          <td><span>Número de Passos</span></td>
          <td style="text-align: center;">
            <input type="radio" id="number_of_steps1" name="number_of_steps" value="s" {{ ($result[0]->number_of_steps=="s")? "checked" : "" }} >
            <label for="number_of_steps1">S</label>
          </td>
          <td style="text-align: center;">
            <input type="radio" id="number_of_steps2" name="number_of_steps" value="n" {{ ($result[0]->number_of_steps=="n")? "checked" : "" }} >
            <label for="number_of_steps2">N</label>
          </td>
        </tr>
        <tr>
          <td><span>Não sair de casa devido à dispneia.</span></td>
          <td colspan="2"><input class="form-control" type="number" name="do_not_leave" value="{{ $result[0]->do_not_leave }}" ></td>
        </tr>
      </tbody>
    </table>
  </div>


  <div class="form-group col-sm-12">
    <div style="float: left">
      <a class="btn btn-primary" onclick="$('#passo-5').css('display', 'none'); $('#passo-4').css('display', 'block'); window.scrollTo(0, 0);"><i class="fa fa-arrow-left"></i> Previo</a>
    </div>
    <div style="float: right">
      <a class="btn btn-primary" onclick="$('#passo-5').css('display', 'none'); $('#passo-6').css('display', 'block'); window.scrollTo(0, 0);">Próximo <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<div id="passo-6" style="display: none">

  <div class="form-group col-sm-12">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-3" colspan="2" style="text-align: center;">
            <label>TC 6 (corredor 30m)</label>
            <br>
            Contra indicação: <input class="form-control" type="text" style="width: 30%; display: inline;" name="contraindication_30m_corridor" value="{{ $result[0]->contraindication_30m_corridor }}" >
            <br>
            Logística permite: <input class="form-control" type="text" style="width: 30%; display: inline;" name="logistics_allow_30m_corridor" value="{{ $result[0]->logistics_allow_30m_corridor }}" >
          </th> 
          <th class="col-md-3" colspan="2" style="text-align: center;">
            <label>Teste S/L 1min</label>
            <br>
            Contra indicação: <input class="form-control" type="text" style="width: 30%; display: inline;" name="contraindication_s_l_test" value="{{ $result[0]->contraindication_s_l_test }}" >
            <br>
            Logística permite: <input class="form-control" type="text" style="width: 30%; display: inline;" name="logistics_allow_s_l_test" value="{{ $result[0]->logistics_allow_s_l_test }}" >
          </th> 
          <th class="col-md-3" colspan="2" style="text-align: center;">
            <label>Teste degrau 4min</label>
            <br>
            Contra indicação: <input class="form-control" type="text" style="width: 30%; display: inline;" name="contraindication_step_test" value="{{ $result[0]->contraindication_step_test }}" >
            <br>
            Logística permite: <input class="form-control" type="text" style="width: 30%; display: inline;" name="logistics_allow_step_test" value="{{ $result[0]->logistics_allow_step_test }}" >
          </th> 
          <th class="col-md-3" colspan="2" style="text-align: center;">
            <label>Teste velocidade de marcha (4 ou 6m)</label>
            <br>
            Contra indicação: <input class="form-control" type="text" style="width: 30%; display: inline;" name="contraindication_walking_test" value="{{ $result[0]->contraindication_walking_test }}" >
            <br>
            Logística permite: <input class="form-control" type="text" style="width: 30%; display: inline;" name="logistics_allow_walking_test" value="{{ $result[0]->logistics_allow_walking_test }}" >
          </th> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span>Distancia(m)</span></td>
          <td><input class="form-control" type="number" name="distance_30m_corridor" value="{{ $result[0]->distance_30m_corridor }}" ></td>

          <td><span>Repetições (número)</span></td>
          <td><input class="form-control" type="number" name="repetitions_s_l_test" value="{{ $result[0]->repetitions_s_l_test }}" ></td>

          <td><span>Degraus (número)</span></td>
          <td><input class="form-control" type="number" name="steps_step_test" value="{{ $result[0]->steps_step_test }}" ></td>

          <td><span>Velocidade (m/s)</span></td>
          <td><input class="form-control" type="number" name="speed_walking_test" value="{{ $result[0]->speed_walking_test }}" ></td>
        </tr>
        <tr>
          <td><span>% previsto</span></td>
          <td><input class="form-control" type="number" name="foreseen_30m_corridor" value="{{ $result[0]->foreseen_30m_corridor }}" ></td>

          <td><span>% previsto</span></td>
          <td><input class="form-control" type="number" name="foreseen_s_l_test" value="{{ $result[0]->foreseen_s_l_test }}" ></td>

          <td><span>% previsto</span></td>
          <td><input class="form-control" type="number" name="foreseen_step_test" value="{{ $result[0]->foreseen_step_test }}" ></td>

          <td><span>% previsto</span></td>
          <td><input class="form-control" type="number" name="foreseen_walking_test" value="{{ $result[0]->foreseen_walking_test }}" ></td>
        </tr>
        <tr>
          <td><span>FC máxima (bpm)/Borg máx</span></td>
          <td><input class="form-control" type="number" name="max_hr_30m_corridor" value="{{ $result[0]->max_hr_30m_corridor }}" ></td>

          <td><span>FC máxima (bpm)</span></td>
          <td><input class="form-control" type="number" name="max_hr_s_l_test" value="{{ $result[0]->max_hr_s_l_test }}" ></td>

          <td><span>FC máxima (bpm)</span></td>
          <td><input class="form-control" type="number" name="max_hr_step_test" value="{{ $result[0]->max_hr_step_test }}" ></td>

          <td><span>FC máxima (bpm)</span></td>
          <td><input class="form-control" type="number" name="max_hr_walking_test" value="{{ $result[0]->max_hr_walking_test }}" ></td>
        </tr>
        <tr>
          <td><span>Spo2 mínima</span></td>
          <td><input class="form-control" type="number" name="min_spo2_30m_corridor" value="{{ $result[0]->min_spo2_30m_corridor }}" ></td>

          <td><span>Spo2 mínima</span></td>
          <td><input class="form-control" type="number" name="min_spo2_s_l_test" value="{{ $result[0]->min_spo2_s_l_test }}" ></td>

          <td><span>Spo2 mínima</span></td>
          <td><input class="form-control" type="number" name="min_spo2_step_test" value="{{ $result[0]->min_spo2_step_test }}" ></td>

          <td><span>Spo2 mínima</span></td>
          <td><input class="form-control" type="number" name="min_spo2_walking_test" value="{{ $result[0]->min_spo2_walking_test }}" ></td>
        </tr>
        <tr>
          <td><span>Tempo 1ª/última volta (seg)</span></td>
          <td><input class="form-control" type="number" name="lap_time_30m_corridor" value="{{ $result[0]->lap_time_30m_corridor }}" ></td>

          <td><span>BORG máximo</span></td>
          <td><input class="form-control" type="number" name="max_borg_s_l_test" value="{{ $result[0]->max_borg_s_l_test }}" ></td>

          <td><span>BORG máximo</span></td>
          <td><input class="form-control" type="number" name="max_borg_step_test" value="{{ $result[0]->max_borg_step_test }}" ></td>

          <td><span>BORG máximo</span></td>
          <td><input class="form-control" type="number" name="max_borg_walking_test" value="{{ $result[0]->max_borg_walking_test }}" ></td>
        </tr>
        <tr>
          <td><span>PA após 1 min</span></td>
          <td><input class="form-control" type="number" name="bp_1_min_30m_corridor" value="{{ $result[0]->bp_1_min_30m_corridor }}" ></td>

          <td><span>PA após 1 min</span></td>
          <td><input class="form-control" type="number" name="bp_1_min_s_l_test" value="{{ $result[0]->bp_1_min_s_l_test }}" ></td>

          <td><span>PA após 1 min</span></td>
          <td><input class="form-control" type="number" name="bp_1_min_step_test" value="{{ $result[0]->bp_1_min_step_test }}" ></td>

          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><span>FC após 1 min</span></td>
          <td><input class="form-control" type="number" name="hr_1_min_30m_corridor" value="{{ $result[0]->hr_1_min_30m_corridor }}" ></td>

          <td><span>FC após 1 min</span></td>
          <td><input class="form-control" type="number" name="hr_1_min_s_l_test" value="{{ $result[0]->hr_1_min_s_l_test }}" ></td>

          <td><span>FC após 1 min</span></td>
          <td><input class="form-control" type="number" name="hr_1_min_step_test" value="{{ $result[0]->hr_1_min_step_test }}" ></td>

          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><span>Velocidade (km/h)</span></td>
          <td><input class="form-control" type="number" name="speed_30m_corridor" value="{{ $result[0]->speed_30m_corridor }}" ></td>

          <td></td>
          <td></td>

          <td></td>
          <td></td>

          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group col-sm-12">
    <div style="float: left">
      <a class="btn btn-primary" onclick="$('#passo-6').css('display', 'none'); $('#passo-5').css('display', 'block'); window.scrollTo(0, 0);"><i class="fa fa-arrow-left"></i> Previo</a>
    </div>
    <div style="float: right">
      <a class="btn btn-primary" onclick="$('#passo-6').css('display', 'none'); $('#passo-7').css('display', 'block'); window.scrollTo(0, 0);">Próximo <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<div id="passo-7" style="display: none">

  <div class="form-group col-sm-8">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-2" colspan="2" style="text-align: center;">QUALIDADE DE VIDA – SF36</th>  
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span>Capacidade funcional</span></td>
          <td><input class="form-control" type="number" name="functional_capacity" value="{{ $result[0]->functional_capacity }}" ></td>
        </tr>
        <tr>
          <td><span>Limitação por aspectos fisicos</span></td>
          <td><input class="form-control" type="number" name="limitation_by_physical_aspects" value="{{ $result[0]->limitation_by_physical_aspects }}" ></td>
        </tr>
        <tr>
          <td><span>Dor</span></td>
          <td><input class="form-control" type="number" name="ache" value="{{ $result[0]->ache }}" ></td>
        </tr>
        <tr>
          <td><span>Estado geral de saúde</span></td>
          <td><input class="form-control" type="number" name="general_health_status" value="{{ $result[0]->general_health_status }}" ></td>
        </tr>
        <tr>
          <td><span>Vitalidade</span></td>
          <td><input class="form-control" type="number" name="vitality" value="{{ $result[0]->vitality }}" ></td>
        </tr>
        <tr>
          <td><span>Aspectos sociais</span></td>
          <td><input class="form-control" type="number" name="social_aspects" value="{{ $result[0]->social_aspects }}" ></td>
        </tr>
        <tr>
          <td><span>Limitação por aspectos emocionais</span></td>
          <td><input class="form-control" type="number" name="limitation_by_emotional_aspects" value="{{ $result[0]->limitation_by_emotional_aspects }}" ></td>
        </tr>
        <tr>
          <td><span>Saúde mental</span></td>
          <td><input class="form-control" type="number" name="mental_health" value="{{ $result[0]->mental_health }}" ></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group col-sm-12">
    <div style="float: left">
      <a class="btn btn-primary" onclick="$('#passo-7').css('display', 'none'); $('#passo-6').css('display', 'block'); window.scrollTo(0, 0);"><i class="fa fa-arrow-left"></i> Previo</a>
    </div>
    <div style="float: right">
      <a class="btn btn-primary" onclick="$('#passo-7').css('display', 'none'); $('#passo-8').css('display', 'block'); window.scrollTo(0, 0);">Próximo <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<div id="passo-8" style="display: none">

  <div class="form-group col-sm-8">
    <label>DIAGNÓSTICO FISIOTERAPEUTICO</label>
    <select class="form-control" id="physio_therapy" name="physio_therapy" >
      <option name="cardiovascular_deficiency" {{ ($result[0]->physio_therapy=="Deficiência cardiovascular")? "selected" : "" }} value="Deficiência cardiovascular">Deficiência cardiovascular </option>
      <option name="respiratory_deficiency" {{ ($result[0]->physio_therapy=="Deficiência respiratória")? "selected" : "" }} value="Deficiência respiratória">Deficiência respiratória</option>
      <option name="neuromioarticular_deficiency" {{ ($result[0]->physio_therapy=="Deficiência neuromioarticular")? "selected" : "" }} value="Deficiência neuromioarticular">Deficiência neuromioarticular</option>
      <option name="cognitive_deficiency" {{ ($result[0]->physio_therapy=="Deficiência cognitiva")? "selected" : "" }} value="Deficiência cognitiva">Deficiência cognitiva</option>
    </select>
  </div>

  <div class="form-group col-sm-4">
    <label>Descrição</label>
    <textarea class="form-control" name="description" style="resize: none;" >{{ $result[0]->description }}</textarea>
  </div>

  <div class="form-group col-sm-12">
    <label>IMPRESSÃO ATUAL DO DIAGNOSTICO FISIOTERAPEUTICO</label>
    <textarea class="form-control" name="physiotherapeutic_diagnosis" style="resize: none;" >{{ $result[0]->physiotherapeutic_diagnosis }}</textarea>
  </div>

  <div class="form-group col-sm-12">
    <label>OBJETIVO(S) DO GRUPO PULSAR COM A REABILITAÇÃO</label>
    <textarea class="form-control" name="group_objective_with_rehabilitation" style="resize: none;" >{{ $result[0]->group_objective_with_rehabilitation }}</textarea>
  </div>

  <div class="form-group col-sm-12">
    <label>OBJETIVO(S) DA FAMÍLIA/PACIENTE COM A REABILITAÇÃO</label>
    <textarea class="form-control" name="family_objective_with_rehabilitation" style="resize: none;" >{{ $result[0]->family_objective_with_rehabilitation }}</textarea>
  </div>

  <div class="form-group col-sm-6">
    <label>REVISADO EM</label>
    <input type="text" class="form-control" name="revised_on" value="{{ $result[0]->revised_on }}" >
  </div>

  <div class="form-group col-sm-6">
    <label>FISIOTERAPEUTA RESPONSÁVEL </label>
    <input type="text" class="form-control" name="responsible_physiotherapist" value="{{ $result[0]->responsible_physiotherapist }}" >
  </div>

  <div class="form-group col-sm-6">
    <label>CREFITO</label>
    <input type="text" class="form-control" name="crefito" value="{{ $result[0]->crefito }}" >
  </div>

  <div class="form-group col-sm-6">
    <label>ATUALIZAR EM</label>
    <input type="text" class="form-control" name="update_on" value="{{ $result[0]->update_on }}" >
  </div>


  <div class="form-group col-sm-12">
    <div style="float: left">
      <a class="btn btn-primary" onclick="$('#passo-8').css('display', 'none'); $('#passo-7').css('display', 'block'); window.scrollTo(0, 0);"><i class="fa fa-arrow-left"></i> Previo</a>
    </div>
    <div style="float: right">
      <button class="btn btn-primary" type="submit" id="submit">Enviar <i class="fa fa-arrow-right"></i></button>
    </div>
  </div>
</div>