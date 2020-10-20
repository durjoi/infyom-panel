<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class ipcontaip_13
 * @package App\Models
 * @version May 24, 2020, 8:59 am UTC
 *
 * @property integer idcidade
 * @property string tipo_reg
 * @property string cnpj
 * @property number cod_cliente
 * @property number cod_contrato
 * @property number cod_multiservico
 * @property string num_doc_pag_coletiva
 * @property string num_fatura
 * @property string num_medidor
 * @property string descr_funcao_reduzida
 * @property string data_leit_anterior
 * @property string data_leit_atual
 * @property number leitura
 * @property number constante
 * @property string sinal_do_ajuste
 * @property number ajuste
 * @property number csu_dem_lida
 * @property number csu_dem_lida_com_ajuste
 * @property string descricao_funcao
 */
class ipcontaip_13 extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'ipcontaip_13s';

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
        'num_medidor',
        'descr_funcao_reduzida',
        'data_leit_anterior',
        'data_leit_atual',
        'leitura',
        'constante',
        'sinal_do_ajuste',
        'ajuste',
        'csu_dem_lida',
        'csu_dem_lida_com_ajuste',
        'descricao_funcao'
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
        'num_medidor' => 'string',
        'descr_funcao_reduzida' => 'string',
        'data_leit_anterior' => 'date',
        'data_leit_atual' => 'date',
        'leitura' => 'float',
        'constante' => 'float',
        'sinal_do_ajuste' => 'string',
        'ajuste' => 'float',
        'csu_dem_lida' => 'float',
        'csu_dem_lida_com_ajuste' => 'float',
        'descricao_funcao' => 'string'
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
        'leitura' => 'required',
        'constante' => 'required',
        'ajuste' => 'required',
        'csu_dem_lida' => 'required',
        'csu_dem_lida_com_ajuste' => 'required'
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
