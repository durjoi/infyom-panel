<?php

namespace App\Repositories;

use App\Models\activityLog;
use App\Repositories\BaseRepository;

/**
 * Class activityLogRepository
 * @package App\Repositories
 * @version May 24, 2020, 10:07 am UTC
*/

class activityLogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'log_name',
        'description',
        'subject_id',
        'subject_type',
        'causer_id',
        'causer_type',
        'properties'
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
        return activityLog::class;
    }
}
