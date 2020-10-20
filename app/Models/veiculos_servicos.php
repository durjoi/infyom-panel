<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class veiculos_servicos
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property integer idcidade
 * @property integer idveiculos
 * @property string data_servico
 * @property string descricao_servico
 * @property number valor_total
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class veiculos_servicos extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'veiculos_servicos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idveiculos',
        'data_servico',
        'descricao_servico',
        'valor_total',
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
        'data_servico' => 'date',
        'descricao_servico' => 'string',
        'valor_total' => 'float',
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
        'data_servico' => 'required',
        'descricao_servico' => 'required',
        'valor_total' => 'required',
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
