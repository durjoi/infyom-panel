<?php

namespace App\Repositories;

use App\Models\fatura_obras_os;
use App\Repositories\BaseRepository;

/**
 * Class fatura_obras_osRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class fatura_obras_osRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idfaturaobras',
        'idobras',
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
        return fatura_obras_os::class;
    }
}
