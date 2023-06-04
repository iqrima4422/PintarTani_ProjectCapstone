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
                'telp' => '0812341234',
            ],
            [
                'nama' => 'Sutanto',
                'alamat' => 'Dusun II',
                'telp' => '0812341234',
            ],
            [
                'nama' => 'Tugimen',
                'alamat' => 'Dusun III Sei Basah',
                'telp' => '0812341234',
            ],
            [
                'nama' => 'Hariyanto',
                'alamat' => 'Dusun IV Undian',
                'telp' => '0812341234',
            ],
            [
                'nama' => 'Supratman',
                'alamat' => 'Dusun V Kampung Dalam',
                'telp' => '0812341234',
            ],
        ]);
    }
}
