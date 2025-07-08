<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Operator',
                'description' => '911 Call Operator',
            ],
            [
                'name' => 'Fire Dispatcher',
            ],
            [
                'name' => 'Sheriff Dispatcher',
            ],
            [
                'name' => 'Police Dispatcher',
            ],
            [
                'name' => 'Animal Control Dispatcher',
            ],
        ];

        foreach ($roles as &$role) {
            $role['description'] ??= $role['name'];

            Role::create($role);
        }

        $roles = Role::pluck('id')->toArray();

        foreach (User::all() as $user) {
            // Always include role ID 1
            $assignedRoles = [1];

            $otherRoles = array_diff($roles, [1]);

            if (!empty($otherRoles)) {
                $count = fake()->numberBetween(1, count($otherRoles));
                $randomOthers = collect($otherRoles)->shuffle()->take($count)->toArray();

                $assignedRoles = array_merge($assignedRoles, $randomOthers);
            }

            $user->roles()->sync($assignedRoles);
        }
    }
}
