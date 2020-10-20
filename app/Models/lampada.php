<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class lampada
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property string lampada_descricao
 * @property number lampada_potencia
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 * @property string lampada_abreveada
 * @property integer perda_rator
 */
class lampada extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'lampadas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'lampada_descricao',
        'lampada_potencia',
        'incluidoem',
        'idusuario',
        'lampada_abreveada',
        'perda_rator'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lampada_descricao' => 'string',
        'lampada_potencia' => 'float',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer',
        'lampada_abreveada' => 'string',
        'perda_rator' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lampada_descricao' => 'required',
        'lampada_potencia' => 'required',
        'incluidoem' => 'required',
        'idusuario' => 'required',
        'perda_rator' => 'required'
    ];
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
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
