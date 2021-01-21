<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email', 'test@test.com')->first()) {
            User::create(array(
                'name'	=> 'Test',
                'email'	=> 'test@test.com',
                'password'	=> Hash::make('12345678'),
            ));
        }
    }
}
