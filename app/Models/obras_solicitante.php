<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class obras_solicitante
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property integer idobras
 * @property string solicitante_nome
 * @property string solicitante_telefone
 * @property string solicitante_email
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class obras_solicitante extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'obras_solicitantes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idobras',
        'solicitante_nome',
        'solicitante_telefone',
        'solicitante_email',
        'incluidoem',
        'idusuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idobras' => 'integer',
        'solicitante_nome' => 'string',
        'solicitante_telefone' => 'string',
        'solicitante_email' => 'string',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idobras' => 'required',
        'solicitante_nome' => 'required',
        'solicitante_telefone' => 'required',
        'solicitante_email' => 'required',
        'incluidoem' => 'required',
        'idusuario' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
    public function obras(): BelongsTo
    {
        return $this->belongsTo(obras::class, 'idobras');
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
