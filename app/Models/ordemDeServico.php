<?php

namespace App\Models;

use Spatie\Activitylog\Traits\LogsActivity;
use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ordemDeServico
 * @package App\Models
 * @version May 26, 2020, 5:43 pm UTC
 *
 * @property string origem
 * @property string numero_de_poste
 * @property string numero_de_luminaria
 * @property string solicitante
 * @property string telefone_do_solicitante
 * @property string tipo_do_solicitante
 * @property string tipo_da_solictacao
 * @property string logradouro
 * @property string bairro
 * @property string vis_a_vis
 * @property string referencia
 * @property string tipo_do_logradouro
 * @property string nome_do_logradouro
 * @property string dados_complementares
 * @property string servico_solicitado
 * @property string protocolo_oficio
 * @property boolean status
 */
class ordemDeServico extends Model
{
    use SoftDeletes;

    use LogsActivity;

    public $table = 'ordem_de_servico';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'origem',
        'numero_de_poste',
        'numero_de_luminaria',
        'solicitante',
        'telefone_do_solicitante',
        'tipo_do_solicitante',
        'tipo_da_solictacao',
        'logradouro',
        'bairro',
        'vis_a_vis',
        'referencia',
        'tipo_do_logradouro',
        'nome_do_logradouro',
        'dados_complementares',
        'servico_solicitado',
        'protocolo_oficio',
        'status'
    ];

    protected static $logAttributes = ['*'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'origem' => 'string',
        'numero_de_poste' => 'string',
        'numero_de_luminaria' => 'string',
        'solicitante' => 'string',
        'telefone_do_solicitante' => 'string',
        'tipo_do_solicitante' => 'string',
        'tipo_da_solictacao' => 'string',
        'logradouro' => 'string',
        'bairro' => 'string',
        'vis_a_vis' => 'string',
        'referencia' => 'string',
        'tipo_do_logradouro' => 'string',
        'nome_do_logradouro' => 'string',
        'dados_complementares' => 'string',
        'servico_solicitado' => 'string',
        'protocolo_oficio' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'origem' => 'required',
        'numero_de_poste' => 'required',
        'numero_de_luminaria' => 'required',
        'solicitante' => 'required',
        'telefone_do_solicitante' => 'required',
        'tipo_do_solicitante' => 'required',
        'tipo_da_solictacao' => 'required',
        'logradouro' => 'required',
        'bairro' => 'required',
        'vis_a_vis' => 'required',
        'referencia' => 'required',
        'tipo_do_logradouro' => 'required',
        'nome_do_logradouro' => 'required',
        'dados_complementares' => 'required',
        'servico_solicitado' => 'required',
        'protocolo_oficio' => 'required',
        'status' => 'required'
    ];

    public function items(): BelongsTo
    {
        return $this->hasMany('App\Models\item');
    }
}
