<?php

namespace App\Repositories;

use App\Models\AcompanhamentoObras;
use App\Repositories\BaseRepository;

/**
 * Class AcompanhamentoObrasRepository
 * @package App\Repositories
 * @version June 7, 2020, 8:57 pm UTC
*/

class AcompanhamentoObrasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'data',
        'fiscal_pmrsj',
        'fiscal_sativa',
        'reators_id',
        'lampadas_id',
        'reles_id',
        'bases_id',
        'luminarias_id',
        'protocolo',
        'material_utilizado_sativa',
        'material_utilizado_sesp',
        'observacoes_extras',
        'observacoes_sativa',
        'recebimento_sesp'
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
        return AcompanhamentoObras::class;
    }
}
