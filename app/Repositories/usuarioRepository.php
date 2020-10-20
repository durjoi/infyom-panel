<?php

namespace App\Repositories;

use App\Models\usuario;
use App\Repositories\BaseRepository;

/**
 * Class usuarioRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class usuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'email',
        'senha',
        'tipo',
        'telefone_ddd',
        'telefone_numero',
        'empresa',
        'cargo_setor',
        'direcionar',
        'mensagem_instantanea',
        'receber_mensagem',
        'receber_sms',
        'incluidoem',
        'w_acesso_whatsapp',
        'w_menu_consultas',
        'w_menu_veiculos'
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
        return usuario::class;
    }
}
