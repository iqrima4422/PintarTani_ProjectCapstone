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
                'kategori' => 'Sayuran',
                'merk' => 'Tadukan Raga',
                'stok' => 50,
                'harga' => 3000,
                'gambar' =>'img/product/pintartani/Singkong.jpg',
                'supplier_id' => '1'
            ],
            [
                'product' => 'Jagung',
                'kategori' => 'Buah',
                'merk' => 'Tadukan Raga',
                'stok' => 30,
                'harga' => 5000,
                'gambar' =>'img/product/pintartani/Jagung.jpg',
                'supplier_id' => '2'
            ],
            [
                'product' => 'Pakcoy',
                'kategori' => 'Sayuran',
                'merk' => 'Tadukan Raga',
                'stok' => 20,
                'harga' => 17000,
                'gambar' =>'img/product/pintartani/Pakcoy.jpg',
                'supplier_id' => '1'
            ],
            [
                'product' => 'Serai',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Tadukan Raga',
                'stok' => 20,
                'harga' => 13000,
                'gambar' =>'img/product/pintartani/Serai.jpg',
                'supplier_id' => '3'

            ],
            [
                'product' => 'Pepaya',
                'kategori' => 'Buah',
                'merk' => 'Tadukan Raga',
                'stok' => 50,
                'harga' => 15000,
                'gambar' =>'img/product/pintartani/Pepaya.jpg',
                'supplier_id' => '2'
            ],
            [
                'product' => 'Pupuk Kompos',
                'kategori' => 'Bahan Tani',
                'merk' => 'Tadukan Raga',
                'stok' => 40,
                'harga' => 2500,
                'gambar' =>'img/product/pintartani/Pupuk-kompos.jpg',
                'supplier_id' => '4'
            ],
            [
                'product' => 'Pupuk Kandang',
                'kategori' => 'Bahan Tani',
                'merk' => 'Tadukan Raga',
                'stok' => 60,
                'harga' => 4000,
                'gambar' =>'img/product/pintartani/Pupuk-kandang.jpg',
                'supplier_id' => '4'
            ],
            [
                'product' => 'Bibit Singkong',
                'kategori' => 'Bahan Tani',
                'merk' => 'Tadukan Raga',
                'stok' => 50,
                'harga' => 3000,
                'gambar' =>'img/product/pintartani/Bibit-singkong.jpg',
                'supplier_id' => '4'
            ],
            [
                'product' => 'Cabe Merah',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Tadukan Raga',
                'stok' => 30,
                'harga' => 12000,
                'gambar' =>'img/product/pintartani/Cabemerah.jpg',
                'supplier_id' => '5'
            ],
            [
                'product' => 'Cabe Hijau',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Tadukan Raga',
                'stok' => 40,
                'harga' => 17000,
                'gambar' =>'img/product/pintartani/Cabehijau.jpg',
                'supplier_id' => '5'
            ],
            [
                'product' => 'Cabe Rawit',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Tadukan Raga',
                'stok' => 30,
                'harga' => 40000,
                'gambar' =>'img/product/pintartani/Cabe-rawit.jpg',
                'supplier_id' => '5'
            ],
            [
                'product' => 'Kangkung',
                'kategori' => 'Sayuran',
                'merk' => 'Tadukan Raga',
                'stok' => 50,
                'harga' => 10000,
                'gambar' =>'img/product/pintartani/Kangkung.jpg',
                'supplier_id' => '1'
            ],
        ]);
    }
}
