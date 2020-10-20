<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Estoque_entradas
 * @package App\Models
 * @version May 24, 2020, 9:01 am UTC
 *
 * @property string data_operacao
 * @property integer numero_nf
 * @property integer numero_rm
 * @property string observacao
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_operacao
 * @property integer id_fornecedor
 * @property integer id_obras_estoque
 * @property integer id_cidade
 * @property integer id_usuario
 */
class Estoque_entradas extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'estoque_entradas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'data_operacao',
        'numero_nf',
        'numero_rm',
        'observacao',
        'incluidodoem',
        'id_operacao',
        'id_fornecedor',
        'id_obras_estoque',
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
        'data_operacao' => 'date',
        'numero_nf' => 'integer',
        'numero_rm' => 'integer',
        'observacao' => 'string',
        'incluidodoem' => 'datetime',
        'id_operacao' => 'integer',
        'id_fornecedor' => 'integer',
        'id_obras_estoque' => 'integer',
        'id_cidade' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'data_operacao' => 'required',
        'numero_nf' => 'required',
        'numero_rm' => 'required',
        'observacao' => 'required',
        'incluidodoem' => 'required',
        'id_operacao' => 'required',
        'id_fornecedor' => 'required',
        'id_obras_estoque' => 'required',
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
    public function fornecedor(): BelongsTo
    {
        return $this->belongsTo(fornecedor::class, 'id_fornecedor');
    }
    public function obras_estoque(): BelongsTo
    {
        return $this->belongsTo(obras_estoque::class, 'id_obras_estoque');
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
