<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class solicitacao_reclamacao
 * @package App\Models
 * @version May 24, 2020, 9:01 am UTC
 *
 * @property integer idcidade
 * @property string protocolo_sistema
 * @property string protocolo_falasalvador
 * @property string protocolo_consorcio
 * @property string|\Carbon\Carbon data_atendimento
 * @property string hora_atendimento
 * @property string horaregistro
 * @property string temporegistro
 * @property string solicitante_nome
 * @property string solicitante_telefone
 * @property string solicitante_email
 * @property string poste_numero
 * @property integer luminaria_numero
 * @property integer idtiposolicitante
 * @property integer idtiposolicitacao
 * @property integer idlogradouro_cadastro
 * @property integer idbairro_cadastro
 * @property string visavis_cadastro
 * @property string referencia_cadastro
 * @property integer idlogradourotipo_informado
 * @property string logradouro_descricao_informado
 * @property integer idbairro_informado
 * @property string visavis_informado
 * @property string referencia_informado
 * @property string dadoscomplementares
 * @property string servicosolicitado
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 * @property integer idempresa
 * @property integer enviado_impressao
 * @property integer enviado_mobile
 * @property integer enviado_mobile_idturma
 * @property string data_execucao
 * @property string hora_execucao
 * @property string|\Carbon\Carbon data_baixa
 * @property string hora_baixa
 * @property string acao_adotada
 * @property string servico_realizado
 * @property string poste_numero_executado
 * @property integer luminaria_numero_executado
 * @property integer iddefeitoencontrado
 * @property integer idcausadefeito
 * @property integer idturma
 * @property string|\Carbon\Carbon alterador_em
 * @property integer idusuarioalterou
 * @property integer sfs_informar_ciencia
 * @property integer c_informar_ciencia
 * @property integer c_informar_concluida
 * @property integer sfs_informar_concluida
 * @property integer idfatura
 * @property number tma_dias
 * @property number tma_horas
 * @property string referencia_poste_executado
 * @property string tipo_acao
 * @property string motivo_acao
 * @property integer garantia
 * @property string garantia_os_anterior
 * @property string supervisor
 * @property string motivo_atraso
 * @property string app_coordenada_x
 * @property string app_coordenada_y
 * @property string app_informacoes_gerais
 * @property integer controle_idturma
 * @property string|\Carbon\Carbon controle_data_entrega
 * @property string|\Carbon\Carbon controle_data_recebido
 * @property string controle_acao
 * @property integer controle_idmotivo
 * @property string|\Carbon\Carbon impressoem
 * @property integer impressopor
 * @property string|\Carbon\Carbon os_separada_em
 * @property integer os_separada_por
 * @property integer os_separada_para
 */
class solicitacao_reclamacao extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'solicitacao_reclamacaos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'protocolo_sistema',
        'protocolo_falasalvador',
        'protocolo_consorcio',
        'data_atendimento',
        'hora_atendimento',
        'horaregistro',
        'temporegistro',
        'solicitante_nome',
        'solicitante_telefone',
        'solicitante_email',
        'poste_numero',
        'luminaria_numero',
        'idtiposolicitante',
        'idtiposolicitacao',
        'idlogradouro_cadastro',
        'idbairro_cadastro',
        'visavis_cadastro',
        'referencia_cadastro',
        'idlogradourotipo_informado',
        'logradouro_descricao_informado',
        'idbairro_informado',
        'visavis_informado',
        'referencia_informado',
        'dadoscomplementares',
        'servicosolicitado',
        'incluidoem',
        'idusuario',
        'idempresa',
        'enviado_impressao',
        'enviado_mobile',
        'enviado_mobile_idturma',
        'data_execucao',
        'hora_execucao',
        'data_baixa',
        'hora_baixa',
        'acao_adotada',
        'servico_realizado',
        'poste_numero_executado',
        'luminaria_numero_executado',
        'iddefeitoencontrado',
        'idcausadefeito',
        'idturma',
        'alterador_em',
        'idusuarioalterou',
        'sfs_informar_ciencia',
        'c_informar_ciencia',
        'c_informar_concluida',
        'sfs_informar_concluida',
        'idfatura',
        'tma_dias',
        'tma_horas',
        'referencia_poste_executado',
        'tipo_acao',
        'motivo_acao',
        'garantia',
        'garantia_os_anterior',
        'supervisor',
        'motivo_atraso',
        'app_coordenada_x',
        'app_coordenada_y',
        'app_informacoes_gerais',
        'controle_idturma',
        'controle_data_entrega',
        'controle_data_recebido',
        'controle_acao',
        'controle_idmotivo',
        'impressoem',
        'impressopor',
        'os_separada_em',
        'os_separada_por',
        'os_separada_para'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'protocolo_sistema' => 'string',
        'protocolo_falasalvador' => 'string',
        'protocolo_consorcio' => 'string',
        'data_atendimento' => 'datetime',
        'hora_atendimento' => 'string',
        'horaregistro' => 'string',
        'temporegistro' => 'string',
        'solicitante_nome' => 'string',
        'solicitante_telefone' => 'string',
        'solicitante_email' => 'string',
        'poste_numero' => 'string',
        'luminaria_numero' => 'integer',
        'idtiposolicitante' => 'integer',
        'idtiposolicitacao' => 'integer',
        'idlogradouro_cadastro' => 'integer',
        'idbairro_cadastro' => 'integer',
        'visavis_cadastro' => 'string',
        'referencia_cadastro' => 'string',
        'idlogradourotipo_informado' => 'integer',
        'logradouro_descricao_informado' => 'string',
        'idbairro_informado' => 'integer',
        'visavis_informado' => 'string',
        'referencia_informado' => 'string',
        'dadoscomplementares' => 'string',
        'servicosolicitado' => 'string',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer',
        'idempresa' => 'integer',
        'enviado_impressao' => 'integer',
        'enviado_mobile' => 'integer',
        'enviado_mobile_idturma' => 'integer',
        'data_execucao' => 'date',
        'hora_execucao' => 'string',
        'data_baixa' => 'datetime',
        'hora_baixa' => 'string',
        'acao_adotada' => 'string',
        'servico_realizado' => 'string',
        'poste_numero_executado' => 'string',
        'luminaria_numero_executado' => 'integer',
        'iddefeitoencontrado' => 'integer',
        'idcausadefeito' => 'integer',
        'idturma' => 'integer',
        'alterador_em' => 'datetime',
        'idusuarioalterou' => 'integer',
        'sfs_informar_ciencia' => 'integer',
        'c_informar_ciencia' => 'integer',
        'c_informar_concluida' => 'integer',
        'sfs_informar_concluida' => 'integer',
        'idfatura' => 'integer',
        'tma_dias' => 'float',
        'tma_horas' => 'float',
        'referencia_poste_executado' => 'string',
        'tipo_acao' => 'string',
        'motivo_acao' => 'string',
        'garantia' => 'integer',
        'garantia_os_anterior' => 'string',
        'supervisor' => 'string',
        'motivo_atraso' => 'string',
        'app_coordenada_x' => 'string',
        'app_coordenada_y' => 'string',
        'app_informacoes_gerais' => 'string',
        'controle_idturma' => 'integer',
        'controle_data_entrega' => 'datetime',
        'controle_data_recebido' => 'datetime',
        'controle_acao' => 'string',
        'controle_idmotivo' => 'integer',
        'impressoem' => 'datetime',
        'impressopor' => 'integer',
        'os_separada_em' => 'datetime',
        'os_separada_por' => 'integer',
        'os_separada_para' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'idusuario' => 'required',
        'protocolo_sistema' => 'required',
        'protocolo_falasalvador' => 'required',
        'protocolo_consorcio' => 'required',
        'data_atendimento' => 'required',
        'hora_atendimento' => 'required',
        'horaregistro' => 'required',
        'temporegistro' => 'required',
        'solicitante_nome' => 'required',
        'luminaria_numero' => 'required',
        'idtiposolicitante' => 'required',
        'idtiposolicitacao' => 'required',
        'idlogradouro_cadastro' => 'required',
        'idbairro_cadastro' => 'required',
        'idlogradourotipo_informado' => 'required',
        'idbairro_informado' => 'required',
        'referencia_informado' => 'required',
        'dadoscomplementares' => 'required',
        'servicosolicitado' => 'required',
        'incluidoem' => 'required',
        'idempresa' => 'required',
        'enviado_impressao' => 'required',
        'enviado_mobile' => 'required',
        'enviado_mobile_idturma' => 'required',
        'luminaria_numero_executado' => 'required',
        'iddefeitoencontrado' => 'required',
        'idcausadefeito' => 'required',
        'idturma' => 'required',
        'alterador_em' => 'required',
        'idusuarioalterou' => 'required',
        'sfs_informar_ciencia' => 'required',
        'c_informar_ciencia' => 'required',
        'c_informar_concluida' => 'required',
        'sfs_informar_concluida' => 'required',
        'idfatura' => 'required',
        'tma_dias' => 'required',
        'tma_horas' => 'required',
        'garantia' => 'required',
        'garantia_os_anterior' => 'required',
        'controle_idturma' => 'required',
        'controle_data_entrega' => 'required',
        'controle_data_recebido' => 'required',
        'controle_acao' => 'required',
        'controle_idmotivo' => 'required',
        'impressoem' => 'required',
        'impressopor' => 'required',
        'os_separada_em' => 'required',
        'os_separada_por' => 'required',
        'os_separada_para' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
    }
    public function tiposolicitante(): BelongsTo
    {
        return $this->belongsTo(tipo_solicitante::class, 'idtiposolicitante');
    }
    public function tiposolicitacao(): BelongsTo
    {
        return $this->belongsTo(tipo_solicitacao::class, 'idtiposolicitacao');
    }
    public function logradouro_cadastro(): BelongsTo
    {
        return $this->belongsTo(logradouro::class, 'idlogradouro_cadastro');
    }
    public function bairro_cadastro(): BelongsTo
    {
        return $this->belongsTo(Bairros::class, 'idbairro_cadastro');
    }
    public function logradourotipo_informado(): BelongsTo
    {
        return $this->belongsTo(logradouro_tipo::class, 'idlogradourotipo_informado');
    }
    public function bairro_informado(): BelongsTo
    {
        return $this->belongsTo(Bairros::class, 'idbairro_informado');
    }
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresas::class, 'idempresa');
    }
    public function defeitoencontrado(): BelongsTo
    {
        return $this->belongsTo(Defeitos_encontrados::class, 'iddefeitoencontrado');
    }
    public function causadefeito(): BelongsTo
    {
        return $this->belongsTo(Causa_defeitos::class, 'idcausadefeito');
    }
    public function turma(): BelongsTo
    {
        return $this->belongsTo(turma::class, 'idturma');
    }
    public function usuarioalterou(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuarioalterou');
    }
    public  function relationsName(){
        $reflector = new \ReflectionClass($this);
        $relations = [];
        foreach ($reflector->getMethods() as $reflectionMethod) {
            $returnType = $reflectionMethod->getReturnType();
            if ($returnType) {
                if (in_array(class_basename($returnType->getName()), ['HasOne', 'HasMany', 'BelongsTo', 'BelongsToMany', 'MorphToMany', 'MorphTo'])) {
                    $relations[] = $reflectionMethod->name;
                }
            }
        }

        return $relations;
    }

}
