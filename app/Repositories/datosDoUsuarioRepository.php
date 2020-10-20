<?php

namespace App\Repositories;

use App\Models\datosDoUsuario;
use App\Repositories\BaseRepository;

/**
 * Class datosDoUsuarioRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class datosDoUsuarioRepository extends BaseRepository
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
        'receber_sms',
        'w_acesso_whatsapp',
        'w_menu_consultas'
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
        return datosDoUsuario::class;
    }
}
