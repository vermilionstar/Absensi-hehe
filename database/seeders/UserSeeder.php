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
        $admin = User::create([
            	'nama_admin'=> 'admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt(12345678)
        ]);
        $admin->assignRole('admin');

        $superadmin = User::create([
            'nama_admin'=> 'superadmin',
            'username'=>'superadmin',
            'email'=>'superadmin@gmail.com',
            'password'=>bcrypt(123)
    ]);
    $superadmin->assignRole('karyawan');

        $karyawan = User::create([
            'nama_admin'=> 'karyawan',
            'username'=>'karyawan',
            'email'=>'karyawan@gmail.com',  
            'password'=>bcrypt(1234)
    ]);
    $karyawan->assignRole('karyawan');
    }
}
