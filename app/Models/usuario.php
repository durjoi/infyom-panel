<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class usuario
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property string nome
 * @property string email
 * @property string senha
 * @property string tipo
 * @property integer telefone_ddd
 * @property integer telefone_numero
 * @property string empresa
 * @property string cargo_setor
 * @property string direcionar
 * @property integer mensagem_instantanea
 * @property integer receber_mensagem
 * @property integer receber_sms
 * @property string|\Carbon\Carbon incluidoem
 * @property integer w_acesso_whatsapp
 * @property integer w_menu_consultas
 * @property integer w_menu_veiculos
 */
class usuario extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'usuarios';

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
        'receber_mensagem',
        'receber_sms',
        'incluidoem',
        'w_acesso_whatsapp',
        'w_menu_consultas',
        'w_menu_veiculos'
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
        'telefone_ddd' => 'integer',
        'telefone_numero' => 'integer',
        'empresa' => 'string',
        'cargo_setor' => 'string',
        'direcionar' => 'string',
        'mensagem_instantanea' => 'integer',
        'receber_mensagem' => 'integer',
        'receber_sms' => 'integer',
        'incluidoem' => 'datetime',
        'w_acesso_whatsapp' => 'integer',
        'w_menu_consultas' => 'integer',
        'w_menu_veiculos' => 'integer'
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
        'receber_mensagem' => 'required',
        'receber_sms' => 'required',
        'incluidoem' => 'required',
        'w_acesso_whatsapp' => 'required',
        'w_menu_consultas' => 'required',
        'w_menu_veiculos' => 'required'
    ];


}
