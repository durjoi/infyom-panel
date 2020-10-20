<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class respostas_usuarios
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property integer idcidade
 * @property integer idrespostas
 * @property integer idusuarioreceber
 * @property integer receber_mensagem_instantanea
 * @property integer receber_mensagem_diaria
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class respostas_usuarios extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'respostas_usuarios';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idrespostas',
        'idusuarioreceber',
        'receber_mensagem_instantanea',
        'receber_mensagem_diaria',
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
        'idcidade' => 'integer',
        'idrespostas' => 'integer',
        'idusuarioreceber' => 'integer',
        'receber_mensagem_instantanea' => 'integer',
        'receber_mensagem_diaria' => 'integer',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcidade' => 'required',
        'idrespostas' => 'required',
        'idusuarioreceber' => 'required',
        'receber_mensagem_instantanea' => 'required',
        'receber_mensagem_diaria' => 'required',
        'incluidoem' => 'required',
        'idusuario' => 'required'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
    }
    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'idcidade');
    }
    public function usuarioreceber(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuarioreceber');
    }
    public function respostas(): BelongsTo
    {
        return $this->belongsTo(respostas::class, 'idrespostas');
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
