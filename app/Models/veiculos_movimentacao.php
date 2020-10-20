<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class veiculos_movimentacao
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property integer idcidade
 * @property integer idveiculos
 * @property string|\Carbon\Carbon saida
 * @property string|\Carbon\Carbon retorno
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class veiculos_movimentacao extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'veiculos_movimentacaos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idveiculos',
        'saida',
        'retorno',
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
        'idveiculos' => 'integer',
        'saida' => 'datetime',
        'retorno' => 'datetime',
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
        'idveiculos' => 'required',
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
    public function veiculos(): BelongsTo
    {
        return $this->belongsTo(veiculos::class, 'idveiculos');
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
