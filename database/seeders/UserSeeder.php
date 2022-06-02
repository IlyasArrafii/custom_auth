<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
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
        $manager = Admin::create([
            'name' => 'afif',
            'email' => 'afif@gmail.com',
            'password' => bcrypt('1234567')
        ]);

        $manager->assignRole('manager');

        $karyawan = Admin::create([
            'name' => 'sudrajat',
            'email' => 'sudrajat@gmail.com',
            'password' => bcrypt('1234567')
        ]);

        $karyawan->assignRole('karyawan');
    }
}
