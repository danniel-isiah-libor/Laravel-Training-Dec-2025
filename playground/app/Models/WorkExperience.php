<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    public static function getData()
    {
        return [
            (object) [
                'id' => 1,
                'company_name' => 'Example Corp',
                'position' => 'Software Engineer',
                'tenure' => '2018-2020',
            ],

            (object) [
                'id' => 2,
                'company_name' => 'Another Inc',
                'position' => 'Senior Developer',
                'tenure' => '2020-Present',
            ]
        ];
    }
}
