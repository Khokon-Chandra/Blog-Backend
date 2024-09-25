<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        
        DB::table('roles')->insert([
            ['name' => 'super admin','guard_name'=>'web'],
            ['name' => 'admin','guard_name'=>'web'],
            ['name' => 'editor','guard_name'=>'web'],
            ['name' => 'viewer','guard_name'=>'web'],
            ['name' => 'user','guard_name'=>'web'],
        ]);

        DB::table('permissions')->insert([
            ['name' => 'read_dashboard','guard_name'=>'web'],

            ['name' => 'read_post','guard_name'=>'web'],
            ['name' => 'write_post','guard_name'=>'web'],
            ['name' => 'delete_post','guard_name'=>'web'],

            ['name' => 'read_comment','guard_name'=>'web'],
            ['name' => 'write_comment','guard_name'=>'web'],
            ['name' => 'delete_comment','guard_name'=>'web'],

            ['name' => 'read_category','guard_name'=>'web'],
            ['name' => 'write_category','guard_name'=>'web'],
            ['name' => 'delete_category','guard_name'=>'web'],

            ['name' => 'read_tag','guard_name'=>'web'],
            ['name' => 'write_tag','guard_name'=>'web'],
            ['name' => 'delete_tag','guard_name'=>'web'],

            ['name' => 'read_setting','guard_name'=>'web'],
            ['name' => 'write_setting','guard_name'=>'web'],
            ['name' => 'delete_setting','guard_name'=>'web'],

            ['name' => 'read_role','guard_name'=>'web'],
            ['name' => 'write_role','guard_name'=>'web'],
            ['name' => 'delete_role','guard_name'=>'web'],

            ['name' => 'read_permission','guard_name'=>'web'],
            ['name' => 'write_permission','guard_name'=>'web'],
            ['name' => 'delete_permission','guard_name'=>'web'],

            ['name' => 'read_user','guard_name'=>'web'],
            ['name' => 'write_user','guard_name'=>'web'],
            ['name' => 'delete_user','guard_name'=>'web'],

            ['name' => 'read_menu','guard_name'=>'web'],
            ['name' => 'write_menu','guard_name'=>'web'],
            ['name' => 'delete_menu','guard_name'=>'web'],

            ['name' => 'read_media','guard_name'=>'web'],
            ['name' => 'write_media','guard_name'=>'web'],
            ['name' => 'delete_media','guard_name'=>'web'],
        ]);



    }
}
