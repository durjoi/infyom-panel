<?php

namespace App\Repositories;

use App\Models\Pontos;
use App\Repositories\BaseRepository;

/**
 * Class PontosRepository
 * @package App\Repositories
 * @version June 7, 2020, 9:03 pm UTC
*/

class PontosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero_do_poste',
        'cadastro_sativa',
        'trafo',
        'endereco_descricao',
        'acompanhamento_obras_id'
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
        return Pontos::class;
    }
}
