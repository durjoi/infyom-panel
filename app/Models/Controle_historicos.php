<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Controle_historicos
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property string descricao
 * @property integer id_solicitacao_reclamacao
 * @property integer id_cidade
 * @property integer id_usuario
 */
class Controle_historicos extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'controle_historicos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'descricao',
        'id_solicitacao_reclamacao',
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
        'descricao' => 'string',
        'id_solicitacao_reclamacao' => 'integer',
        'id_cidade' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descricao' => 'required',
        'id_solicitacao_reclamacao' => 'required',
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
    public function solicitacao_reclamacao(): BelongsTo
    {
        return $this->belongsTo(solicitacao_reclamacao::class, 'id_solicitacao_reclamacao');
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
