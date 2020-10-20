<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class ipcontaip_estimada
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property integer idcidade
 * @property string nome_concessionaria
 * @property string nome
 * @property string nome_compl
 * @property integer idsecretaria
 * @property string num_fatura
 * @property string data_vencimento
 * @property string endereco_rua_av
 * @property string endereco_compl
 * @property string endereco_bairro
 * @property string endereco_municipio_uf_cep
 * @property number cod_contrato
 * @property number qtd_conceito
 * @property string tensao_fornecimento
 * @property number multa
 * @property number juros
 * @property number outros
 * @property number variacao_percentual
 * @property string tipo_fatura
 * @property string cod_tarifa
 * @property number preco_conceito
 * @property number valor_final_com_imposto
 * @property number valor_a_ser_faturado
 * @property integer contaipano
 * @property string contaipmes
 * @property string contaipdatainclusao
 * @property integer idusuario
 * @property string novo_contrato_cadastrado
 * @property string pagamento
 * @property string versao_mobile
 * @property string segmento
 * @property string fatura_numero
 * @property string fatura_mes
 * @property integer fatura_ano
 * @property integer idfillowup
 * @property integer conta_entregue_fisicamente
 * @property string status_conta_fisica
 */
class ipcontaip_estimada extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'ipcontaip_estimadas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'nome_concessionaria',
        'nome',
        'nome_compl',
        'idsecretaria',
        'num_fatura',
        'data_vencimento',
        'endereco_rua_av',
        'endereco_compl',
        'endereco_bairro',
        'endereco_municipio_uf_cep',
        'cod_contrato',
        'qtd_conceito',
        'tensao_fornecimento',
        'multa',
        'juros',
        'outros',
        'variacao_percentual',
        'tipo_fatura',
        'cod_tarifa',
        'preco_conceito',
        'valor_final_com_imposto',
        'valor_a_ser_faturado',
        'contaipano',
        'contaipmes',
        'contaipdatainclusao',
        'idusuario',
        'novo_contrato_cadastrado',
        'pagamento',
        'versao_mobile',
        'segmento',
        'fatura_numero',
        'fatura_mes',
        'fatura_ano',
        'idfillowup',
        'conta_entregue_fisicamente',
        'status_conta_fisica'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'nome_concessionaria' => 'string',
        'nome' => 'string',
        'nome_compl' => 'string',
        'idsecretaria' => 'integer',
        'num_fatura' => 'string',
        'data_vencimento' => 'date',
        'endereco_rua_av' => 'string',
        'endereco_compl' => 'string',
        'endereco_bairro' => 'string',
        'endereco_municipio_uf_cep' => 'string',
        'cod_contrato' => 'float',
        'qtd_conceito' => 'float',
        'tensao_fornecimento' => 'string',
        'multa' => 'float',
        'juros' => 'float',
        'outros' => 'float',
        'variacao_percentual' => 'float',
        'tipo_fatura' => 'string',
        'cod_tarifa' => 'string',
        'preco_conceito' => 'float',
        'valor_final_com_imposto' => 'float',
        'valor_a_ser_faturado' => 'float',
        'contaipano' => 'integer',
        'contaipmes' => 'string',
        'contaipdatainclusao' => 'date',
        'idusuario' => 'integer',
        'novo_contrato_cadastrado' => 'string',
        'pagamento' => 'string',
        'versao_mobile' => 'string',
        'segmento' => 'string',
        'fatura_numero' => 'string',
        'fatura_mes' => 'string',
        'fatura_ano' => 'integer',
        'idfillowup' => 'integer',
        'conta_entregue_fisicamente' => 'integer',
        'status_conta_fisica' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'nome_concessionaria' => 'required',
        'nome' => 'required',
        'nome_compl' => 'required',
        'idsecretaria' => 'required',
        'num_fatura' => 'required',
        'data_vencimento' => 'required',
        'endereco_rua_av' => 'required',
        'endereco_bairro' => 'required',
        'endereco_municipio_uf_cep' => 'required',
        'cod_contrato' => 'required',
        'qtd_conceito' => 'required',
        'tensao_fornecimento' => 'required',
        'multa' => 'required',
        'juros' => 'required',
        'outros' => 'required',
        'variacao_percentual' => 'required',
        'preco_conceito' => 'required',
        'valor_final_com_imposto' => 'required',
        'valor_a_ser_faturado' => 'required',
        'contaipano' => 'required',
        'contaipmes' => 'required',
        'contaipdatainclusao' => 'required',
        'idusuario' => 'required',
        'pagamento' => 'required',
        'segmento' => 'required',
        'fatura_numero' => 'required',
        'fatura_mes' => 'required',
        'fatura_ano' => 'required',
        'idfillowup' => 'required',
        'conta_entregue_fisicamente' => 'required',
        'status_conta_fisica' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
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
