<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class respostas_mensagem_diaria
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property integer idcidade
 * @property integer idusuarioreceber
 * @property string enviadoem
 */
class respostas_mensagem_diaria extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'respostas_mensagem_diarias';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idusuarioreceber',
        'enviadoem'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idcidade' => 'integer',
        'idusuarioreceber' => 'integer',
        'enviadoem' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'idusuarioreceber' => 'required',
        'enviadoem' => 'required'
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
    }
    public function usuarioreceber(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuarioreceber');
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
