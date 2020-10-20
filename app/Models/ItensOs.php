<?php

namespace App\Models;

use Spatie\Activitylog\Traits\LogsActivity;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ItensOs
 * @package App\Models
 * @version June 10, 2020, 1:31 pm UTC
 *
 * @property \App\Models\OrdemDeServicoManutencao ordemDeServicoManutencao
 * @property string material
 * @property integer qtd
 * @property string defeito_encontrado
 * @property string causa_provavel
 * @property integer ordem_de_servico_manutencao_id
 */
class ItensOs extends Model
{
    use SoftDeletes;

    use LogsActivity;

    public $table = 'itens_os';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'material',
        'qtd',
        'defeito_encontrado',
        'causa_provavel',
        'ordem_de_servico_manutencao_id'
    ];

    protected static $logAttributes = ['*'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'material' => 'string',
        'qtd' => 'integer',
        'defeito_encontrado' => 'string',
        'causa_provavel' => 'string',
        'ordem_de_servico_manutencao_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'material' => 'required',
        'qtd' => 'required',
        'defeito_encontrado' => 'required',
        'causa_provavel' => 'required',
        'ordem_de_servico_manutencao_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ordemDeServicoManutencao()
    {
        return $this->belongsTo(\App\Models\OrdemDeServicoManutencao::class, 'ordem_de_servico_manutencao_id');
    }
}
