<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Fatura_eventos_os
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property string valor_os
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_factura_eventos
 * @property integer id_eventos
 * @property integer id_cidade
 * @property integer id_usuario
 */
class Fatura_eventos_os extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'fatura_eventos_os';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'valor_os',
        'incluidodoem',
        'id_factura_eventos',
        'id_eventos',
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
        'valor_os' => 'string',
        'incluidodoem' => 'datetime',
        'id_factura_eventos' => 'integer',
        'id_eventos' => 'integer',
        'id_cidade' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'valor_os' => 'required',
        'incluidodoem' => 'required',
        'id_factura_eventos' => 'required',
        'id_eventos' => 'required',
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
    public function factura_eventos(): BelongsTo
    {
        return $this->belongsTo(fatura_evento::class, 'id_factura_eventos');
    }
    public function eventos(): BelongsTo
    {
        return $this->belongsTo(Eventos::class, 'id_eventos');
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
