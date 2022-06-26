<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(Top100Seeder::class);
        $this->call(PlaylistSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SongSeeder::class);
        $this->call(MvSeeder::class);
        $this->call(ThemeSeeder::class);
        $this->call(BannerSeeder::class);
    }
}
