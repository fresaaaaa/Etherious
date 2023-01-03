<?php

namespace Database\Seeders;

// use App\Models\Commune;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Tests\TestCase;
use Illuminate\Database\Seeder;
use App\Models\User;
// use App\Models\Post;



class DatabaseSeeder extends Seeder
{
    use RefreshDatabase, InteractsWithDatabase;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        //

        // User::factory(5)->create();

        // User::create([
        //     'image' => 'fresa.jpg',
        //     'name' => 'Fresabayu',
        //     'username' => 'Fresaa',
        //     'email' => 'fresabayu123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
    }
}
