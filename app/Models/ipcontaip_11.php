<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class ipcontaip_11
 * @package App\Models
 * @version May 24, 2020, 8:59 am UTC
 *
 * @property integer idcidade
 * @property string tipo_reg
 * @property string cnpj
 * @property number cod_cliente
 * @property number cod_contrato
 * @property number cod_multiservico
 * @property string compl_nome
 * @property string endereco_rua_av
 * @property string endereco_compl
 * @property string endereco_bairro
 * @property string endereco_municipio_uf_cep
 * @property number contaipano
 * @property string contaipmes
 * @property string contaipdatainclusao
 * @property string contaipusuariologin
 * @property string segmento
 */
class ipcontaip_11 extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'ipcontaip_11s';

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
        'compl_nome',
        'endereco_rua_av',
        'endereco_compl',
        'endereco_bairro',
        'endereco_municipio_uf_cep',
        'contaipano',
        'contaipmes',
        'contaipdatainclusao',
        'contaipusuariologin',
        'segmento'
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
        'compl_nome' => 'string',
        'endereco_rua_av' => 'string',
        'endereco_compl' => 'string',
        'endereco_bairro' => 'string',
        'endereco_municipio_uf_cep' => 'string',
        'contaipano' => 'float',
        'contaipmes' => 'string',
        'contaipdatainclusao' => 'date',
        'contaipusuariologin' => 'string',
        'segmento' => 'string'
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
        'contaipano' => 'required'
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
