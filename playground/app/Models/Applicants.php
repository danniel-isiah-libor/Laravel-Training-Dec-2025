<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{

    /**
     * Return applicant data
     * @return object
     */
    public static function getData()
    {
        return (object) [
            [
                'id' => 1,
                'company' => "DICT",
                'position' => 'ITO I',
                'tenure' => 'May 2012 - May 2015'
            ],
            [
                'id' => 2,
                'company' => "SEC",
                'position' => 'ISA II',
                'tenure' => 'Jan 2016 - Dec 2016'
            ],
            [
                'id' => 3,
                'company' => "DTI",
                'position' => 'ITO III',
                'tenure' => 'Jan 2017 - Present'
            ]
        ];
    }
}
