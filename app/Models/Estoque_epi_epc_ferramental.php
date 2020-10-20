<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Estoque_epi_epc_ferramental
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property string autorizado_por
 * @property string actualicao
 * @property string observacao
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_operacao
 * @property integer id_empregados
 * @property integer id_cidade
 * @property integer id_usuario
 */
class Estoque_epi_epc_ferramental extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'estoque_epi_epc_ferramentals';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'autorizado_por',
        'actualicao',
        'observacao',
        'incluidodoem',
        'id_operacao',
        'id_empregados',
        'id_cidade',
        'id_usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'autorizado_por' => 'string',
        'actualicao' => 'string',
        'observacao' => 'string',
        'incluidodoem' => 'datetime',
        'id_operacao' => 'integer',
        'id_empregados' => 'integer',
        'id_cidade' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'autorizado_por' => 'required',
        'actualicao' => 'required',
        'observacao' => 'required',
        'incluidodoem' => 'required',
        'id_operacao' => 'required',
        'id_empregados' => 'required',
        'id_cidade' => 'required',
        'id_usuario' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'id_usuario');
    }
    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'id_cidade');
    }
    public function operacao(): BelongsTo
    {
        return $this->belongsTo(operacao::class, 'id_operacao');
    }
    public function empregados(): BelongsTo
    {
        return $this->belongsTo(Empregados::class, 'id_empregados');
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
