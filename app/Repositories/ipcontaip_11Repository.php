<?php

namespace App\Repositories;

use App\Models\ipcontaip_11;
use App\Repositories\BaseRepository;

/**
 * Class ipcontaip_11Repository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class ipcontaip_11Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'tipo_reg',
        'cnpj',
        'cod_cliente',
        'cod_contrato',
        'cod_multiservico',
        'compl_nome',
        'endereco_rua_av',
        'endereco_compl',
        'endereco_bairro',
        'endereco_municipio_uf_cep',
        'contaipano',
        'contaipmes',
        'contaipdatainclusao',
        'contaipusuariologin',
        'segmento'
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
        return ipcontaip_11::class;
    }
}
