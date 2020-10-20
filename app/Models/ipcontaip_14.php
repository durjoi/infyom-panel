<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class ipcontaip_14
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property integer idcidade
 * @property string tipo_reg
 * @property string cnpj
 * @property number cod_cliente
 * @property number cod_contrato
 * @property number cod_multiservico
 * @property string num_doc_pag_coletiva
 * @property string num_fatura
 * @property string cod_conceito
 * @property number qtd_conceito
 * @property string preco_conceito
 * @property string sinal_do_valor_conceitos
 * @property number valor_final_com_imposto
 * @property string descricao_conceito
 */
class ipcontaip_14 extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'ipcontaip_14s';

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
        'num_doc_pag_coletiva',
        'num_fatura',
        'cod_conceito',
        'qtd_conceito',
        'preco_conceito',
        'sinal_do_valor_conceitos',
        'valor_final_com_imposto',
        'descricao_conceito'
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
        'num_doc_pag_coletiva' => 'string',
        'num_fatura' => 'string',
        'cod_conceito' => 'string',
        'qtd_conceito' => 'float',
        'preco_conceito' => 'string',
        'sinal_do_valor_conceitos' => 'string',
        'valor_final_com_imposto' => 'float',
        'descricao_conceito' => 'string'
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
        'qtd_conceito' => 'required',
        'valor_final_com_imposto' => 'required'
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
