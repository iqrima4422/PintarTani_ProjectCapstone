<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region')->insert([
            [
                'alamat_cod' => 'Jl. Bandar Labuhan, Tandukan Raga, Kec. Sinembah Tj. Muda Hilir, Kabupaten Deli Serdang, Sumatera Utara 20362',
            ],
            [
                'alamat_cod' => 'Jl. Perhubungan III, Tandukan Raga, Kec. Sinembah Tj. Muda Hilir, Kabupaten Deli Serdang, Sumatera Utara 20362',
            ],
            [
                'alamat_cod' => 'Jl. Limau Mungkur, Tandukan Raga, Kec. Sinembah Tj. Muda Hilir, Kabupaten Deli Serdang, Sumatera Utara 20362',
            ],
        ]);
    }
}
