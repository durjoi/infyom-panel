<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class logradouro
 * @package App\Models
 * @version May 24, 2020, 9:01 am UTC
 *
 * @property integer idcidade
 * @property integer logradouro_codigo
 * @property integer logradouro_codigodiv
 * @property integer idlogradourotipo
 * @property string logradouro_titulo
 * @property string logradouro_preposicao
 * @property string logradouro_descricao
 * @property string logradouro_conjunto
 * @property string logradouro_cep
 * @property string logradouro_estado
 * @property integer idbairro
 * @property string trafego_pedestres
 * @property string trafego_veiculos
 * @property string importancia_via
 * @property string arborizacao
 * @property integer idempresa
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class logradouro extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'logradouros';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'logradouro_codigo',
        'logradouro_codigodiv',
        'idlogradourotipo',
        'logradouro_titulo',
        'logradouro_preposicao',
        'logradouro_descricao',
        'logradouro_conjunto',
        'logradouro_cep',
        'logradouro_estado',
        'idbairro',
        'trafego_pedestres',
        'trafego_veiculos',
        'importancia_via',
        'arborizacao',
        'idempresa',
        'incluidoem',
        'idusuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'logradouro_codigo' => 'integer',
        'logradouro_codigodiv' => 'integer',
        'idlogradourotipo' => 'integer',
        'logradouro_titulo' => 'string',
        'logradouro_preposicao' => 'string',
        'logradouro_descricao' => 'string',
        'logradouro_conjunto' => 'string',
        'logradouro_cep' => 'string',
        'logradouro_estado' => 'string',
        'idbairro' => 'integer',
        'trafego_pedestres' => 'string',
        'trafego_veiculos' => 'string',
        'importancia_via' => 'string',
        'arborizacao' => 'string',
        'idempresa' => 'integer',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'logradouro_codigo' => 'required',
        'logradouro_codigodiv' => 'required',
        'idlogradourotipo' => 'required',
        'logradouro_descricao' => 'required',
        'logradouro_estado' => 'required',
        'idbairro' => 'required',
        'trafego_pedestres' => 'required',
        'trafego_veiculos' => 'required',
        'importancia_via' => 'required',
        'arborizacao' => 'required',
        'idempresa' => 'required',
        'incluidoem' => 'required',
        'idusuario' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
    }
    public function logradourotipo(): BelongsTo
    {
        return $this->belongsTo(logradouro_tipo::class, 'idlogradourotipo');
    }
    public function bairro(): BelongsTo
    {
        return $this->belongsTo(Bairros::class, 'idbairro');
    }
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresas::class, 'idempresa');
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
