<?php

use Illuminate\Database\Seeder;
use App\User;
use Hash as Bcrypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Ahmad Rouf Mawanto',
            'email' => 'superadmin@gmail.com',
            'password' => Bcrypt::make('12345678'),
        ]);
        $user->assignRole(['superadmin']);

        $user = User::create([
            'name' => 'Ahmad Rouf',
            'email' => 'admin@gmail.com',
            'password' => Bcrypt::make('12345678'),
        ]);
        $user->assignRole(['admin']);
    }
}
