<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Digitacao_cadastros
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property string cidade
 * @property string bairro
 * @property string lograduro
 * @property integer visavis
 * @property string referncia
 * @property string transformador
 * @property string medidor
 * @property string poste_numero
 * @property integer luminaria_numero
 * @property string coordenada_x
 * @property string coordenada_y
 * @property string poste_propriedade
 * @property string poste_status
 * @property string fase_ligacao
 * @property string luminaria_propriedade
 * @property string luminaria_estado
 * @property integer quantidade_lampada
 * @property string observacoes
 * @property string data_cadastro
 * @property string cadastrador
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer idra
 * @property integer id_logradouro_tipo
 * @property integer id_rede
 * @property integer id_poste
 * @property integer id_lampada
 * @property integer id_rele
 * @property integer id_reator
 * @property integer id_objeto_iluminado
 * @property integer id_usuario
 */
class Digitacao_cadastros extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'digitacao_cadastros';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'cidade',
        'bairro',
        'lograduro',
        'visavis',
        'referncia',
        'transformador',
        'medidor',
        'poste_numero',
        'luminaria_numero',
        'coordenada_x',
        'coordenada_y',
        'poste_propriedade',
        'poste_status',
        'fase_ligacao',
        'luminaria_propriedade',
        'luminaria_estado',
        'quantidade_lampada',
        'observacoes',
        'data_cadastro',
        'cadastrador',
        'incluidodoem',
        'idra',
        'id_logradouro_tipo',
        'id_rede',
        'id_poste',
        'id_lampada',
        'id_rele',
        'id_reator',
        'id_objeto_iluminado',
        'id_usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cidade' => 'string',
        'bairro' => 'string',
        'lograduro' => 'string',
        'visavis' => 'integer',
        'referncia' => 'string',
        'transformador' => 'string',
        'medidor' => 'string',
        'poste_numero' => 'string',
        'luminaria_numero' => 'integer',
        'coordenada_x' => 'string',
        'coordenada_y' => 'string',
        'poste_propriedade' => 'string',
        'poste_status' => 'string',
        'fase_ligacao' => 'string',
        'luminaria_propriedade' => 'string',
        'luminaria_estado' => 'string',
        'quantidade_lampada' => 'integer',
        'observacoes' => 'string',
        'data_cadastro' => 'date',
        'cadastrador' => 'string',
        'incluidodoem' => 'datetime',
        'idra' => 'integer',
        'id_logradouro_tipo' => 'integer',
        'id_rede' => 'integer',
        'id_poste' => 'integer',
        'id_lampada' => 'integer',
        'id_rele' => 'integer',
        'id_reator' => 'integer',
        'id_objeto_iluminado' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cidade' => 'required',
        'bairro' => 'required',
        'lograduro' => 'required',
        'visavis' => 'required',
        'referncia' => 'required',
        'transformador' => 'required',
        'medidor' => 'required',
        'poste_numero' => 'required',
        'luminaria_numero' => 'required',
        'coordenada_x' => 'required',
        'coordenada_y' => 'required',
        'poste_propriedade' => 'required',
        'poste_status' => 'required',
        'fase_ligacao' => 'required',
        'luminaria_propriedade' => 'required',
        'luminaria_estado' => 'required',
        'quantidade_lampada' => 'required',
        'observacoes' => 'required',
        'data_cadastro' => 'required',
        'cadastrador' => 'required',
        'incluidodoem' => 'required',
        'idra' => 'required',
        'id_logradouro_tipo' => 'required',
        'id_rede' => 'required',
        'id_poste' => 'required',
        'id_lampada' => 'required',
        'id_rele' => 'required',
        'id_reator' => 'required',
        'id_objeto_iluminado' => 'required',
        'id_usuario' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'id_usuario');
    }
    public function ra(): BelongsTo
    {
        return $this->belongsTo(ra::class, 'idra');
    }
    public function logradouro_tipo(): BelongsTo
    {
        return $this->belongsTo(logradouro_tipo::class, 'id_logradouro_tipo');
    }
    public function rede(): BelongsTo
    {
        return $this->belongsTo(rede::class, 'id_rede');
    }
    public function poste(): BelongsTo
    {
        return $this->belongsTo(poste::class, 'id_poste');
    }
    public function lampada(): BelongsTo
    {
        return $this->belongsTo(lampada::class, 'id_lampada');
    }
    public function rele(): BelongsTo
    {
        return $this->belongsTo(rele::class, 'id_rele');
    }
    public function reator(): BelongsTo
    {
        return $this->belongsTo(reator::class, 'id_reator');
    }
    public function objeto_iluminado(): BelongsTo
    {
        return $this->belongsTo(objeto_iluminado::class, 'id_objeto_iluminado');
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
