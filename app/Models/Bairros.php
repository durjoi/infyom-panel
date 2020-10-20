<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Bairros
 * @package App\Models
 * @version May 24, 2020, 8:59 am UTC
 *
 * @property string bairro_descricao
 * @property string|\Carbon\Carbon incluidodoem
 * @property string id_cidade
 * @property integer id_usuario
 */
class Bairros extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'bairros';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'bairro_descricao',
        'incluidodoem',
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
        'bairro_descricao' => 'string',
        'incluidodoem' => 'datetime',
        'id_cidade' => 'string',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bairro_descricao' => 'required',
        'incluidodoem' => 'required',
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
