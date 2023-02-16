<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'admin',
                'password' => bcrypt('admin'),
            ],$default_user_value));
    
            $user = User::create(array_merge([
                'email' => 'Astungkara@gmail.com',
                'name' => 'user',
                'password' => bcrypt('user'),
            ],$default_user_value));
    
            $role_admin = Role::create(['name' => 'admin']);
            $role_user = Role::create(['name' => 'user']);
    
            $permission = Permission::create(['name' => 'user_page role']);
            $permission = Permission::create(['name' => 'dashboard_page role']);
            $permission = Permission::create(['name' => 'home_page role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);
            $permission = Permission::create(['name' => 'read role']);

            #Admin
            #$role_admin->givePermissionTo('delete role');
            #$role_admin->givePermissionTo('read role');
            #$role_admin->givePermissionTo('create role');
            $role_admin->givePermissionTo('user_page role');
            $role_admin->givePermissionTo('dashboard_page role');


            #User
            $role_user->givePermissionTo('home_page role');
            
            
            $admin->assignRole('admin');
            $user->assignRole('user');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

    }
}
