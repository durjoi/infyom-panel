<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class solicitacao_reclamacao_solicitantes
 * @package App\Models
 * @version May 24, 2020, 9:01 am UTC
 *
 * @property integer idcidade
 * @property integer idsolicitacaoreclamacao
 * @property string nome
 * @property string telefone
 * @property string email
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class solicitacao_reclamacao_solicitantes extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'solicitacao_reclamacao_solicitantes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idsolicitacaoreclamacao',
        'nome',
        'telefone',
        'email',
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
        'idsolicitacaoreclamacao' => 'integer',
        'nome' => 'string',
        'telefone' => 'string',
        'email' => 'string',
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
        'idsolicitacaoreclamacao' => 'required',
        'nome' => 'required',
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
    public function solicitacaoreclamacao(): BelongsTo
    {
        return $this->belongsTo(solicitacao_reclamacao::class, 'idsolicitacaoreclamacao');
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
