<?php

namespace App\Models;

use Spatie\Activitylog\Traits\LogsActivity;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrdemDeServicoManutencao
 * @package App\Models
 * @version June 10, 2020, 12:26 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection itensOs
 * @property string protocolo
 * @property string|\Carbon\Carbon data_hora_registro
 * @property string registrado_por
 * @property string protocolo_oficio
 * @property string tipo_do_solicitante
 * @property string solicitante
 * @property string telefone_do_solicitante
 * @property string numero_de_poste
 * @property string numero_de_luminaria
 * @property string coordenada_x
 * @property string coordenada_y
 * @property string endereco_cadastro
 * @property string vis_a_vis_cadastro
 * @property string referencia_cadastro
 * @property string endereco_fornecido
 * @property string vis_a_vis_fornecido
 * @property string referencia_fornecido
 * @property string dados_complementares
 * @property string servico_solicitado
 * @property string braco
 * @property string suporte
 * @property string conector
 * @property string luminaria
 * @property string vs
 * @property string lampada_mvw
 * @property string mista
 * @property string reator
 * @property string tipo_reator
 * @property string rele
 * @property string base
 * @property string manutencao_em_poste
 * @property string manutencao_em_topo_de_poste
 * @property string cabo_turma
 * @property string supervisor
 * @property string eletricista
 * @property string|\Carbon\Carbon executada_em
 * @property string status
 */
class OrdemDeServicoManutencao extends Model
{
    use SoftDeletes;

    use LogsActivity;

    public $table = 'ordem_de_servico_manutencao';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'protocolo',
        'data_hora_registro',
        'registrado_por',
        'protocolo_oficio',
        'tipo_do_solicitante',
        'solicitante',
        'telefone_do_solicitante',
        'numero_de_poste',
        'numero_de_luminaria',
        'coordenada_x',
        'coordenada_y',
        'endereco_cadastro',
        'vis_a_vis_cadastro',
        'referencia_cadastro',
        'endereco_fornecido',
        'vis_a_vis_fornecido',
        'referencia_fornecido',
        'dados_complementares',
        'servico_solicitado',
        'braco',
        'suporte',
        'conector',
        'luminaria',
        'vs',
        'lampada_mvw',
        'mista',
        'reator',
        'tipo_reator',
        'rele',
        'base',
        'manutencao_em_poste',
        'manutencao_em_topo_de_poste',
        'cabo_turma',
        'supervisor',
        'eletricista',
        'executada_em',
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
        'protocolo' => 'string',
        'data_hora_registro' => 'datetime',
        'registrado_por' => 'string',
        'protocolo_oficio' => 'string',
        'tipo_do_solicitante' => 'string',
        'solicitante' => 'string',
        'telefone_do_solicitante' => 'string',
        'numero_de_poste' => 'string',
        'numero_de_luminaria' => 'string',
        'coordenada_x' => 'string',
        'coordenada_y' => 'string',
        'endereco_cadastro' => 'string',
        'vis_a_vis_cadastro' => 'string',
        'referencia_cadastro' => 'string',
        'endereco_fornecido' => 'string',
        'vis_a_vis_fornecido' => 'string',
        'referencia_fornecido' => 'string',
        'dados_complementares' => 'string',
        'servico_solicitado' => 'string',
        'braco' => 'string',
        'suporte' => 'string',
        'conector' => 'string',
        'luminaria' => 'string',
        'vs' => 'string',
        'lampada_mvw' => 'string',
        'mista' => 'string',
        'reator' => 'string',
        'tipo_reator' => 'string',
        'rele' => 'string',
        'base' => 'string',
        'manutencao_em_poste' => 'string',
        'manutencao_em_topo_de_poste' => 'string',
        'cabo_turma' => 'string',
        'supervisor' => 'string',
        'eletricista' => 'string',
        'executada_em' => 'datetime',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'protocolo' => 'required',
        'data_hora_registro' => 'required',
        'registrado_por' => 'required',
        'protocolo_oficio' => 'required',
        'tipo_do_solicitante' => 'required',
        'solicitante' => 'required',
        'telefone_do_solicitante' => 'required',
        'numero_de_poste' => 'required',
        'numero_de_luminaria' => 'required',
        'coordenada_x' => 'required',
        'coordenada_y' => 'required',
        'endereco_cadastro' => 'required',
        'vis_a_vis_cadastro' => 'required',
        'referencia_cadastro' => 'required',
        'endereco_fornecido' => 'required',
        'vis_a_vis_fornecido' => 'required',
        'referencia_fornecido' => 'required',
        'dados_complementares' => 'required',
        'servico_solicitado' => 'required',
        'braco' => 'required',
        'suporte' => 'required',
        'conector' => 'required',
        'luminaria' => 'required',
        'vs' => 'required',
        'lampada_mvw' => 'required',
        'mista' => 'required',
        'reator' => 'required',
        'tipo_reator' => 'required',
        'rele' => 'required',
        'base' => 'required',
        'manutencao_em_poste' => 'required',
        'manutencao_em_topo_de_poste' => 'required',
        'cabo_turma' => 'required',
        'supervisor' => 'required',
        'eletricista' => 'required',
        'status' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function itensOs()
    {
        return $this->hasMany(\App\Models\ItensOs::class, 'ordem_de_servico_manutencao_id');
    }
}
