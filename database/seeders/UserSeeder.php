<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // This Syntax is Only For Mysql
        User::factory(3)->create();


        // // Syntax For Sqlite
        // $connection="sqlite";
        // $users=User::factory(3)->make(); // make method is only prepare to be save data in database
        // $users->each(function ($modal) use ($connection) {
        //     $modal->setConnection($connection);
        //     $modal->save();
        // });
    }
}
