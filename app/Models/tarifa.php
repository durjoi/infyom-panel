<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class tarifa
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property string tipo
 * @property integer idmeses
 * @property integer ano_referencia
 * @property number valor
 * @property number aliquota
 * @property string resolucao_annel
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class tarifa extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'tarifas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'tipo',
        'idmeses',
        'ano_referencia',
        'valor',
        'aliquota',
        'resolucao_annel',
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
        'tipo' => 'string',
        'idmeses' => 'integer',
        'ano_referencia' => 'integer',
        'valor' => 'float',
        'aliquota' => 'float',
        'resolucao_annel' => 'string',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo' => 'required',
        'idmeses' => 'required',
        'ano_referencia' => 'required',
        'valor' => 'required',
        'aliquota' => 'required',
        'incluidoem' => 'required',
        'idusuario' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
    public function meses(): BelongsTo
    {
        return $this->belongsTo(meses::class, 'idmeses');
    }
    public  function relationsName(){
        $reflector = new \ReflectionClass($this);
        $relations = [];
        foreach ($reflector->getMethods() as $reflectionMethod) {
            $returnType = $reflectionMethod->getReturnType();
            if ($returnType) {
                if (in_array(class_basename($returnType->getName()), ['HasOne', 'HasMany', 'BelongsTo', 'BelongsToMany', 'MorphToMany', 'MorphTo'])) {
                    $relations[] = $reflectionMethod;
                }
            }
        }

        return $relations;
    }
}
