<?php

namespace App\Repositories;

use App\Models\crmcalls;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class crmcallsRepository
 * @package App\Repositories
 * @version December 18, 2017, 1:32 pm UTC
 *
 * @method crmcalls findWithoutFail($id, $columns = ['*'])
 * @method crmcalls find($id, $columns = ['*'])
 * @method crmcalls first($columns = ['*'])
*/
class crmcallsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'q1',
        'q2_notclientsnumber',
        'q2_datetime',
        'q3',
        'q4',
        'q5',
        'q5_others',
        'q6',
        'q6_others',
        'q7',
        'q8',
        'q9',
        'q10',
        'q10_datetime',
        'q11_email',
        'q12',
        'q12_details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return crmcalls::class;
    }
}
