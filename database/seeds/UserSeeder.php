<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(User::class)->create([
            'name' => 'Dario Conde',
            'email' => 'dcondeojeda@gmail.com',
            'password' => bcrypt('123456789'),
            'is_admin' => true,
        ]);

        factory(User::class, 48)->create();
    }
}