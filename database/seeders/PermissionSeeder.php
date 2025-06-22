<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permisos para usuarios
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        // Permisos para roles
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'edit roles']);
        Permission::create(['name' => 'delete roles']);

        // Permisos para posts (ejemplo)
        Permission::create(['name' => 'view posts']);
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);

        // Crear roles y asignar permisos
        $userRole = Role::create(['name' => 'user'])
            ->givePermissionTo([
                'view posts',
            ]);

        $editorRole = Role::create(['name' => 'editor'])
            ->givePermissionTo([
                'view posts',
                'create posts',
                'edit posts',
            ]);

        $adminRole = Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());

        // Si quieres asignar el rol admin a un usuario específico (opcional)
        // \App\Models\User::find(1)->assignRole('admin');
    }
}