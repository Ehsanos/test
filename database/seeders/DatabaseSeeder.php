<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$user= \App\Models\User::factory(10)->create();
         \App\Models\Post::factory()
             ->count(2)
             ->for(\App\Models\User::factory()->state(['name'=>'add cooments to post']))
             ->has(\App\Models\Comment::factory(10)->for(\App\Models\User::factory()->state(['name'=>'Somo'])))
             ->create();
    }
}
