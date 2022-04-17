<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class Administrator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'wilson',
            'email' => 'adminapp@gmail.com',
            'role' => 'administrador',
            'password' => Hash::make('12345678')
        ]);
    }
}
