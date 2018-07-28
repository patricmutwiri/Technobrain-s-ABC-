<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class crmcalls
 * @package App\Models
 * @version December 18, 2017, 1:32 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection roleHasPermissions
 * @property string q1
 * @property string q2
 * @property string q3
 * @property string q4
 * @property string q5
 * @property string q6
 * @property string q7
 * @property string q8
 * @property string q9
 * @property string q10
 * @property string q11_email
 * @property string q12
 */
class crmcalls extends Model
{

    public $table = 'crmcalls';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'q0',
        'not_reachable',
        'q1',
        'q2',
        'q2_notclientsnumber',
        'q2_datetime',
        'q3',
        'q3_desposition',
        'q4',
        'q5',
        'q5_others',
        'reachable_desposition',
        'q6',
        'q6_others',
        'q7',
        'q8',
        'q9',
        'q10',
        'q10_datetime',
        'q11_email',
        'q12',
        'q12_details',
        'q13',
        'q13_phone',
        'q13_mail'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
        'q2'    => 'string',
        'q2_notclientsnumber'   => 'string',
        'q2_datetime'           => 'string',
        'q3'    => 'string',
        'q4'    => 'string',
        'q5'    => 'string',
        'q5_others' => 'string',
        'q6'    => 'string',
        'q6_others' => 'string',
        'q7'    => 'string',
        'q8'    => 'string',
        'q9'    => 'string',
        'q10'   => 'string',
        'q10_datetime'  => 'string',
        'q11_email'     => 'string',
        'q12'   => 'string',
        'q12_details'   => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
