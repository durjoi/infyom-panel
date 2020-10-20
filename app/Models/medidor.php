<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class medidor
 * @package App\Models
 * @version May 24, 2020, 9:01 am UTC
 *
 * @property integer idcidade
 * @property string numero
 * @property integer idlogradouro
 * @property integer idbairro
 * @property string poste_numero
 * @property string contrato
 * @property number capacidade_medicao
 * @property number capacidade_disjuntor
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class medidor extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'medidors';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'numero',
        'idlogradouro',
        'idbairro',
        'poste_numero',
        'contrato',
        'capacidade_medicao',
        'capacidade_disjuntor',
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
        'numero' => 'string',
        'idlogradouro' => 'integer',
        'idbairro' => 'integer',
        'poste_numero' => 'string',
        'contrato' => 'string',
        'capacidade_medicao' => 'float',
        'capacidade_disjuntor' => 'float',
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
        'numero' => 'required',
        'idlogradouro' => 'required',
        'idbairro' => 'required',
        'capacidade_medicao' => 'required',
        'capacidade_disjuntor' => 'required',
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
    public function logradouro(): BelongsTo
    {
        return $this->belongsTo(logradouro::class, 'idlogradouro');
    }
    public function bairro(): BelongsTo
    {
        return $this->belongsTo(Bairros::class, 'idbairro');
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
