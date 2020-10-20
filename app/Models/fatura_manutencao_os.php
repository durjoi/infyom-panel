<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class fatura_manutencao_os
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property integer idcidade
 * @property integer idfaturamanutencao
 * @property integer idsolicitacaoreclamacao
 * @property number valor_os
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class fatura_manutencao_os extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'fatura_manutencao_os';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'idcidade',
        'idfaturamanutencao',
        'idsolicitacaoreclamacao',
        'valor_os',
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
        'idfaturamanutencao' => 'integer',
        'idsolicitacaoreclamacao' => 'integer',
        'valor_os' => 'float',
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
        'idfaturamanutencao' => 'required',
        'idsolicitacaoreclamacao' => 'required',
        'valor_os' => 'required',
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
    public function faturamanutencao(): BelongsTo
    {
        return $this->belongsTo(Fatura_manutencao::class, 'idfaturamanutencao');
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
