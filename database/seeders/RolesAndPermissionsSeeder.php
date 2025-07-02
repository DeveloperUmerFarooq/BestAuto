<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define general permissions
        $generalPermissions = [
            'view dashboard',
            'manage users',
            'manage roles',
            'edit profile',
            'view reports',
            'view appointment',
            'view appointments',
            'update appointments',
            'update password',
        ];

        $blogPermissions = [
            'add blogs',
            'update blogs',
            'delete blogs',
        ];

  
        $allPermissions = array_merge($generalPermissions, $blogPermissions);
        foreach ($allPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $user = Role::firstOrCreate(['name' => 'user']);
        $user->givePermissionTo(['view appointment', 'update password']);

        $manager = Role::firstOrCreate(['name' => 'manager']);
        $manager->givePermissionTo(['view appointments', 'update appointments', 'update password']);

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->givePermissionTo([
            'view dashboard',
            'view appointments',
            'update appointments',
            'manage users',
            'update password',
        ]);

        $superadmin = Role::firstOrCreate(['name' => 'superadmin']);
        $superadmin->givePermissionTo(Permission::all());
    }
}
