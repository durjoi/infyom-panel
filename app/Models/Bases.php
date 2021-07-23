<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Activitylog\Traits\LogsActivity;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bases
 * @package App\Models
 * @version June 7, 2020, 9:08 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection acompanhamentoObras
 * @property string base_descricao
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class Bases extends Model
{
    use SoftDeletes;

    use LogsActivity;

    public $table = 'bases';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'base_descricao',
        'incluidoem',
        'idusuario'
    ];

    protected static $logAttributes = ['*'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'base_descricao' => 'string',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'base_descricao' => 'required',
        'incluidoem' => 'required',
        'idusuario' => 'required'
    ];

    /**
     * @return HasMany
     **/
    public function acompanhamentoObras(): HasMany
    {
        return $this->hasMany(\App\Models\AcompanhamentoObras::class, 'bases_id');
    }
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
