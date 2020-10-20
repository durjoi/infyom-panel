<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Fatura_eventos
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property string numero
 * @property integer ano
 * @property string aberta_em
 * @property integer aberta_idusuario
 * @property string encaminhada_em
 * @property integer encaminhada_idusuario
 * @property string pago_em
 * @property integer pago_idusuario
 * @property string data_inicio
 * @property string data_termino
 * @property string titulo_relatorio
 * @property integer id_cidade
 * @property integer id_meses
 * @property integer id_empresa
 */
class Fatura_eventos extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'fatura_eventos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'numero',
        'ano',
        'aberta_em',
        'aberta_idusuario',
        'encaminhada_em',
        'encaminhada_idusuario',
        'pago_em',
        'pago_idusuario',
        'data_inicio',
        'data_termino',
        'titulo_relatorio',
        'id_cidade',
        'id_meses',
        'id_empresa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero' => 'string',
        'ano' => 'integer',
        'aberta_em' => 'date',
        'aberta_idusuario' => 'integer',
        'encaminhada_em' => 'date',
        'encaminhada_idusuario' => 'integer',
        'pago_em' => 'date',
        'pago_idusuario' => 'integer',
        'data_inicio' => 'date',
        'data_termino' => 'date',
        'titulo_relatorio' => 'string',
        'id_cidade' => 'integer',
        'id_meses' => 'integer',
        'id_empresa' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero' => 'required',
        'ano' => 'required',
        'aberta_em' => 'required',
        'aberta_idusuario' => 'required',
        'encaminhada_em' => 'required',
        'encaminhada_idusuario' => 'required',
        'pago_em' => 'required',
        'pago_idusuario' => 'required',
        'data_inicio' => 'required',
        'data_termino' => 'required',
        'titulo_relatorio' => 'required',
        'id_cidade' => 'required',
        'id_meses' => 'required',
        'id_empresa' => 'required'
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'id_cidade');
    }
    public function meses(): BelongsTo
    {
        return $this->belongsTo(meses::class, 'id_meses');
    }
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresas::class, 'id_empresa');
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
