<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class produtos
 * @package App\Models
 * @version May 24, 2020, 8:59 am UTC
 *
 * @property integer idcidade
 * @property string produtos_descricao
 * @property integer idmarca
 * @property integer idunidade
 * @property number quantidade_atual
 * @property number quantidade_minima
 * @property number valor_unitario
 * @property integer idfornecedor
 * @property integer idfabricante
 * @property string local
 * @property integer idaplicacao
 * @property string excluido
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 * @property string codigo_itens_contrato
 * @property string atualizacao_manual
 * @property integer atualizacao_manual_idusuario
 */
class produtos extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'produtos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'produtos_descricao',
        'idmarca',
        'idunidade',
        'quantidade_atual',
        'quantidade_minima',
        'valor_unitario',
        'idfornecedor',
        'idfabricante',
        'local',
        'idaplicacao',
        'excluido',
        'incluidoem',
        'idusuario',
        'codigo_itens_contrato',
        'atualizacao_manual',
        'atualizacao_manual_idusuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'produtos_descricao' => 'string',
        'idmarca' => 'integer',
        'idunidade' => 'integer',
        'quantidade_atual' => 'float',
        'quantidade_minima' => 'float',
        'valor_unitario' => 'float',
        'idfornecedor' => 'integer',
        'idfabricante' => 'integer',
        'local' => 'string',
        'idaplicacao' => 'integer',
        'excluido' => 'string',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer',
        'codigo_itens_contrato' => 'string',
        'atualizacao_manual' => 'date',
        'atualizacao_manual_idusuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'idusuario' => 'required',
        'produtos_descricao' => 'required',
        'idmarca' => 'required',
        'idunidade' => 'required',
        'quantidade_atual' => 'required',
        'quantidade_minima' => 'required',
        'valor_unitario' => 'required',
        'idfornecedor' => 'required',
        'idfabricante' => 'required',
        'idaplicacao' => 'required',
        'excluido' => 'required',
        'incluidoem' => 'required',
        'codigo_itens_contrato' => 'required',
        'atualizacao_manual_idusuario' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
    }
    public function marca(): BelongsTo
    {
        return $this->belongsTo(marca::class, 'idmarca');
    }
    public function unidade(): BelongsTo
    {
        return $this->belongsTo(unidade::class, 'idunidade');
    }
    public function fornecedor(): BelongsTo
    {
        return $this->belongsTo(fornecedor::class, 'idfornecedor');
    }
    public function fabricante(): BelongsTo
    {
        return $this->belongsTo(Fabricante::class, 'idfabricante');
    }
    public function aplicacao(): BelongsTo
    {
        return $this->belongsTo(Aplicacaos::class, 'idaplicacao');
    }

    public function atualizacao_manual_usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'atualizacao_manual_idusuario');
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
