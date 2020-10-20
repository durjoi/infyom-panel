<?php

namespace App\Repositories;

use App\Models\fatura_manutencao_os;
use App\Repositories\BaseRepository;

/**
 * Class fatura_manutencao_osRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class fatura_manutencao_osRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idfaturamanutencao',
        'idsolicitacaoreclamacao',
        'valor_os',
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
        return fatura_manutencao_os::class;
    }
}
