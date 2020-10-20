<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Estoque_saida
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property string solicitante
 * @property string autorizado_por
 * @property string actualizacao
 * @property string observacao
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_operacao
 * @property integer id_obras_estoque
 * @property integer id_bairro
 * @property integer id_turma
 * @property integer id_cidade
 * @property integer id_usuario
 */
class Estoque_saida extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'estoque_saidas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'solicitante',
        'autorizado_por',
        'actualizacao',
        'observacao',
        'incluidodoem',
        'id_operacao',
        'id_obras_estoque',
        'id_bairro',
        'id_turma',
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
        'solicitante' => 'string',
        'autorizado_por' => 'string',
        'actualizacao' => 'string',
        'observacao' => 'string',
        'incluidodoem' => 'datetime',
        'id_operacao' => 'integer',
        'id_obras_estoque' => 'integer',
        'id_bairro' => 'integer',
        'id_turma' => 'integer',
        'id_cidade' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'solicitante' => 'required',
        'autorizado_por' => 'required',
        'actualizacao' => 'required',
        'observacao' => 'required',
        'incluidodoem' => 'required',
        'id_operacao' => 'required',
        'id_obras_estoque' => 'required',
        'id_bairro' => 'required',
        'id_turma' => 'required',
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
    public function operacao(): BelongsTo
    {
        return $this->belongsTo(operacao::class, 'id_operacao');
    }
    public function obras_estoque(): BelongsTo
    {
        return $this->belongsTo(obras_estoque::class, 'id_obras_estoque');
    }
    public function bairro(): BelongsTo
    {
        return $this->belongsTo(Bairros::class, 'id_bairro');
    }
    public function turma(): BelongsTo
    {
        return $this->belongsTo(turma::class, 'id_turma');
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
