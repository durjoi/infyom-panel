<?php

namespace App\Repositories;

use App\Models\Fatura_eventos_os;
use App\Repositories\BaseRepository;

/**
 * Class Fatura_eventos_osRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class Fatura_eventos_osRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'valor_os',
        'incluidodoem',
        'id_factura_eventos',
        'id_eventos',
        'id_cidade',
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
        return Fatura_eventos_os::class;
    }
}
