<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class fatura_obras
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property integer idcidade
 * @property integer idempresa
 * @property string numero
 * @property integer idmeses
 * @property integer ano
 * @property string situacao
 * @property string|\Carbon\Carbon aberta_em
 * @property integer aberta_idusuario
 * @property string|\Carbon\Carbon encaminhada_em
 * @property integer encaminhada_idusuario
 * @property string|\Carbon\Carbon pago_em
 * @property integer pago_idusuario
 * @property string data_inicio
 * @property string data_termino
 * @property string titulo_relatorio
 */
class fatura_obras extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'fatura_obras';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idempresa',
        'numero',
        'idmeses',
        'ano',
        'situacao',
        'aberta_em',
        'aberta_idusuario',
        'encaminhada_em',
        'encaminhada_idusuario',
        'pago_em',
        'pago_idusuario',
        'data_inicio',
        'data_termino',
        'titulo_relatorio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'idempresa' => 'integer',
        'numero' => 'string',
        'idmeses' => 'integer',
        'ano' => 'integer',
        'situacao' => 'string',
        'aberta_em' => 'datetime',
        'aberta_idusuario' => 'integer',
        'encaminhada_em' => 'datetime',
        'encaminhada_idusuario' => 'integer',
        'pago_em' => 'datetime',
        'pago_idusuario' => 'integer',
        'data_inicio' => 'date',
        'data_termino' => 'date',
        'titulo_relatorio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'idempresa' => 'required',
        'numero' => 'required',
        'idmeses' => 'required',
        'ano' => 'required',
        'situacao' => 'required',
        'aberta_idusuario' => 'required',
        'encaminhada_idusuario' => 'required',
        'pago_idusuario' => 'required',
        'data_inicio' => 'required',
        'data_termino' => 'required'
    ];
    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
    }
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresas::class, 'idempresa');
    }
    public function meses(): BelongsTo
    {
        return $this->belongsTo(meses::class, 'idmeses');
    }
    public function aberta_usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'aberta_idusuario');
    }
    public function encaminhada_usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'encaminhada_idusuario');
    }
    public function pago_usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'pago_idusuario');
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
