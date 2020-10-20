<?php

namespace App\Repositories;

use App\Models\objeto_iluminado;
use App\Repositories\BaseRepository;

/**
 * Class objeto_iluminadoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class objeto_iluminadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'objeto_iluminado_descricao',
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
        return objeto_iluminado::class;
    }
}
