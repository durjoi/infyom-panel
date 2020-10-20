<?php

namespace App\Repositories;

use App\Models\item;
use App\Repositories\BaseRepository;

/**
 * Class itemRepository
 * @package App\Repositories
 * @version May 26, 2020, 9:58 am UTC
*/

class itemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'produto',
        'marca',
        'unidade',
        'quantidade',
        'preco_total',
        'ordem_de_servico_id'
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
        return item::class;
    }
}
