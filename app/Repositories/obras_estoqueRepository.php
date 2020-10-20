<?php

namespace App\Repositories;

use App\Models\obras_estoque;
use App\Repositories\BaseRepository;

/**
 * Class obras_estoqueRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class obras_estoqueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'obras_estoque_descricao',
        'tipo',
        'status',
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
        return obras_estoque::class;
    }
}
