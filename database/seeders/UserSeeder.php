<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserInformation;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'username' => 'jordangerber',
            'email' => 'jordangerber@gmail.com',
        ]);

        UserInformation::create([
            'user_id' => $user->id,
            'first' => 'Jordan',
            'last' => 'Gerber',
            'dob' => '1986-04-18',
            'sex' => 'Male'
        ]);

        User::factory(10)->create();

        $users = User::where('username', '!=', 'jordangerber')->get();
        foreach ($users as $user) {
            UserInformation::factory()->create(['user_id' => $user->id]);
        }
    }
}
