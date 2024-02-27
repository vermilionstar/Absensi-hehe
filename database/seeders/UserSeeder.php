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
                'id_karyawan'=> '1',
            	'nama_admin'=> 'admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt(12345678)
        ]);
        $admin->assignRole('admin');
    }
   
}
