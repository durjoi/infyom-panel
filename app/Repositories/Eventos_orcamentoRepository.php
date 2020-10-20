<?php

namespace App\Repositories;

use App\Models\Eventos_orcamento;
use App\Repositories\BaseRepository;

/**
 * Class Eventos_orcamentoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class Eventos_orcamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'quantidade',
        'incluidodoem',
        'id_eventos',
        'id_contrato_itens',
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
        return Eventos_orcamento::class;
    }
}
