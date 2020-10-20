<?php

namespace App\Repositories;

use App\Models\Clientes;
use App\Repositories\BaseRepository;

/**
 * Class ClientesRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class ClientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'razao_social',
        'nome_fantasi',
        'cnpj',
        'inscricao_municipal',
        'inscricao_estadual',
        'incluidodoem',
        'id_cidade',
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
        return Clientes::class;
    }
}
