<?php

namespace App\Models;

use Spatie\Activitylog\Traits\LogsActivity;
use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class requisicao
 * @package App\Models
 * @version May 24, 2020, 12:09 pm UTC
 *
 * @property string data_operacao
 * @property string operacao
 * @property string solicitante
 * @property string autorizado_por
 * @property string obras
 * @property string bairro
 * @property string turma
 * @property string observacao
 */
class requisicao extends Model
{
    use SoftDeletes;

    public $table = 'requisicao';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'data_operacao',
        'operacao',
        'solicitante',
        'autorizado_por',
        'obras',
        'bairro',
        'turma',
        'observacao'
    ];

    protected static $logAttributes = ['*'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'data_operacao' => 'date',
        'operacao' => 'string',
        'solicitante' => 'string',
        'autorizado_por' => 'string',
        'obras' => 'string',
        'bairro' => 'string',
        'turma' => 'string',
        'observacao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'data_operacao' => 'required',
        'operacao' => 'required',
        'solicitante' => 'required',
        'autorizado_por' => 'required',
        'obras' => 'required',
        'bairro' => 'required',
        'turma' => 'required',
        'observacao' => 'required'
    ];


}
