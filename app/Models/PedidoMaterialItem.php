<?php

namespace App\Models;

use Spatie\Activitylog\Traits\LogsActivity;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PedidoMaterialItem
 * @package App\Models
 * @version June 10, 2020, 8:32 pm UTC
 *
 * @property \App\Models\PedidoMaterial pedidoMaterial
 * @property string descricao
 * @property integer unidade
 * @property integer saldo_estoque
 * @property integer quantidade_solicitada
 * @property integer preco_anterior
 * @property integer total
 * @property string observacoes
 * @property integer pedido_material_id
 */
class PedidoMaterialItem extends Model
{
    use SoftDeletes;

    use LogsActivity;

    public $table = 'pedido_material_item';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descricao',
        'unidade',
        'saldo_estoque',
        'quantidade_solicitada',
        'preco_anterior',
        'total',
        'observacoes',
        'pedido_material_id'
    ];

    protected static $logAttributes = ['*'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descricao' => 'string',
        'unidade' => 'integer',
        'saldo_estoque' => 'integer',
        'quantidade_solicitada' => 'integer',
        'preco_anterior' => 'integer',
        'total' => 'integer',
        'observacoes' => 'string',
        'pedido_material_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descricao' => 'required',
        'unidade' => 'required',
        'saldo_estoque' => 'required',
        'quantidade_solicitada' => 'required',
        'preco_anterior' => 'required',
        'total' => 'required',
        'observacoes' => 'required',
        'pedido_material_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pedidoMaterial()
    {
        return $this->belongsTo(\App\Models\PedidoMaterial::class, 'pedido_material_id');
    }
}
