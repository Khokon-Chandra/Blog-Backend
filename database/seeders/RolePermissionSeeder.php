<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        // Create Roles
        $super_admin = Role::create(['name' => 'super admin']);
        $admin = Role::create(['name' => 'admin']);
        $manager = Role::create(['name' => 'editor']);
        $executive = Role::create(['name' => 'viewer']);
        $user = Role::create(['name' => 'user']);

        Permission::firstOrCreate(['name' => 'read_backend']);
        Permission::firstOrCreate(['name' => 'read_post']);
        Permission::firstOrCreate(['name' => 'write_post']);
        Permission::firstOrCreate(['name' => 'delete_post']);
    }
}
