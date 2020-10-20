<?php

namespace App\Repositories;

use App\Models\fornecedor;
use App\Repositories\BaseRepository;

/**
 * Class fornecedorRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class fornecedorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cnpj',
        'razao_social',
        'fantasia',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'contato',
        'telefone',
        'fax',
        'email',
        'produtos',
        'observacao',
        'situacao',
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
        return fornecedor::class;
    }
}
