<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class funcip
 * @package App\Models
 * @version May 24, 2020, 8:59 am UTC
 *
 * @property integer idcidade
 * @property integer ano
 * @property integer idmeses
 * @property string modulo
 * @property number valor_estimado_pagamento
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class funcip extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'funcips';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'ano',
        'idmeses',
        'modulo',
        'valor_estimado_pagamento',
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
        'ano' => 'integer',
        'idmeses' => 'integer',
        'modulo' => 'string',
        'valor_estimado_pagamento' => 'float',
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
        'ano' => 'required',
        'idmeses' => 'required',
        'modulo' => 'required',
        'valor_estimado_pagamento' => 'required',
        'incluidoem' => 'required',
        'idusuario' => 'required'
    ];
    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
    }
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
                    $relations[] = $reflectionMethod->name;
                }
            }
        }

        return $relations;
    }
}
