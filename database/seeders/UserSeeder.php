<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory()->create([
            'user' => 'admin',
            'password' => Hash::make('admin', ['rounds' => 12]),
        ]);

        User::factory()->create([
            'user' => 'admin2',
            'password' => Hash::make('admin2', ['rounds' => 12]),
        ]);
    }
}
