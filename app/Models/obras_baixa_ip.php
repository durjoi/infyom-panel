<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class obras_baixa_ip
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property integer idcidade
 * @property integer idobras
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
 * @property integer luminaria_numero
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
 * @property string situacao
 * @property string|\Carbon\Carbon data_atualizado
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuarioi
 * @property integer idtiposolicitacao
 * @property string poste_anterior
 * @property string poste_posterior
 * @property integer idsuporte_anterior
 * @property integer idluminaria_anterior
 * @property integer idlampada_anterior
 * @property integer idlampada_anterior_quantidade
 * @property integer idreator_anterior
 * @property string fabricante_luminaria
 * @property string modelo_luminaria
 * @property string altura_poste
 * @property string modelo_poste
 * @property string cor_poste
 * @property string comprimento_braco
 * @property string propriedade_poste
 * @property string telegestao
 */
class obras_baixa_ip extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'obras_baixa_ips';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idobras',
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
        'situacao',
        'data_atualizado',
        'incluidoem',
        'idusuarioi',
        'idtiposolicitacao',
        'poste_anterior',
        'poste_posterior',
        'idsuporte_anterior',
        'idluminaria_anterior',
        'idlampada_anterior',
        'idlampada_anterior_quantidade',
        'idreator_anterior',
        'fabricante_luminaria',
        'modelo_luminaria',
        'altura_poste',
        'modelo_poste',
        'cor_poste',
        'comprimento_braco',
        'propriedade_poste',
        'telegestao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'idobras' => 'integer',
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
        'luminaria_numero' => 'integer',
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
        'situacao' => 'string',
        'data_atualizado' => 'datetime',
        'incluidoem' => 'datetime',
        'idusuarioi' => 'integer',
        'idtiposolicitacao' => 'integer',
        'poste_anterior' => 'string',
        'poste_posterior' => 'string',
        'idsuporte_anterior' => 'integer',
        'idluminaria_anterior' => 'integer',
        'idlampada_anterior' => 'integer',
        'idlampada_anterior_quantidade' => 'integer',
        'idreator_anterior' => 'integer',
        'fabricante_luminaria' => 'string',
        'modelo_luminaria' => 'string',
        'altura_poste' => 'string',
        'modelo_poste' => 'string',
        'cor_poste' => 'string',
        'comprimento_braco' => 'string',
        'propriedade_poste' => 'string',
        'telegestao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'idobras' => 'required',
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
        'incluidoem' => 'required',
        'idusuarioi' => 'required',
        'idtiposolicitacao' => 'required',
        'poste_anterior' => 'required',
        'poste_posterior' => 'required',
        'idsuporte_anterior' => 'required',
        'idluminaria_anterior' => 'required',
        'idlampada_anterior' => 'required',
        'idlampada_anterior_quantidade' => 'required',
        'idreator_anterior' => 'required'
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
    }
    public function obras(): BelongsTo
    {
        return $this->belongsTo(obras::class, 'idobras');
    }
    public function ra(): BelongsTo
    {
        return $this->belongsTo(ra::class, 'idra');
    }
    public function bairro(): BelongsTo
    {
        return $this->belongsTo(Bairros::class, 'idbairro');
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
    public function tiposolicitacao(): BelongsTo
    {
        return $this->belongsTo(tipo_solicitacao::class, 'idtiposolicitacao');
    }
    public function suporte_anterior(): BelongsTo
    {
        return $this->belongsTo(suporte::class, 'idsuporte_anterior');
    }
    public function luminaria_anterior(): BelongsTo
    {
        return $this->belongsTo(luminaria::class, 'idluminaria_anterior');
    }
    public function lampada_anterior(): BelongsTo
    {
        return $this->belongsTo(lampada::class, 'idlampada_anterior');
    }
    public function reator_anterior(): BelongsTo
    {
        return $this->belongsTo(reator::class, 'idreator_anterior');
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
