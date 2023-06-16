<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product' => 'Singkong',
                'kategori' => 'Umbi Akar',
                'merk' => 'TaduChoice',
                'stok' => 50,
                'harga' => 3000,
                'gambar' =>'img/product/singkong.png',
                'supplier_id' => '1'
            ],
            [
                'product' => 'Jagung',
                'kategori' => 'Buah',
                'merk' => 'TaduChoice',
                'stok' => 30,
                'harga' => 5000,
                'gambar' =>'img/product/jagung.png',
                'supplier_id' => '2'
            ],
            [
                'product' => 'Pakcoy',
                'kategori' => 'Sayuran',
                'merk' => 'TaduChoice',
                'stok' => 20,
                'harga' => 17000,
                'gambar' =>'img/product/pakcoy.png',
                'supplier_id' => '1'
            ],
            [
                'product' => 'Serai',
                'kategori' => 'Rumput',
                'merk' => 'TaduChoice',
                'stok' => 20,
                'harga' => 13000,
                'gambar' =>'img/product/serai.png',
                'supplier_id' => '3'

            ],
            [
                'product' => 'Pepaya',
                'kategori' => 'Buah',
                'merk' => 'TaduChoice',
                'stok' => 50,
                'harga' => 15000,
                'gambar' =>'img/product/pepaya.png',
                'supplier_id' => '2'
            ],
            [
                'product' => 'Pupuk Kompos',
                'kategori' => 'Pupuk',
                'merk' => 'TaduChoice',
                'stok' => 40,
                'harga' => 2500,
                'gambar' =>'img/product/pkompos.png',
                'supplier_id' => '4'
            ],
            [
                'product' => 'Pupuk Kandang',
                'kategori' => 'Pupuk',
                'merk' => 'TaduChoice',
                'stok' => 60,
                'harga' => 4000,
                'gambar' =>'img/product/pkandang.png',
                'supplier_id' => '4'
            ],
            [
                'product' => 'Bibit Singkong',
                'kategori' => 'Umbi Akar',
                'merk' => 'TaduChoice',
                'stok' => 50,
                'harga' => 3000,
                'gambar' =>'img/product/bibit-singkong.png',
                'supplier_id' => '4'
            ],
            [
                'product' => 'Cabe Merah',
                'kategori' => 'Sayuran',
                'merk' => 'TaduChoice',
                'stok' => 30,
                'harga' => 12000,
                'gambar' =>'img/product/cabemerah.png',
                'supplier_id' => '5'
            ],
            [
                'product' => 'Cabe Hijau',
                'kategori' => 'Sayuran',
                'merk' => 'TaduChoice',
                'stok' => 40,
                'harga' => 17000,
                'gambar' =>'img/product/pintartani/cabehijau.png',
                'supplier_id' => '5'
            ],
            [
                'product' => 'Cabe Rawit',
                'kategori' => 'Sayuran',
                'merk' => 'TaduChoice',
                'stok' => 30,
                'harga' => 40000,
                'gambar' =>'img/product/caberawit.png',
                'supplier_id' => '5'
            ],
            [
                'product' => 'Kangkung',
                'kategori' => 'Sayuran',
                'merk' => 'TaduChoice',
                'stok' => 50,
                'harga' => 10000,
                'gambar' =>'img/product/kangkung.png',
                'supplier_id' => '1'
            ],
        ]);
    }
}