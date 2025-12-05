<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public static function getCompany(){
        return (object) [
            [
                'id' => 1,
                'company_name' => 'abc company',
                'address' => 'manila'
            ],
            [
                'id' => 2,
                'company_name' => 'abc company',
                'address' => 'manila'
            ],
            [
                'id' => 3,
                'company_name' => 'abc company',
                'address' => 'manila'
            ]
        ];
    }
}
