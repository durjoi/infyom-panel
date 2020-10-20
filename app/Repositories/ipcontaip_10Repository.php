<?php

namespace App\Repositories;

use App\Models\ipcontaip_10;
use App\Repositories\BaseRepository;

/**
 * Class ipcontaip_10Repository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class ipcontaip_10Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'cod_cliente',
        'nome'
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
        return ipcontaip_10::class;
    }
}
