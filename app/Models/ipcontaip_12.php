<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class ipcontaip_12
 * @package App\Models
 * @version May 24, 2020, 8:59 am UTC
 *
 * @property integer idcidade
 * @property string tipo_reg
 * @property string cnpj
 * @property number cod_cliente
 * @property number cod_contrato
 * @property number cod_multiservico
 * @property string num_cod_pag_cta_coletivo
 * @property string num_fatura
 * @property number codigo_instalacao
 * @property string cod_classe_subclasse
 * @property string cod_tarifa
 * @property string tensao_fornecimento
 * @property string data_fatura
 * @property string data_vencimento
 * @property string data_leit_anterior
 * @property string data_leit_atual
 * @property string tipo_fatura
 * @property string sinal_do_saldo_da_fatura
 * @property number saldo_da_fatura
 * @property number valor_do_icms
 * @property number base_calculo_icms
 * @property number aliquota_icms
 * @property number perda_transformacao
 * @property number fator_de_potencia
 * @property number valor_da_demanda_contratada
 * @property number valor_da_demanda_contratada_na_ponta
 * @property number valor_da_demanda_contratada_fora_de_ponta
 * @property number valor_do_pis_fatura
 * @property number valor_do_cofins_fatura
 */
class ipcontaip_12 extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'ipcontaip_12s';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'tipo_reg',
        'cnpj',
        'cod_cliente',
        'cod_contrato',
        'cod_multiservico',
        'num_cod_pag_cta_coletivo',
        'num_fatura',
        'codigo_instalacao',
        'cod_classe_subclasse',
        'cod_tarifa',
        'tensao_fornecimento',
        'data_fatura',
        'data_vencimento',
        'data_leit_anterior',
        'data_leit_atual',
        'tipo_fatura',
        'sinal_do_saldo_da_fatura',
        'saldo_da_fatura',
        'valor_do_icms',
        'base_calculo_icms',
        'aliquota_icms',
        'perda_transformacao',
        'fator_de_potencia',
        'valor_da_demanda_contratada',
        'valor_da_demanda_contratada_na_ponta',
        'valor_da_demanda_contratada_fora_de_ponta',
        'valor_do_pis_fatura',
        'valor_do_cofins_fatura'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'tipo_reg' => 'string',
        'cnpj' => 'string',
        'cod_cliente' => 'float',
        'cod_contrato' => 'float',
        'cod_multiservico' => 'float',
        'num_cod_pag_cta_coletivo' => 'string',
        'num_fatura' => 'string',
        'codigo_instalacao' => 'float',
        'cod_classe_subclasse' => 'string',
        'cod_tarifa' => 'string',
        'tensao_fornecimento' => 'string',
        'data_fatura' => 'date',
        'data_vencimento' => 'date',
        'data_leit_anterior' => 'date',
        'data_leit_atual' => 'date',
        'tipo_fatura' => 'string',
        'sinal_do_saldo_da_fatura' => 'string',
        'saldo_da_fatura' => 'float',
        'valor_do_icms' => 'float',
        'base_calculo_icms' => 'float',
        'aliquota_icms' => 'float',
        'perda_transformacao' => 'float',
        'fator_de_potencia' => 'float',
        'valor_da_demanda_contratada' => 'float',
        'valor_da_demanda_contratada_na_ponta' => 'float',
        'valor_da_demanda_contratada_fora_de_ponta' => 'float',
        'valor_do_pis_fatura' => 'float',
        'valor_do_cofins_fatura' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'cod_cliente' => 'required',
        'cod_contrato' => 'required',
        'cod_multiservico' => 'required',
        'codigo_instalacao' => 'required',
        'saldo_da_fatura' => 'required',
        'valor_do_icms' => 'required',
        'base_calculo_icms' => 'required',
        'aliquota_icms' => 'required',
        'perda_transformacao' => 'required',
        'fator_de_potencia' => 'required',
        'valor_da_demanda_contratada' => 'required',
        'valor_da_demanda_contratada_na_ponta' => 'required',
        'valor_da_demanda_contratada_fora_de_ponta' => 'required',
        'valor_do_pis_fatura' => 'required',
        'valor_do_cofins_fatura' => 'required'
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
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
