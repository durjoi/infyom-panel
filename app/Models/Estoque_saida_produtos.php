<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Estoque_saida_produtos
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property string quantidade
 * @property string valor_unitario
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_saida
 * @property integer id_productos
 * @property integer id_cidade
 * @property integer id_usuario
 */
class Estoque_saida_produtos extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'estoque_saida_produtos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'quantidade',
        'valor_unitario',
        'incluidodoem',
        'id_saida',
        'id_productos',
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
        'quantidade' => 'string',
        'valor_unitario' => 'string',
        'incluidodoem' => 'datetime',
        'id_saida' => 'integer',
        'id_productos' => 'integer',
        'id_cidade' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'quantidade' => 'required',
        'valor_unitario' => 'required',
        'incluidodoem' => 'required',
        'id_saida' => 'required',
        'id_productos' => 'required',
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
    public function saida(): BelongsTo
    {
        return $this->belongsTo(said::class, 'id_saida');
    }
    public function productos(): BelongsTo
    {
        return $this->belongsTo(produtos::class, 'id_productos');
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
