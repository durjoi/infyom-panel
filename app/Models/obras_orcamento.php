<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class obras_orcamento
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property integer idcidade
 * @property integer idobras
 * @property integer idcontratoitens
 * @property number quantidade_mo
 * @property string origem_mo
 * @property number quantidade_mt
 * @property string origem_mt
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class obras_orcamento extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'obras_orcamentos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idobras',
        'idcontratoitens',
        'quantidade_mo',
        'origem_mo',
        'quantidade_mt',
        'origem_mt',
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
        'idobras' => 'integer',
        'idcontratoitens' => 'integer',
        'quantidade_mo' => 'float',
        'origem_mo' => 'string',
        'quantidade_mt' => 'float',
        'origem_mt' => 'string',
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
        'idobras' => 'required',
        'idcontratoitens' => 'required',
        'quantidade_mo' => 'required',
        'origem_mo' => 'required',
        'quantidade_mt' => 'required',
        'origem_mt' => 'required',
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
    public function obras(): BelongsTo
    {
        return $this->belongsTo(obras::class, 'idobras');
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
