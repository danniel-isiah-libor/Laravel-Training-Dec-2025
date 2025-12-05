<?php

namespace Database\Seeders;

use App\Models\WorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // WorkExperience::truncate();

        // WorkExperience::factory()->count(10)->create();

        // retrieve csv...
        // convert to array...

        // Company::insert([
        //     [
        //         'company_name' => 'Example Corp',
        //         'position' => 'Software Engineer',
        //         'tenure' => '2018-2020',
        //     ],
        //     [
        //         'company_name' => 'Another Inc',
        //         'position' => 'Senior Developer',
        //         'tenure' => '2020-Present',
        //     ],
        //     [
        //         'company_name' => 'Tech Solutions',
        //         'position' => 'Project Manager',
        //         'tenure' => '2016-2018',
        //     ],
        // ]);


        // // option 1
        // WorkExperience::create([
        //     'user_id' => 1,
        //     'uuid' => Str::uuid(),
        //     'company_name' => 'Example Corp',
        //     'position' => 'Software Engineer',
        //     'start_date' => now(),
        //     'end_date' => now(),
        // ]);

        // // option 2
        // $workExperience = new WorkExperience();
        // $workExperience->user_id = 1;
        // $workExperience->uuid = Str::uuid();
        // $workExperience->company_name = 'Another Inc';
        // $workExperience->position = 'Senior Developer';
        // $workExperience->start_date = now();
        // $workExperience->end_date = now();
        // $workExperience->save();

        // // option 3
        // WorkExperience::insert([
        //     [
        //         'user_id' => 1,
        //         'uuid' => Str::uuid(),
        //         'company_name' => 'Tech Solutions',
        //         'position' => 'Project Manager',
        //         'start_date' => now(),
        //         'end_date' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'user_id' => 1,
        //         'uuid' => Str::uuid(),
        //         'company_name' => 'Innovatech',
        //         'position' => 'Lead Engineer',
        //         'start_date' => now(),
        //         'end_date' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);

        // $record = WorkExperience::withTrashed()->where('id', 2)->first();

        // $record->company_name = 'Updated Corp';
        // $record->position = 'Updated Position';

        // $record->save();

        // WorkExperience::where('id', 2)->forceDelete();
    }
}
