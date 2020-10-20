<?php

namespace App\Repositories;

use App\Models\obras_baixa_ip;
use App\Repositories\BaseRepository;

/**
 * Class obras_baixa_ipRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class obras_baixa_ipRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idobras',
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
        'situacao',
        'data_atualizado',
        'incluidoem',
        'idusuarioi',
        'idtiposolicitacao',
        'poste_anterior',
        'poste_posterior',
        'idsuporte_anterior',
        'idluminaria_anterior',
        'idlampada_anterior',
        'idlampada_anterior_quantidade',
        'idreator_anterior',
        'fabricante_luminaria',
        'modelo_luminaria',
        'altura_poste',
        'modelo_poste',
        'cor_poste',
        'comprimento_braco',
        'propriedade_poste',
        'telegestao'
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
        return obras_baixa_ip::class;
    }
}
