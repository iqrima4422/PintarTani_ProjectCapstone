<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'nama' => 'Ade Irawan',
                'alamat' => 'Dusun I Tungkusan',
                'telp' => '08123412345',
            ],
            [
                'nama' => 'Sutanto',
                'alamat' => 'Dusun II',
                'telp' => '08123456789',
            ],
            [
                'nama' => 'Tugimen',
                'alamat' => 'Dusun III Sei Basah',
                'telp' => '08987654321',
            ],
            [
                'nama' => 'Hariyanto',
                'alamat' => 'Dusun IV Undian',
                'telp' => '08123098456',
            ],
            [
                'nama' => 'Supratman',
                'alamat' => 'Dusun V Kampung Dalam',
                'telp' => '08987123654',
            ],
        ]);
    }
}
