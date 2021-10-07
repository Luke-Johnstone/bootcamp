<?php

namespace Database\Seeders;

use App\Models\CelebrityMovie;
use App\Models\Celebrity;
use App\Models\Director;
use App\Models\DirectorMovie;
use App\Models\Genre;
use App\Models\GenreMovie;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Celebrity::factory(20)->create();
        Director::factory(20)->create();
        Genre::factory(5)->create();
        Movie::factory(20)->create();
        User::factory(10)->create();
        CelebrityMovie::factory(20)->create();
        DirectorMovie::factory(20)->create();
        GenreMovie::factory(20)->create();
    }
}
