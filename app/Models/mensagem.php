<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class mensagem
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property integer idusuario_de
 * @property integer idusuario_para
 * @property string|\Carbon\Carbon enviadaem
 * @property string titulo
 * @property string corpo
 * @property integer situacao
 */
class mensagem extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'mensagems';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idusuario_de',
        'idusuario_para',
        'enviadaem',
        'titulo',
        'corpo',
        'situacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idusuario_de' => 'integer',
        'idusuario_para' => 'integer',
        'enviadaem' => 'datetime',
        'titulo' => 'string',
        'corpo' => 'string',
        'situacao' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idusuario_de' => 'required',
        'idusuario_para' => 'required',
        'enviadaem' => 'required',
        'situacao' => 'required'
    ];
    public function usuario_de(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario_de');
    }
    public function usuario_para(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario_para');
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
