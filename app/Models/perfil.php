<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class perfil
 * @package App\Models
 * @version May 24, 2020, 8:59 am UTC
 *
 * @property integer idusuario
 * @property integer idperfilcadastro
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario_incluido
 */
class perfil extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'perfils';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idusuario',
        'idperfilcadastro',
        'incluidoem',
        'idusuario_incluido'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idusuario' => 'integer',
        'idperfilcadastro' => 'integer',
        'incluidoem' => 'datetime',
        'idusuario_incluido' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idusuario' => 'required',
        'idperfilcadastro' => 'required',
        'incluidoem' => 'required',
        'idusuario_incluido' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
    public function idperfilcadastro(): BelongsTo
    {
        return $this->belongsTo(perfil_cadastro::class, 'idperfilcadastro');
    }
    public function idusuario_incluido(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario_incluido');
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
