<?php

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
        \App\User::create([
            'name'=>'ohtsubo',
            'email'=>'ohtsubo@test.com',
            'password'=>bcrypt('password'),
            'role'=>'role'
        ]);

        \Artisan::call('passport:client --password');
    }
}
