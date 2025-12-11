<?php

namespace App\Models;

<<<<<<< HEAD
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
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkExperience extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'uuid',
        'company_name',
        'position',
        'start_date',
        'end_date',
    ];

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
>>>>>>> 31cff93ebf77aad3d6d0e606e529ca6083113c5a
        ];
    }
}
