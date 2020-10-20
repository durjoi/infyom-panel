<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Fatura_manutencao
 * @package App\Models
 * @version May 24, 2020, 9:03 am UTC
 *
 * @property string numero
 * @property integer ano
 * @property string situacao
 * @property string aberta_em
 * @property integer aberta_id_usuario
 * @property string encaminhada_em
 * @property integer encaminhada_id_usuario
 * @property string pago_em
 * @property integer pago_id_usuario
 * @property string data_inicio
 * @property string data_termino
 * @property integer id_cidade
 * @property integer id_empresa
 * @property integer id_meses
 */
class Fatura_manutencao extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'fatura_manutencaos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'numero',
        'ano',
        'situacao',
        'aberta_em',
        'aberta_id_usuario',
        'encaminhada_em',
        'encaminhada_id_usuario',
        'pago_em',
        'pago_id_usuario',
        'data_inicio',
        'data_termino',
        'id_cidade',
        'id_empresa',
        'id_meses'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero' => 'string',
        'ano' => 'integer',
        'situacao' => 'string',
        'aberta_em' => 'date',
        'aberta_id_usuario' => 'integer',
        'encaminhada_em' => 'date',
        'encaminhada_id_usuario' => 'integer',
        'pago_em' => 'date',
        'pago_id_usuario' => 'integer',
        'data_inicio' => 'date',
        'data_termino' => 'date',
        'id_cidade' => 'integer',
        'id_empresa' => 'integer',
        'id_meses' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero' => 'required',
        'ano' => 'required',
        'situacao' => 'required',
        'aberta_em' => 'required',
        'aberta_id_usuario' => 'required',
        'encaminhada_em' => 'required',
        'encaminhada_id_usuario' => 'required',
        'pago_em' => 'required',
        'pago_id_usuario' => 'required',
        'data_inicio' => 'required',
        'data_termino' => 'required',
        'id_cidade' => 'required',
        'id_empresa' => 'required',
        'id_meses' => 'required'
    ];

    public function aberta_usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'aberta_id_usuario');
    }
    public function encaminhada_usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'encaminhada_id_usuario');
    }
    public function pago_usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'pago_id_usuario');
    }
    public function cidade(): BelongsTo
    {
        return $this->belongsTo(cidade::class, 'id_cidade');
    }
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresas::class, 'id_empresa');
    }
    public function meses(): BelongsTo
    {
        return $this->belongs(meses::class, 'id_meses');
    }
}
