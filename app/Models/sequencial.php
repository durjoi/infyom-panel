<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class sequencial
 * @package App\Models
 * @version May 24, 2020, 9:00 am UTC
 *
 * @property integer protocolo
 * @property integer entrada
 * @property integer saida
 * @property integer poste_numero
 * @property integer obras
 * @property integer eventos
 */
class sequencial extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'sequencials';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected static $logAttributes = ['*'];



    public $fillable = [
        'protocolo',
        'entrada',
        'saida',
        'poste_numero',
        'obras',
        'eventos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'protocolo' => 'integer',
        'entrada' => 'integer',
        'saida' => 'integer',
        'poste_numero' => 'integer',
        'obras' => 'integer',
        'eventos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'protocolo' => 'required',
        'entrada' => 'required',
        'saida' => 'required',
        'poste_numero' => 'required',
        'obras' => 'required',
        'eventos' => 'required'
    ];


}
