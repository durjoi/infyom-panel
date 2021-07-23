<?php

namespace App\Models;

use Spatie\Activitylog\Traits\LogsActivity;
use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class item
 * @package App\Models
 * @version May 26, 2020, 9:58 am UTC
 *
 * @property string produto
 * @property string marca
 * @property string unidade
 * @property string quantidade
 * @property string preco_total
 * @property integer ordem_de_servico_id
 */
class item extends Model
{
    use SoftDeletes;

    use LogsActivity;

    public $table = 'item';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'produto',
        'marca',
        'unidade',
        'quantidade',
        'preco_total',
        'ordem_de_servico_id'
    ];

    protected static $logAttributes = ['*'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'produto' => 'string',
        'marca' => 'string',
        'unidade' => 'string',
        'quantidade' => 'string',
        'preco_total' => 'string',
        'ordem_de_servico_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'produto' => 'required',
        'marca' => 'required',
        'unidade' => 'required',
        'quantidade' => 'required',
        'preco_total' => 'required',
        'ordem_de_servico_id' => 'required'
    ];


}
