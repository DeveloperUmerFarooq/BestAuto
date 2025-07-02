<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' =>'user1122',
                'role' => 'user',
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@example.com',
                'password' =>'manger1122',
                'role' => 'manager',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' =>'admin1122',
                'role' => 'admin',
            ],
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@example.com',
                'password' =>'superadmin1122',
                'role' => 'superadmin',
            ],
        ];

        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => $userData['password'],
                ]
            );

            if (!$user->hasRole($userData['role'])) {
                $user->assignRole($userData['role']);
            }
        }
    }
}
