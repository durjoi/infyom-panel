<?php

namespace App\Repositories;

use App\Models\veiculos;
use App\Repositories\BaseRepository;

/**
 * Class veiculosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class veiculosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'placa',
        'descricao',
        'ano',
        'propriedade',
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
        return veiculos::class;
    }
}
