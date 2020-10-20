<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class obras
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property integer idcidade
 * @property string protocolo
 * @property string numero_processo
 * @property string data_processo
 * @property integer idtiposolicitante
 * @property integer idtiposolicitacao
 * @property string solicitante
 * @property string telefones
 * @property string email
 * @property integer idra
 * @property integer idlogradouro
 * @property integer idbairro
 * @property integer idtipoacao
 * @property string servico_solicitado
 * @property string situacao
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 * @property integer enviado_impressao
 * @property integer enviado_mobile
 * @property integer enviado_mobile_idturma
 * @property string referencia
 * @property string observacao
 * @property string telefone_contato
 * @property integer idempresa
 * @property string data_prevista_inicial
 * @property string data_prevista_final
 * @property string fiscal_prefeitura
 * @property string art_obra
 * @property integer c_informar_ciencia
 * @property integer c_informar_concluida
 * @property string data_execucao
 * @property string hora_execucao
 * @property string|\Carbon\Carbon data_baixa
 * @property string hora_baixa
 * @property integer idturma
 * @property string|\Carbon\Carbon alterador_em
 * @property integer idusuarioalterou
 * @property string logradouro_descricao
 * @property string observacao_fatura
 * @property string complemento_turma
 */
class obras extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'obras';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'protocolo',
        'numero_processo',
        'data_processo',
        'idtiposolicitante',
        'idtiposolicitacao',
        'solicitante',
        'telefones',
        'email',
        'idra',
        'idlogradouro',
        'idbairro',
        'idtipoacao',
        'servico_solicitado',
        'situacao',
        'incluidoem',
        'idusuario',
        'enviado_impressao',
        'enviado_mobile',
        'enviado_mobile_idturma',
        'referencia',
        'observacao',
        'telefone_contato',
        'idempresa',
        'data_prevista_inicial',
        'data_prevista_final',
        'fiscal_prefeitura',
        'art_obra',
        'c_informar_ciencia',
        'c_informar_concluida',
        'data_execucao',
        'hora_execucao',
        'data_baixa',
        'hora_baixa',
        'idturma',
        'alterador_em',
        'idusuarioalterou',
        'logradouro_descricao',
        'observacao_fatura',
        'complemento_turma'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'protocolo' => 'string',
        'numero_processo' => 'string',
        'data_processo' => 'date',
        'idtiposolicitante' => 'integer',
        'idtiposolicitacao' => 'integer',
        'solicitante' => 'string',
        'telefones' => 'string',
        'email' => 'string',
        'idra' => 'integer',
        'idlogradouro' => 'integer',
        'idbairro' => 'integer',
        'idtipoacao' => 'integer',
        'servico_solicitado' => 'string',
        'situacao' => 'string',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer',
        'enviado_impressao' => 'integer',
        'enviado_mobile' => 'integer',
        'enviado_mobile_idturma' => 'integer',
        'referencia' => 'string',
        'observacao' => 'string',
        'telefone_contato' => 'string',
        'idempresa' => 'integer',
        'data_prevista_inicial' => 'date',
        'data_prevista_final' => 'date',
        'fiscal_prefeitura' => 'string',
        'art_obra' => 'string',
        'c_informar_ciencia' => 'integer',
        'c_informar_concluida' => 'integer',
        'data_execucao' => 'date',
        'hora_execucao' => 'string',
        'data_baixa' => 'datetime',
        'hora_baixa' => 'string',
        'idturma' => 'integer',
        'alterador_em' => 'datetime',
        'idusuarioalterou' => 'integer',
        'logradouro_descricao' => 'string',
        'observacao_fatura' => 'string',
        'complemento_turma' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'idusuario' => 'required',
        'protocolo' => 'required',
        'numero_processo' => 'required',
        'data_processo' => 'required',
        'idtiposolicitante' => 'required',
        'idtiposolicitacao' => 'required',
        'solicitante' => 'required',
        'telefones' => 'required',
        'email' => 'required',
        'idra' => 'required',
        'idlogradouro' => 'required',
        'idbairro' => 'required',
        'idtipoacao' => 'required',
        'servico_solicitado' => 'required',
        'situacao' => 'required',
        'incluidoem' => 'required',
        'enviado_impressao' => 'required',
        'enviado_mobile' => 'required',
        'enviado_mobile_idturma' => 'required',
        'idempresa' => 'required',
        'c_informar_ciencia' => 'required',
        'c_informar_concluida' => 'required',
        'idturma' => 'required',
        'idusuarioalterou' => 'required',
        'logradouro_descricao' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
    public function usuarioalterou(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuarioalterou');
    }
    public function enviado_mobile_turma(): BelongsTo
    {
        return $this->belongsTo(turma::class, 'enviado_mobile_idturma');
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
    public function ra(): BelongsTo
    {
        return $this->belongsTo(ra::class, 'idra');
    }
    public function logradouro(): BelongsTo
    {
        return $this->belongsTo(logradouro::class, 'idlogradouro');
    }
    public function bairro(): BelongsTo
    {
        return $this->belongsTo(Bairros::class, 'idbairro');
    }
    public function tipoacao(): BelongsTo
    {
        return $this->belongsTo(tipoacao::class, 'idtipoacao');
    }
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresas::class, 'idempresa');
    }
    public function turma(): BelongsTo
    {
        return $this->belongsTo(turma::class, 'idturma');
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
