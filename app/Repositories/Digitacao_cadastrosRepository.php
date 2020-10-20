<?php

namespace App\Repositories;

use App\Models\Digitacao_cadastros;
use App\Repositories\BaseRepository;

/**
 * Class Digitacao_cadastrosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class Digitacao_cadastrosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cidade',
        'bairro',
        'lograduro',
        'visavis',
        'referncia',
        'transformador',
        'medidor',
        'poste_numero',
        'luminaria_numero',
        'coordenada_x',
        'coordenada_y',
        'poste_propriedade',
        'poste_status',
        'fase_ligacao',
        'luminaria_propriedade',
        'luminaria_estado',
        'quantidade_lampada',
        'observacoes',
        'data_cadastro',
        'cadastrador',
        'incluidodoem',
        'idra',
        'id_logradouro_tipo',
        'id_rede',
        'id_poste',
        'id_lampada',
        'id_rele',
        'id_reator',
        'id_objeto_iluminado',
        'id_usuario'
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
        return Digitacao_cadastros::class;
    }
}
