<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class solicitacao_material
 * @package App\Models
 * @version May 24, 2020, 9:01 am UTC
 *
 * @property integer idcidade
 * @property integer idsolicitacaoreclamacao
 * @property integer idcontratoitens
 * @property number mo_quantidade
 * @property string mo_origem
 * @property number mt_quantidade
 * @property string mt_origem
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 * @property integer item_com_vandalismo
 * @property integer sucata_nao_retornada
 * @property integer garantia
 */
class solicitacao_material extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'solicitacao_materials';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idsolicitacaoreclamacao',
        'idcontratoitens',
        'mo_quantidade',
        'mo_origem',
        'mt_quantidade',
        'mt_origem',
        'incluidoem',
        'idusuario',
        'item_com_vandalismo',
        'sucata_nao_retornada',
        'garantia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'idsolicitacaoreclamacao' => 'integer',
        'idcontratoitens' => 'integer',
        'mo_quantidade' => 'float',
        'mo_origem' => 'string',
        'mt_quantidade' => 'float',
        'mt_origem' => 'string',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer',
        'item_com_vandalismo' => 'integer',
        'sucata_nao_retornada' => 'integer',
        'garantia' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'idsolicitacaoreclamacao' => 'required',
        'idcontratoitens' => 'required',
        'mo_quantidade' => 'required',
        'mo_origem' => 'required',
        'mt_quantidade' => 'required',
        'mt_origem' => 'required',
        'incluidoem' => 'required',
        'idusuario' => 'required',
        'item_com_vandalismo' => 'required',
        'sucata_nao_retornada' => 'required',
        'garantia' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
    }
    public function solicitacaoreclamacao(): BelongsTo
    {
        return $this->belongsTo(solicitacao_reclamacao::class, 'idsolicitacaoreclamacao');
    }
    public function contratoitens(): BelongsTo
    {
        return $this->belongsTo(Contrato_itens::class, 'idcontratoitens');
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
