<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\ReservationFactory;
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
        // $this->call(UserSeeder::class);
        // $this->call(CommentSeeder::class);
        // $this->call(RoomSeeder::class);


        $this->call([UserSeeder::class,CommentSeeder::class,RoomSeeder::class,ReservationSeeder::class]);
    }
}
