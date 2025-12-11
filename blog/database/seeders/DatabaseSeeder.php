<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        // User::firstOrCreate(
        //     ['email' => 'test@example.com'],
        //     [
        //         'name' => 'Test User',
        //         'password' => 'password',
        //         'email_verified_at' => now(),
        //     ]
        // );
=======
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
        $this->call([
            PostSeeder::class,
        ]);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
