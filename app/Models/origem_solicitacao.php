<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class origem_solicitacao
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property string origemsolicitacao_codigo
 * @property string origemsolicitacao_descricao
 * @property string origemsolicitacao_descritivo
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class origem_solicitacao extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'origem_solicitacaos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'origemsolicitacao_codigo',
        'origemsolicitacao_descricao',
        'origemsolicitacao_descritivo',
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
        'origemsolicitacao_codigo' => 'string',
        'origemsolicitacao_descricao' => 'string',
        'origemsolicitacao_descritivo' => 'string',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'origemsolicitacao_codigo' => 'required',
        'origemsolicitacao_descricao' => 'required',
        'origemsolicitacao_descritivo' => 'required',
        'incluidoem' => 'required',
        'idusuario' => 'required'
    ];
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'idusuario');
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
