<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Empregados
 * @package App\Models
 * @version May 24, 2020, 9:01 am UTC
 *
 * @property string nome
 * @property string funcao
 * @property string admissao
 * @property string desligamento
 * @property string situacao
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_usuario
 */
class Empregados extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'empregados';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'nome',
        'funcao',
        'admissao',
        'desligamento',
        'situacao',
        'incluidodoem',
        'id_usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'funcao' => 'string',
        'admissao' => 'date',
        'desligamento' => 'date',
        'situacao' => 'string',
        'incluidodoem' => 'datetime',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'funcao' => 'required',
        'admissao' => 'required',
        'desligamento' => 'required',
        'situacao' => 'required',
        'incluidodoem' => 'required',
        'id_usuario' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'id_usuario');
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
