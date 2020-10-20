<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Eventos
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property string protocolo
 * @property string data_solicitacao
 * @property string solicitante
 * @property string telefones
 * @property string email
 * @property string comumento_numero
 * @property string documento_tipo
 * @property string evento_descricao
 * @property string data_inicio
 * @property string data_termino
 * @property integer quantidade_dias
 * @property string referencia
 * @property string responsavel
 * @property string telefones_responsavel
 * @property string email_responsavel
 * @property string observacao
 * @property string situacao
 * @property string enviado_impressao
 * @property string enviado_mobile
 * @property string enviado_mobile_id_turma
 * @property string c_informar_ciencia
 * @property string c_informar_concluida
 * @property string data_conclusao
 * @property string data_baixa
 * @property string dados_conclusivos
 * @property string alterador_em
 * @property string logradouro_descricao
 * @property string tipo_evento
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_tipo_solicitante
 * @property integer id_tipo_solicitacao
 * @property integer id_logradouro
 * @property integer id_bairro
 * @property integer id_empresa
 * @property integer id_turma
 * @property integer id_cidade
 * @property integer id_usuario
 */
class Eventos extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'eventos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'protocolo',
        'data_solicitacao',
        'solicitante',
        'telefones',
        'email',
        'comumento_numero',
        'documento_tipo',
        'evento_descricao',
        'data_inicio',
        'data_termino',
        'quantidade_dias',
        'referencia',
        'responsavel',
        'telefones_responsavel',
        'email_responsavel',
        'observacao',
        'situacao',
        'enviado_impressao',
        'enviado_mobile',
        'enviado_mobile_id_turma',
        'c_informar_ciencia',
        'c_informar_concluida',
        'data_conclusao',
        'data_baixa',
        'dados_conclusivos',
        'alterador_em',
        'logradouro_descricao',
        'tipo_evento',
        'incluidodoem',
        'id_tipo_solicitante',
        'id_tipo_solicitacao',
        'id_logradouro',
        'id_bairro',
        'id_empresa',
        'id_turma',
        'id_cidade',
        'id_usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'protocolo' => 'string',
        'data_solicitacao' => 'date',
        'solicitante' => 'string',
        'telefones' => 'string',
        'email' => 'string',
        'comumento_numero' => 'string',
        'documento_tipo' => 'string',
        'evento_descricao' => 'string',
        'data_inicio' => 'date',
        'data_termino' => 'date',
        'quantidade_dias' => 'integer',
        'referencia' => 'string',
        'responsavel' => 'string',
        'telefones_responsavel' => 'string',
        'email_responsavel' => 'string',
        'observacao' => 'string',
        'situacao' => 'string',
        'enviado_impressao' => 'string',
        'enviado_mobile' => 'string',
        'enviado_mobile_id_turma' => 'string',
        'c_informar_ciencia' => 'string',
        'c_informar_concluida' => 'string',
        'data_conclusao' => 'date',
        'data_baixa' => 'date',
        'dados_conclusivos' => 'string',
        'alterador_em' => 'date',
        'logradouro_descricao' => 'string',
        'tipo_evento' => 'string',
        'incluidodoem' => 'datetime',
        'id_tipo_solicitante' => 'integer',
        'id_tipo_solicitacao' => 'integer',
        'id_logradouro' => 'integer',
        'id_bairro' => 'integer',
        'id_empresa' => 'integer',
        'id_turma' => 'integer',
        'id_cidade' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'protocolo' => 'required',
        'data_solicitacao' => 'required',
        'solicitante' => 'required',
        'telefones' => 'required',
        'email' => 'required',
        'comumento_numero' => 'required',
        'documento_tipo' => 'required',
        'evento_descricao' => 'required',
        'data_inicio' => 'required',
        'data_termino' => 'required',
        'quantidade_dias' => 'required',
        'referencia' => 'required',
        'responsavel' => 'required',
        'telefones_responsavel' => 'required',
        'email_responsavel' => 'required',
        'observacao' => 'required',
        'situacao' => 'required',
        'enviado_impressao' => 'required',
        'enviado_mobile' => 'required',
        'enviado_mobile_id_turma' => 'required',
        'c_informar_ciencia' => 'required',
        'c_informar_concluida' => 'required',
        'data_conclusao' => 'required',
        'data_baixa' => 'required',
        'dados_conclusivos' => 'required',
        'alterador_em' => 'required',
        'logradouro_descricao' => 'required',
        'tipo_evento' => 'required',
        'incluidodoem' => 'required',
        'id_tipo_solicitante' => 'required',
        'id_tipo_solicitacao' => 'required',
        'id_logradouro' => 'required',
        'id_bairro' => 'required',
        'id_empresa' => 'required',
        'id_turma' => 'required',
        'id_cidade' => 'required',
        'id_usuario' => 'required'
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo('App\Models\cidade', 'id_cidade');
    }
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'id_usuario');
    }
    public function enviado_mobile_turma(): BelongsTo
    {
        return $this->belongsTo(turma::class, 'enviado_mobile_id_turma');
    }
    public function tipo_solicitante(): BelongsTo
    {
        return $this->belongsTo(tipo_solicitante::class, 'id_tipo_solicitante');
    }
    public function tipo_solicitacao(): BelongsTo
    {
        return $this->belongsTo(tipo_solicitacao::class, 'id_tipo_solicitacao');
    }
    public function logradouro(): BelongsTo
    {
        return $this->belongsTo(logradouro::class, 'id_logradouro');
    }
    public function bairro(): BelongsTo
    {
        return $this->belongsTo(Bairros::class, 'id_bairro');
    }
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresas::class, 'id_empresa');
    }
    public function turma(): BelongsTo
    {
        return $this->belongsTo(turma::class, 'id_turma');
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
