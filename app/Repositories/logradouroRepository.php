<?php

namespace App\Repositories;

use App\Models\logradouro;
use App\Repositories\BaseRepository;

/**
 * Class logradouroRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class logradouroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'logradouro_codigo',
        'logradouro_codigodiv',
        'idlogradourotipo',
        'logradouro_titulo',
        'logradouro_preposicao',
        'logradouro_descricao',
        'logradouro_conjunto',
        'logradouro_cep',
        'logradouro_estado',
        'idbairro',
        'trafego_pedestres',
        'trafego_veiculos',
        'importancia_via',
        'arborizacao',
        'idempresa',
        'incluidoem',
        'idusuario'
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
        return logradouro::class;
    }
}
