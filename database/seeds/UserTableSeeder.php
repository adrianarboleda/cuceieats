<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'adrianarboledadavis@gmail.com')->first();

        if(!$user){
            User::create([
                'name' => 'Admin',
                'email' => 'adrianarboledadavis@gmail.com',
                'password' => Hash::make('123$%&'),
                'role' => 'admin'
            ]);
        }

        User::create([
            'name' => 'Tienda1',
            'email' => 'tienda1@gmail.com',
            'password' => Hash::make('123$%&')
        ]);
    }
}
