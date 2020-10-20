<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Contrato_itens
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property string item
 * @property string contrato_itens_descricao
 * @property string valor_mao_obra
 * @property string valor_material
 * @property string aplicacao
 * @property integer bloqueio_material
 * @property string valor_mao_obra_anterior
 * @property string valor_material_anterior
 * @property string fatork
 * @property string fatork_operacao
 * @property string tempo_garantia
 * @property string tempo_garantia_periodo
 * @property integer codigo_produto
 * @property string|\Carbon\Carbon incluidodoem
 * @property string id_contrato
 * @property string id_unidade
 * @property string id_marca_produto
 * @property string id_cidade
 * @property integer id_usuario
 */
class Contrato_itens extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'contrato_itens';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'item',
        'contrato_itens_descricao',
        'valor_mao_obra',
        'valor_material',
        'aplicacao',
        'bloqueio_material',
        'valor_mao_obra_anterior',
        'valor_material_anterior',
        'fatork',
        'fatork_operacao',
        'tempo_garantia',
        'tempo_garantia_periodo',
        'codigo_produto',
        'incluidodoem',
        'id_contrato',
        'id_unidade',
        'id_marca_produto',
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
        'item' => 'string',
        'contrato_itens_descricao' => 'string',
        'valor_mao_obra' => 'string',
        'valor_material' => 'string',
        'aplicacao' => 'string',
        'bloqueio_material' => 'integer',
        'valor_mao_obra_anterior' => 'string',
        'valor_material_anterior' => 'string',
        'fatork' => 'string',
        'fatork_operacao' => 'string',
        'tempo_garantia' => 'string',
        'tempo_garantia_periodo' => 'string',
        'codigo_produto' => 'integer',
        'incluidodoem' => 'datetime',
        'id_contrato' => 'string',
        'id_unidade' => 'string',
        'id_marca_produto' => 'string',
        'id_cidade' => 'string',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'item' => 'required',
        'contrato_itens_descricao' => 'required',
        'valor_mao_obra' => 'required',
        'valor_material' => 'required',
        'aplicacao' => 'required',
        'bloqueio_material' => 'required',
        'valor_mao_obra_anterior' => 'required',
        'valor_material_anterior' => 'required',
        'fatork' => 'required',
        'fatork_operacao' => 'required',
        'tempo_garantia' => 'required',
        'tempo_garantia_periodo' => 'required',
        'codigo_produto' => 'required',
        'incluidodoem' => 'required',
        'id_contrato' => 'required',
        'id_unidade' => 'required',
        'id_marca_produto' => 'required',
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
    public function contrato(): BelongsTo
    {
        return $this->belongsTo(Contratos::class, 'id_contrato');
    }
    public function unidade(): BelongsTo
    {
        return $this->belongsTo(unidade::class, 'id_unidade');
    }
    public function marca(): BelongsTo
    {
        return $this->belongsTo(marca::class, 'id_marca_produto');
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
