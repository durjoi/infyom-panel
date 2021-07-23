<?php

namespace App\Models;

use Spatie\Activitylog\Traits\LogsActivity;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PedidoMaterial
 * @package App\Models
 * @version June 10, 2020, 8:42 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection pedidoMaterialItems
 * @property string aplicacao_obra
 * @property string engenheiro_eletricista
 * @property string|\Carbon\Carbon data
 * @property integer numero
 * @property string centro_de_custo
 * @property string almoxarifado
 * @property string telefone
 * @property string celular
 * @property string cnpj
 * @property string inscricao_estadual
 * @property string solicitante
 * @property string icms
 * @property integer juros_mes
 * @property string email
 * @property string endereco_entrega
 * @property string bairro_entrega
 * @property string cep_entrega
 * @property string cnpj_entrega
 * @property string cidade_entrega
 * @property string telefone_contato
 */
class PedidoMaterial extends Model
{
    use SoftDeletes;

    use LogsActivity;

    public $table = 'pedido_material';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'aplicacao_obra',
        'engenheiro_eletricista',
        'data',
        'numero',
        'centro_de_custo',
        'almoxarifado',
        'telefone',
        'celular',
        'cnpj',
        'inscricao_estadual',
        'solicitante',
        'icms',
        'juros_mes',
        'email',
        'endereco_entrega',
        'bairro_entrega',
        'cep_entrega',
        'cnpj_entrega',
        'cidade_entrega',
        'telefone_contato'
    ];

    protected static $logAttributes = ['*'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'aplicacao_obra' => 'string',
        'engenheiro_eletricista' => 'string',
        'data' => 'datetime',
        'numero' => 'integer',
        'centro_de_custo' => 'string',
        'almoxarifado' => 'string',
        'telefone' => 'string',
        'celular' => 'string',
        'cnpj' => 'string',
        'inscricao_estadual' => 'string',
        'solicitante' => 'string',
        'icms' => 'string',
        'juros_mes' => 'integer',
        'email' => 'string',
        'endereco_entrega' => 'string',
        'bairro_entrega' => 'string',
        'cep_entrega' => 'string',
        'cnpj_entrega' => 'string',
        'cidade_entrega' => 'string',
        'telefone_contato' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'aplicacao_obra' => 'required',
        'engenheiro_eletricista' => 'required',
        'numero' => 'required',
        'centro_de_custo' => 'required',
        'almoxarifado' => 'required',
        'telefone' => 'required',
        'celular' => 'required',
        'cnpj' => 'required',
        'inscricao_estadual' => 'required',
        'solicitante' => 'required',
        'icms' => 'required',
        'juros_mes' => 'required',
        'email' => 'required',
        'endereco_entrega' => 'required',
        'bairro_entrega' => 'required',
        'cep_entrega' => 'required',
        'cnpj_entrega' => 'required',
        'cidade_entrega' => 'required',
        'telefone_contato' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pedidoMaterialItems()
    {
        return $this->hasMany(\App\Models\PedidoMaterialItem::class, 'pedido_material_id');
    }
}
