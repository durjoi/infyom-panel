<?php

namespace App\Repositories;

use App\Models\respostas_mensagem_diaria;
use App\Repositories\BaseRepository;

/**
 * Class respostas_mensagem_diariaRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class respostas_mensagem_diariaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idusuarioreceber',
        'enviadoem'
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
        return respostas_mensagem_diaria::class;
    }
}
