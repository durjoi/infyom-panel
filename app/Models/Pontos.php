<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Activitylog\Traits\LogsActivity;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pontos
 * @package App\Models
 * @version June 7, 2020, 9:03 pm UTC
 *
 * @property \App\Models\AcompanhamentoObra acompanhamentoObras
 * @property integer numero_do_poste
 * @property string cadastro_sativa
 * @property string trafo
 * @property string endereco_descricao
 * @property integer acompanhamento_obras_id
 */
class Pontos extends Model
{
    use SoftDeletes;

    use LogsActivity;

    public $table = 'pontos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'numero_do_poste',
        'cadastro_sativa',
        'trafo',
        'endereco_descricao',
        'acompanhamento_obras_id'
    ];

    protected static $logAttributes = ['*'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero_do_poste' => 'integer',
        'cadastro_sativa' => 'string',
        'trafo' => 'string',
        'endereco_descricao' => 'string',
        'acompanhamento_obras_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero_do_poste' => 'required',
        'cadastro_sativa' => 'required',
        'trafo' => 'required',
        'endereco_descricao' => 'required',
        'acompanhamento_obras_id' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
        'deleted_at' => 'required'
    ];

    /**
     * @return BelongsTo
     **/
    public function acompanhamentoObras(): BelongsTo
    {
        return $this->belongsTo(\App\Models\AcompanhamentoObras::class, 'acompanhamento_obras_id');
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
