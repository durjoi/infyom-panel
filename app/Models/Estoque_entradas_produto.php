<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Estoque_entradas_produto
 * @package App\Models
 * @version May 24, 2020, 9:01 am UTC
 *
 * @property string quantidade
 * @property string dev_mat_novo_def
 * @property string dev_mat_n_apl
 * @property string dev_mat_apl
 * @property string valor_unitario
 * @property string valor_total
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_entrada
 * @property integer id_producto
 * @property integer id_cidade
 * @property integer id_usuario
 */
class Estoque_entradas_produto extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'estoque_entradas_produtos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'quantidade',
        'dev_mat_novo_def',
        'dev_mat_n_apl',
        'dev_mat_apl',
        'valor_unitario',
        'valor_total',
        'incluidodoem',
        'id_entrada',
        'id_producto',
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
        'quantidade' => 'string',
        'dev_mat_novo_def' => 'string',
        'dev_mat_n_apl' => 'string',
        'dev_mat_apl' => 'string',
        'valor_unitario' => 'string',
        'valor_total' => 'string',
        'incluidodoem' => 'datetime',
        'id_entrada' => 'integer',
        'id_producto' => 'integer',
        'id_cidade' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'quantidade' => 'required',
        'dev_mat_novo_def' => 'required',
        'dev_mat_n_apl' => 'required',
        'dev_mat_apl' => 'required',
        'valor_unitario' => 'required',
        'valor_total' => 'required',
        'incluidodoem' => 'required',
        'id_entrada' => 'required',
        'id_producto' => 'required',
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
    public function produto(): BelongsTo
    {
        return $this->belongsTo(produtos::class, 'id_producto');
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
