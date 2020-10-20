<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Clientes
 * @package App\Models
 * @version May 24, 2020, 8:59 am UTC
 *
 * @property string razao_social
 * @property string nome_fantasi
 * @property string cnpj
 * @property string inscricao_municipal
 * @property string inscricao_estadual
 * @property string|\Carbon\Carbon incluidodoem
 * @property string id_cidade
 * @property integer id_usuario
 */
class Clientes extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'clientes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'razao_social',
        'nome_fantasi',
        'cnpj',
        'inscricao_municipal',
        'inscricao_estadual',
        'incluidodoem',
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
        'razao_social' => 'string',
        'nome_fantasi' => 'string',
        'cnpj' => 'string',
        'inscricao_municipal' => 'string',
        'inscricao_estadual' => 'string',
        'incluidodoem' => 'datetime',
        'id_cidade' => 'string',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'razao_social' => 'required',
        'nome_fantasi' => 'required',
        'cnpj' => 'required',
        'inscricao_municipal' => 'required',
        'inscricao_estadual' => 'required',
        'incluidodoem' => 'required',
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
