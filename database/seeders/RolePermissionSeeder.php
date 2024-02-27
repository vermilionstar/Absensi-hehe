<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //role
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            ['name' => 'admin']
        );
        $role_karyawan = Role::updateOrCreate(
            [
                'name' => 'karyawan'
            ],
            ['name' => 'karyawan']
        );

        //permission
        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard'
            ],
            ['name' => 'view_dashboard']     
        );
        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'user_index'
            ],
            ['name' => 'user_index']     
        );
        $permission3 = Permission::updateOrCreate(
            [
                'name' => 'cekout'
            ],
            ['name' => 'cekout']     
        );

        //role has pemission
        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_karyawan->givePermissionTo($permission3);

        $user = User::find(1);
        $user2 = User::find(2);

        $user->assignRole('admin');
        $user2->assignRole('karyawan');

        

    }
}
