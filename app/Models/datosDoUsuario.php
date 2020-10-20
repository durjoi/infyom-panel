<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class datosDoUsuario
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property string nome
 * @property string email
 * @property string senha
 * @property string tipo
 * @property string telefone_ddd
 * @property string telefone_numero
 * @property string empresa
 * @property string cargo_setor
 * @property string direcionar
 * @property string mensagem_instantanea
 * @property string receber_sms
 * @property string w_acesso_whatsapp
 * @property string w_menu_consultas
 */
class datosDoUsuario extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'datos_do_usuarios';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'email' => 'string',
        'senha' => 'string',
        'tipo' => 'string',
        'telefone_ddd' => 'string',
        'telefone_numero' => 'string',
        'empresa' => 'string',
        'cargo_setor' => 'string',
        'direcionar' => 'string',
        'mensagem_instantanea' => 'string',
        'receber_sms' => 'string',
        'w_acesso_whatsapp' => 'string',
        'w_menu_consultas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'email' => 'required',
        'senha' => 'required',
        'tipo' => 'required',
        'telefone_ddd' => 'required',
        'telefone_numero' => 'required',
        'empresa' => 'required',
        'cargo_setor' => 'required',
        'direcionar' => 'required',
        'mensagem_instantanea' => 'required',
        'receber_sms' => 'required',
        'w_acesso_whatsapp' => 'required',
        'w_menu_consultas' => 'required'
    ];


}
