<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Activitylog\Traits\LogsActivity;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AcompanhamentoObras
 * @package App\Models
 * @version June 7, 2020, 8:51 pm UTC
 *
 * @property \App\Models\Reator reators
 * @property \App\Models\Lampada lampadas
 * @property \App\Models\Rele reles
 * @property \App\Models\Luminaria luminarias
 * @property \App\Models\Basis bases
 * @property \Illuminate\Database\Eloquent\Collection pontos
 * @property string data
 * @property string fiscal_pmrsj
 * @property string fiscal_sativa
 * @property integer reators_id
 * @property integer lampadas_id
 * @property integer reles_id
 * @property integer bases_id
 * @property integer luminarias_id
 * @property string protocolo
 * @property string material_utilizado_sativa
 * @property string material_utilizado_sesp
 * @property string observacoes_extras
 * @property string observacoes_sativa
 * @property integer recebimento_sesp
 */
class AcompanhamentoObras extends Model
{
    use SoftDeletes;

    use LogsActivity;

    public $table = 'acompanhamento_obras';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dataFormat = 'Y-m-d H:i:s';

    protected $dates = ['data'];



    public $fillable = [
        'data',
        'fiscal_pmrsj',
        'fiscal_sativa',
        'reators_id',
        'lampadas_id',
        'reles_id',
        'bases_id',
        'luminarias_id',
        'protocolo',
        'material_utilizado_sativa',
        'material_utilizado_sesp',
        'observacoes_extras',
        'observacoes_sativa',
        'recebimento_sesp'
    ];

    protected static $logAttributes = ['*'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'data' => 'date',
        'fiscal_pmrsj' => 'string',
        'fiscal_sativa' => 'string',
        'reators_id' => 'integer',
        'lampadas_id' => 'integer',
        'reles_id' => 'integer',
        'bases_id' => 'integer',
        'luminarias_id' => 'integer',
        'protocolo' => 'string',
        'material_utilizado_sativa' => 'string',
        'material_utilizado_sesp' => 'string',
        'observacoes_extras' => 'string',
        'observacoes_sativa' => 'string',
        'recebimento_sesp' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'data' => 'required',
        'fiscal_pmrsj' => 'required',
        'fiscal_sativa' => 'required',
        'reators_id' => 'required',
        'lampadas_id' => 'required',
        'reles_id' => 'required',
        'bases_id' => 'required',
        'luminarias_id' => 'required',
        'protocolo' => 'required',
        'material_utilizado_sativa' => 'required',
        'material_utilizado_sesp' => 'required',
        'observacoes_extras' => 'required',
        'observacoes_sativa' => 'required',
        'recebimento_sesp' => 'required',
    ];

    /**
     * @return BelongsTo
     **/
    public function reators(): BelongsTo
    {
        return $this->belongsTo(\App\Models\reator::class, 'reators_id');
    }

    /**
     * @return BelongsTo
     **/
    public function lampadas(): BelongsTo
    {
        return $this->belongsTo(\App\Models\lampada::class, 'lampadas_id');
    }

    /**
     * @return BelongsTo
     **/
    public function reles(): BelongsTo
    {
        return $this->belongsTo(\App\Models\rele::class, 'reles_id');
    }

    /**
     * @return BelongsTo
     **/
    public function luminarias(): BelongsTo
    {
        return $this->belongsTo(\App\Models\luminaria::class, 'luminarias_id');
    }

    /**
     * @return BelongsTo
     **/
    public function bases(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Bases::class, 'bases_id');
    }

    /**
     * @return HasMany
     **/
    public function pontos(): HasMany
    {
        return $this->hasMany(\App\Models\Pontos::class, 'acompanhamento_obras_id');
    }
    public  function relationsName(){
        $reflector = new \ReflectionClass($this);
        $relations = [];
        foreach ($reflector->getMethods() as $reflectionMethod) {
            $returnType = $reflectionMethod->getReturnType();
            if ($returnType) {
                if (in_array(class_basename($returnType->getName()), ['BelongsTo'])) {
                    $relations[] = $reflectionMethod->name;
                }
            }
        }

        return $relations;
    }
}
