<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class iluminacao_publica
 * @package App\Models
 * @version May 24, 2020, 8:59 am UTC
 *
 * @property integer idcidade
 * @property integer idra
 * @property integer idbairro
 * @property integer idlogradouro
 * @property integer idposte
 * @property string poste_numero
 * @property number coordenada_x
 * @property number coordenada_y
 * @property integer visavis
 * @property string referencia
 * @property string poste_propriedade
 * @property string poste_status
 * @property string poste_data_instalacao
 * @property integer idsuporte
 * @property string suporte_data_instalacao
 * @property integer idluminaria
 * @property number luminaria_numero
 * @property string fase_ligacao
 * @property integer altura_montagem
 * @property string luminaria_data_instalacao
 * @property integer idlampada
 * @property integer quantidade_lampada
 * @property number horas_ligada
 * @property string lampada_data_instalacao
 * @property integer idreator
 * @property string reator_data_instalacao
 * @property integer idrele
 * @property string rele_data_instalacao
 * @property integer idrede
 * @property integer idtransformador
 * @property integer idmedidor
 * @property string medidor_data_instalacao
 * @property integer idobjetoiluminado
 * @property integer idtarifa
 * @property string observacoes
 * @property number demanda_w
 * @property number consumo_kwh
 * @property number quantidade_os_pendente
 * @property number quantidade_os_executada
 * @property number quantidade_os_cancelada
 * @property number quantidade_os_normalizada
 * @property string icone
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuarioi
 * @property string|\Carbon\Carbon alteradoem
 * @property integer idusuario
 * @property integer cadastro_manual
 * @property integer iddigitacao_cadastro
 */
class iluminacao_publica extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'iluminacao_publicas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idra',
        'idbairro',
        'idlogradouro',
        'idposte',
        'poste_numero',
        'coordenada_x',
        'coordenada_y',
        'visavis',
        'referencia',
        'poste_propriedade',
        'poste_status',
        'poste_data_instalacao',
        'idsuporte',
        'suporte_data_instalacao',
        'idluminaria',
        'luminaria_numero',
        'fase_ligacao',
        'altura_montagem',
        'luminaria_data_instalacao',
        'idlampada',
        'quantidade_lampada',
        'horas_ligada',
        'lampada_data_instalacao',
        'idreator',
        'reator_data_instalacao',
        'idrele',
        'rele_data_instalacao',
        'idrede',
        'idtransformador',
        'idmedidor',
        'medidor_data_instalacao',
        'idobjetoiluminado',
        'idtarifa',
        'observacoes',
        'demanda_w',
        'consumo_kwh',
        'quantidade_os_pendente',
        'quantidade_os_executada',
        'quantidade_os_cancelada',
        'quantidade_os_normalizada',
        'icone',
        'incluidoem',
        'idusuarioi',
        'alteradoem',
        'idusuario',
        'cadastro_manual',
        'iddigitacao_cadastro'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'idra' => 'integer',
        'idbairro' => 'integer',
        'idlogradouro' => 'integer',
        'idposte' => 'integer',
        'poste_numero' => 'string',
        'coordenada_x' => 'float',
        'coordenada_y' => 'float',
        'visavis' => 'integer',
        'referencia' => 'string',
        'poste_propriedade' => 'string',
        'poste_status' => 'string',
        'poste_data_instalacao' => 'date',
        'idsuporte' => 'integer',
        'suporte_data_instalacao' => 'date',
        'idluminaria' => 'integer',
        'luminaria_numero' => 'float',
        'fase_ligacao' => 'string',
        'altura_montagem' => 'integer',
        'luminaria_data_instalacao' => 'date',
        'idlampada' => 'integer',
        'quantidade_lampada' => 'integer',
        'horas_ligada' => 'float',
        'lampada_data_instalacao' => 'date',
        'idreator' => 'integer',
        'reator_data_instalacao' => 'date',
        'idrele' => 'integer',
        'rele_data_instalacao' => 'date',
        'idrede' => 'integer',
        'idtransformador' => 'integer',
        'idmedidor' => 'integer',
        'medidor_data_instalacao' => 'date',
        'idobjetoiluminado' => 'integer',
        'idtarifa' => 'integer',
        'observacoes' => 'string',
        'demanda_w' => 'float',
        'consumo_kwh' => 'float',
        'quantidade_os_pendente' => 'float',
        'quantidade_os_executada' => 'float',
        'quantidade_os_cancelada' => 'float',
        'quantidade_os_normalizada' => 'float',
        'icone' => 'string',
        'incluidoem' => 'datetime',
        'idusuarioi' => 'integer',
        'alteradoem' => 'datetime',
        'idusuario' => 'integer',
        'cadastro_manual' => 'integer',
        'iddigitacao_cadastro' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'idra' => 'required',
        'idbairro' => 'required',
        'idlogradouro' => 'required',
        'idposte' => 'required',
        'poste_numero' => 'required',
        'coordenada_x' => 'required',
        'coordenada_y' => 'required',
        'visavis' => 'required',
        'poste_propriedade' => 'required',
        'poste_status' => 'required',
        'poste_data_instalacao' => 'required',
        'idsuporte' => 'required',
        'suporte_data_instalacao' => 'required',
        'idluminaria' => 'required',
        'luminaria_numero' => 'required',
        'altura_montagem' => 'required',
        'luminaria_data_instalacao' => 'required',
        'idlampada' => 'required',
        'quantidade_lampada' => 'required',
        'horas_ligada' => 'required',
        'lampada_data_instalacao' => 'required',
        'idreator' => 'required',
        'reator_data_instalacao' => 'required',
        'idrele' => 'required',
        'rele_data_instalacao' => 'required',
        'idrede' => 'required',
        'idtransformador' => 'required',
        'idmedidor' => 'required',
        'medidor_data_instalacao' => 'required',
        'idobjetoiluminado' => 'required',
        'idtarifa' => 'required',
        'demanda_w' => 'required',
        'consumo_kwh' => 'required',
        'quantidade_os_pendente' => 'required',
        'quantidade_os_executada' => 'required',
        'quantidade_os_cancelada' => 'required',
        'quantidade_os_normalizada' => 'required',
        'icone' => 'required',
        'incluidoem' => 'required',
        'idusuarioi' => 'required',
        'alteradoem' => 'required',
        'idusuario' => 'required',
        'cadastro_manual' => 'required',
        'iddigitacao_cadastro' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
    }
    public function bairro(): BelongsTo
    {
        return $this->belongsTo(Bairros::class, 'idbairro');
    }
    public function ra(): BelongsTo
    {
        return $this->belongsTo(ra::class, 'idra');
    }
    public function logradouro(): BelongsTo
    {
        return $this->belongsTo(logradouro::class, 'idlogradouro');
    }
    public function poste(): BelongsTo
    {
        return $this->belongsTo(poste::class, 'idposte');
    }
    public function suporte(): BelongsTo
    {
        return $this->belongsTo(suporte::class, 'idsuporte');
    }
    public function luminaria(): BelongsTo
    {
        return $this->belongsTo(luminaria::class, 'idluminaria');
    }
    public function lampada(): BelongsTo
    {
        return $this->belongsTo(lampada::class, 'idlampada');
    }
    public function reator(): BelongsTo
    {
        return $this->belongsTo(reator::class, 'idreator');
    }
    public function rele(): BelongsTo
    {
        return $this->belongsTo(rele::class, 'idrele');
    }
    public function rede(): BelongsTo
    {
        return $this->belongsTo(rede::class, 'idrede');
    }
    public function transformador(): BelongsTo
    {
        return $this->belongsTo(transformador::class, 'idtransformador');
    }
    public function medidor(): BelongsTo
    {
        return $this->belongsTo(medidor::class, 'idmedidor');
    }
    public function objetoiluminado(): BelongsTo
    {
        return $this->belongsTo(objeto_iluminado::class, 'idobjetoiluminado');
    }
    public function tarifa(): BelongsTo
    {
        return $this->belongsTo(tarifa::class, 'idtarifa');
    }
    public function usuarioi(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuarioi');
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
