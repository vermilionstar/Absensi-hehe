<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin = User::create([
        //     'id_karyawan' => '1',
        //     'nama_admin' => 'admin',
        //     'username' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt(12345678)
        // ]);
        // $admin->assignRole('admin');

        // $admin = User::create([
        //     'id_karyawan' => '1',
        //     'nama_admin' => 'saya',
        //     'username' => 'saya',
        //     'email' => 'saya@gmail.com',
        //     'password' => bcrypt(125)
        // ]);
        // $admin->assignRole('karyawan');

        // $admin = User::create([
        //     'id_karyawan' => '2',
        //     'nama_admin' => 'surya',
        //     'username' => 'surya',
        //     'email' => 'surya@gmail.com',
        //     'password' => bcrypt(123)
        // ]);
        // $admin->assignRole('karyawan');

        $admin = User::create([
            'id_karyawan' => '2',
            'nama_admin' => 'admin2',
            'username' => 'admin2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt(1234)
        ]);
        $admin->assignRole('admin');
    }
}
