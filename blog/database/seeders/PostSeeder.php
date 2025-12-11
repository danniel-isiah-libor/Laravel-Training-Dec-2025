<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\Post;
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        User::factory(5)->hasPosts(3)->create();
    }
}
=======
        User::factory()
            ->count(5)
            // ->hasPosts(5)
            ->has(Post::factory()->count(5))
            ->create();
    }
}
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
