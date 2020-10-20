<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class pedido_cabecalho
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property integer idcidade
 * @property string centro_custo
 * @property string almoxarifado
 * @property string telefone_fixo
 * @property string telefone_celular
 * @property string cnpj
 * @property string inscricao_estadual
 * @property string gerente_geral
 * @property string encarregado_eletrica
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class pedido_cabecalho extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'pedido_cabecalhos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'centro_custo',
        'almoxarifado',
        'telefone_fixo',
        'telefone_celular',
        'cnpj',
        'inscricao_estadual',
        'gerente_geral',
        'encarregado_eletrica',
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
        'centro_custo' => 'string',
        'almoxarifado' => 'string',
        'telefone_fixo' => 'string',
        'telefone_celular' => 'string',
        'cnpj' => 'string',
        'inscricao_estadual' => 'string',
        'gerente_geral' => 'string',
        'encarregado_eletrica' => 'string',
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
        'centro_custo' => 'required',
        'almoxarifado' => 'required',
        'telefone_fixo' => 'required',
        'telefone_celular' => 'required',
        'cnpj' => 'required',
        'inscricao_estadual' => 'required',
        'gerente_geral' => 'required',
        'encarregado_eletrica' => 'required',
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
