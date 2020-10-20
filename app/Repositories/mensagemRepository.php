<?php

namespace App\Repositories;

use App\Models\mensagem;
use App\Repositories\BaseRepository;

/**
 * Class mensagemRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class mensagemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idusuario_de',
        'idusuario_para',
        'enviadaem',
        'titulo',
        'corpo',
        'situacao'
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
        return mensagem::class;
    }
}
