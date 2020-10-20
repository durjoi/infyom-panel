<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Estoque_epi_epc_ferramental_produtos
 * @package App\Models
 * @version May 24, 2020, 9:02 am UTC
 *
 * @property string quantidade
 * @property string valor_unitario
 * @property string|\Carbon\Carbon incluidodoem
 * @property integer id_estoque_epi_epc_ferramental
 * @property integer id_produtos
 * @property integer id_cidade
 * @property integer id_usuario
 */
class Estoque_epi_epc_ferramental_produtos extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'estoque_epi_epc_ferramental_produtos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'quantidade',
        'valor_unitario',
        'incluidodoem',
        'id_estoque_epi_epc_ferramental',
        'id_produtos',
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
        'id_estoque_epi_epc_ferramental' => 'integer',
        'id_produtos' => 'integer',
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
        'id_estoque_epi_epc_ferramental' => 'required',
        'id_produtos' => 'required',
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
    public function estoque_epi_epc_ferramental(): BelongsTo
    {
        return $this->belongsTo(Estoque_epi_epc_ferramental::class, 'id_estoque_epi_epc_ferramental');
    }
    public function produtos(): BelongsTo
    {
        return $this->belongsTo(produtos::class, 'id_produtos');
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
