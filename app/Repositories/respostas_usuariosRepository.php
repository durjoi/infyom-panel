<?php

namespace App\Repositories;

use App\Models\respostas_usuarios;
use App\Repositories\BaseRepository;

/**
 * Class respostas_usuariosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class respostas_usuariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idrespostas',
        'idusuarioreceber',
        'receber_mensagem_instantanea',
        'receber_mensagem_diaria',
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
        return respostas_usuarios::class;
    }
}
