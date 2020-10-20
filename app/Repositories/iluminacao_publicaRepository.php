<?php

namespace App\Repositories;

use App\Models\iluminacao_publica;
use App\Repositories\BaseRepository;

/**
 * Class iluminacao_publicaRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class iluminacao_publicaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idra',
        'idbairro',
        'idlogradouro',
        'idposte',
        'poste_numero',
        'coordenada_x',
        'coordenada_y',
        'visavis',
        'referencia',
        'poste_propriedade',
        'poste_status',
        'poste_data_instalacao',
        'idsuporte',
        'suporte_data_instalacao',
        'idluminaria',
        'luminaria_numero',
        'fase_ligacao',
        'altura_montagem',
        'luminaria_data_instalacao',
        'idlampada',
        'quantidade_lampada',
        'horas_ligada',
        'lampada_data_instalacao',
        'idreator',
        'reator_data_instalacao',
        'idrele',
        'rele_data_instalacao',
        'idrede',
        'idtransformador',
        'idmedidor',
        'medidor_data_instalacao',
        'idobjetoiluminado',
        'idtarifa',
        'observacoes',
        'demanda_w',
        'consumo_kwh',
        'quantidade_os_pendente',
        'quantidade_os_executada',
        'quantidade_os_cancelada',
        'quantidade_os_normalizada',
        'icone',
        'incluidoem',
        'idusuarioi',
        'alteradoem',
        'idusuario',
        'cadastro_manual',
        'iddigitacao_cadastro'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return iluminacao_publica::class;
    }
}
