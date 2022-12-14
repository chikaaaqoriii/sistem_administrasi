<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Mufti Restu Mahesa',
            'username' => 'restumahesa',
            'email' => 'mufti.restumahesa@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'nama' => 'Siti Rochika Qori',
            'username' => 'chikaa',
            'email' => 'chika123@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
