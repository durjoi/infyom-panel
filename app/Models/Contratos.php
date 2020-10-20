<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Contratos
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property string contrato_numero
 * @property string contrato_tipo
 * @property string data_inicio
 * @property string data_termino
 * @property string fatork
 * @property string operacao
 * @property string|\Carbon\Carbon incluidodoem
 * @property string id_empresa
 * @property string id_cidade
 * @property integer id_usuario
 */
class Contratos extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'contratos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'contrato_numero',
        'contrato_tipo',
        'data_inicio',
        'data_termino',
        'fatork',
        'operacao',
        'incluidodoem',
        'id_empresa',
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
        'contrato_numero' => 'string',
        'contrato_tipo' => 'string',
        'data_inicio' => 'date',
        'data_termino' => 'date',
        'fatork' => 'string',
        'operacao' => 'string',
        'incluidodoem' => 'datetime',
        'id_empresa' => 'string',
        'id_cidade' => 'string',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'contrato_numero' => 'required',
        'contrato_tipo' => 'required',
        'data_inicio' => 'required',
        'data_termino' => 'required',
        'fatork' => 'required',
        'operacao' => 'required',
        'incluidodoem' => 'required',
        'id_empresa' => 'required',
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
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresas::class, 'id_empresa');
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
