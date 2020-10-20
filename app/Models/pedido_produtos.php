<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class pedido_produtos
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property integer idcidade
 * @property integer idpedido
 * @property integer idprodutos
 * @property integer qtd_solicitada
 * @property integer qtd_recebida
 * @property string observacoes
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class pedido_produtos extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'pedido_produtos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idpedido',
        'idprodutos',
        'qtd_solicitada',
        'qtd_recebida',
        'observacoes',
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
        'idpedido' => 'integer',
        'idprodutos' => 'integer',
        'qtd_solicitada' => 'integer',
        'qtd_recebida' => 'integer',
        'observacoes' => 'string',
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
        'idpedido' => 'required',
        'idprodutos' => 'required',
        'qtd_solicitada' => 'required',
        'qtd_recebida' => 'required',
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
    public function pedido(): BelongsTo
    {
        return $this->belongsTo(pedido::class, 'idpedido');
    }
    public function produtos(): BelongsTo
    {
        return $this->belongsTo(produtos::class, 'idprodutos');
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
