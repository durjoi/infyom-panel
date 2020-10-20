<?php

namespace App\Repositories;

use App\Models\rede;
use App\Repositories\BaseRepository;

/**
 * Class redeRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class redeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rede_descricao',
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
        return rede::class;
    }
}
