<?php

namespace App\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class activityLog
 * @package App\Models
 * @version May 24, 2020, 10:07 am UTC
 *
 * @property string log_name
 * @property string description
 * @property integer subject_id
 * @property string subject_type
 * @property integer causer_id
 * @property string causer_type
 * @property string properties
 */
class activityLog extends Model
{
    use SoftDeletes;

    public $table = 'activity_log';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'log_name',
        'description',
        'subject_id',
        'subject_type',
        'causer_id',
        'causer_type',
        'properties'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'log_name' => 'string',
        'description' => 'string',
        'subject_id' => 'integer',
        'subject_type' => 'string',
        'causer_id' => 'integer',
        'causer_type' => 'string',
        'properties' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'required'
    ];

}
