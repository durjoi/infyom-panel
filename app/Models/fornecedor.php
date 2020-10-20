<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class fornecedor
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property number cnpj
 * @property string razao_social
 * @property string fantasia
 * @property string endereco
 * @property integer numero
 * @property string complemento
 * @property string bairro
 * @property string cidade
 * @property string uf
 * @property integer cep
 * @property string contato
 * @property string telefone
 * @property string fax
 * @property string email
 * @property string produtos
 * @property string observacao
 * @property string situacao
 * @property string|\Carbon\Carbon incluidoem
 * @property integer idusuario
 */
class fornecedor extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'fornecedors';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'cnpj',
        'razao_social',
        'fantasia',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'contato',
        'telefone',
        'fax',
        'email',
        'produtos',
        'observacao',
        'situacao',
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
        'cnpj' => 'float',
        'razao_social' => 'string',
        'fantasia' => 'string',
        'endereco' => 'string',
        'numero' => 'integer',
        'complemento' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'uf' => 'string',
        'cep' => 'integer',
        'contato' => 'string',
        'telefone' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'produtos' => 'string',
        'observacao' => 'string',
        'situacao' => 'string',
        'incluidoem' => 'datetime',
        'idusuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cnpj' => 'required',
        'razao_social' => 'required',
        'endereco' => 'required',
        'numero' => 'required',
        'bairro' => 'required',
        'cidade' => 'required',
        'uf' => 'required',
        'cep' => 'required',
        'contato' => 'required',
        'telefone' => 'required',
        'email' => 'required',
        'produtos' => 'required',
        'situacao' => 'required',
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
