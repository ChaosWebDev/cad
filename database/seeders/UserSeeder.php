<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'username' => 'jpgerber',
            'email' => 'jordangerber@gmail.com',
            'password' => Hash::make('jordan'),
        ]);

        UserInformation::create([
            'user_id' => $user->id,
            'first' => 'Jordan',
            'middle' => 'Paul',
            'last' => 'Gerber'
        ]);

        unset($user);

        User::factory(20)->create();
        $users = User::where('username', '!=', 'jpgerber')->get();
        foreach ($users as $user) {
            UserInformation::factory()->create([
                'user_id' => $user->id
            ]);
        }
    }
}
