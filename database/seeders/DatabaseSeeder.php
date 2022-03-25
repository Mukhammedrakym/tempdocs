<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Database\Factories\AdminUserFactory;
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
         \App\Models\User::factory(5)->create();
         AdminUser::factory(1)->create([
             'name' => 'Admin',
             'email' => 'admin@mail.ru',
             'password' => bcrypt('123'),
             'city' => 'Astana',
             'address' => 'St. Kaldayakov',
             'organization' => 'ENU',
             'department' => 'IT',
             'post' => 'admin'
         ]);
    }
}
