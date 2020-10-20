<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Causa_defeitos
 * @package App\Models
 * @version May 24, 2020, 8:59 am UTC
 *
 * @property string causa_defeito_descricao
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_usuario
 */
class Causa_defeitos extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'causa_defeitos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'causa_defeito_descricao',
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
        'causa_defeito_descricao' => 'string',
        'incluidodoem' => 'datetime',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'causa_defeito_descricao' => 'required',
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
