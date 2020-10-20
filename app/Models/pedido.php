<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class pedido
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property integer idcidade
 * @property integer idpedidocabecalho
 * @property string|\Carbon\Carbon data_pedido
 * @property integer idobrasestoque
 * @property integer pedido_encaminhado
 * @property string|\Carbon\Carbon pedido_encaminhado_data
 * @property string pedido_encaminhado_observacao
 * @property integer pedido_fechado
 * @property string|\Carbon\Carbon pedido_fechado_data
 * @property string pedido_fechado_observacao
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class pedido extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'pedidos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idpedidocabecalho',
        'data_pedido',
        'idobrasestoque',
        'pedido_encaminhado',
        'pedido_encaminhado_data',
        'pedido_encaminhado_observacao',
        'pedido_fechado',
        'pedido_fechado_data',
        'pedido_fechado_observacao',
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
        'idpedidocabecalho' => 'integer',
        'data_pedido' => 'datetime',
        'idobrasestoque' => 'integer',
        'pedido_encaminhado' => 'integer',
        'pedido_encaminhado_data' => 'datetime',
        'pedido_encaminhado_observacao' => 'string',
        'pedido_fechado' => 'integer',
        'pedido_fechado_data' => 'datetime',
        'pedido_fechado_observacao' => 'string',
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
        'idpedidocabecalho' => 'required',
        'data_pedido' => 'required',
        'idobrasestoque' => 'required',
        'pedido_encaminhado' => 'required',
        'pedido_encaminhado_data' => 'required',
        'pedido_fechado' => 'required',
        'pedido_fechado_data' => 'required',
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
    public function pedidocabecalho(): BelongsTo
    {
        return $this->belongsTo(pedido_cabecalho::class, 'idpedidocabecalho');
    }
    public function obrasestoque(): BelongsTo
    {
        return $this->belongsTo(obras_estoque::class, 'idobrasestoque');
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
