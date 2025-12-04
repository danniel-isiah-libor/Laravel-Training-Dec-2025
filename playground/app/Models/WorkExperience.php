<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
public static function getExperiences()
    {
        return [
            (object) [
                'company' => 'Tech Solutions Inc.',
                'position' => 'Software Engineer',
                'duration' => 'Jan 2020 - Present',
            ],
            (object) [
                'company' => 'Web Innovations Ltd.',
                'position' => 'Junior Developer',
                'duration' => 'Jun 2018 - Dec 2019',
            ],
        ];
    }
}
