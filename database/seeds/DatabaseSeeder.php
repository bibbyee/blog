<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        Model::unguard();
        $this->call('PostTableSeeder');
    }
}

class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Post::truncate();
        factory(App\Post::class, 20)->create();
    }
}