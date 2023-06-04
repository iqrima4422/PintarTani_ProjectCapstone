<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'level' => 'admin',
                'foto' => 'img/admin/admin.jpg',
                'notelp' => '081234567890',
                'alamat' => 'Jl. Raya Sukabumi',
                'created_at' => now(),
            ],
            [
                'name' => 'Iqrimanise',
                'email' => 'iqrimannisa@gmail.com',
                'password' => bcrypt('imacantik'),
                'level' => 'user',
                'foto' => 'img/admin/admin.jpg',
                'notelp' => '081232515427',
                'alamat' => 'Malang',
                'created_at' => now(),
            ],
        ]);
    }
}