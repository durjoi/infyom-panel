<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Eventos_orcamento
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property string quantidade
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_eventos
 * @property integer id_contrato_itens
 * @property integer id_usuario
 */
class Eventos_orcamento extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'eventos_orcamentos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'quantidade',
        'incluidodoem',
        'id_eventos',
        'id_contrato_itens',
        'id_usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'quantidade' => 'string',
        'incluidodoem' => 'datetime',
        'id_eventos' => 'integer',
        'id_contrato_itens' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'quantidade' => 'required',
        'incluidodoem' => 'required',
        'id_eventos' => 'required',
        'id_contrato_itens' => 'required',
        'id_usuario' => 'required'
    ];
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'id_usuario');
    }
    public function eventos(): BelongsTo
    {
        return $this->belongsTo(Eventos::class, 'id_eventos');
    }
    public function contrato_itens(): BelongsTo
    {
        return $this->belongsTo(Contrato_itens::class, 'id_contrato_itens');
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
