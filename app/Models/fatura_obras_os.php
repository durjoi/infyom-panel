<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class fatura_obras_os
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property integer idcidade
 * @property integer idfaturaobras
 * @property integer idobras
 * @property number valor_os
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class fatura_obras_os extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'fatura_obras_os';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idfaturaobras',
        'idobras',
        'valor_os',
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
        'idfaturaobras' => 'integer',
        'idobras' => 'integer',
        'valor_os' => 'float',
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
        'idfaturaobras' => 'required',
        'idobras' => 'required',
        'valor_os' => 'required',
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
    public function faturaobras(): BelongsTo
    {
        return $this->belongsTo(fatura_obras::class, 'idfaturaobras');
    }
    public function obras(): BelongsTo
    {
        return $this->belongsTo(obras::class, 'idobras');
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
