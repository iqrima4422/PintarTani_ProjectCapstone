<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'judul' => 'Penyiapan Media Tanam',
                'gambar' => 'img/artikel/artikel2.jpeg',
                'deskripsi' => 'Media tanam memainkan peran penting dalam kegiatan bercocok tanam dan dapat mempengaruhi hasil produksi tanaman. Jenis-jenis media tanam sangat beragam, terutama dengan perkembangan metode bercocok tanam seperti hidroponik dan aeroponik.
                Media tanam yang baik harus memenuhi syarat-syarat tertentu:
                1. Menyediakan ruang tumbuh dan menopang tanaman: Media tanam harus gembur agar akar tanaman dapat tumbuh dengan baik dan menopang batang tanaman. Namun, media tanam juga harus cukup padat untuk mencegah tanaman roboh.
                2. Porositas yang baik: Media tanam harus memiliki kemampuan menyimpan air serta drainase dan aerasi yang baik. Ini memungkinkan media tanam mempertahankan kelembaban yang diperlukan oleh tanaman sambil membuang kelebihan air. Porositas memungkinkan air meresap ke dalam media tanam dan rongga-rongga di dalamnya.
                3. Menyediakan unsur hara: Media tanam harus menyediakan unsur hara makro dan mikro yang cukup untuk pertumbuhan tanaman. Unsur hara dapat diberikan melalui pupuk atau aktivitas mikroorganisme dalam media tanam.
                4. Bebas dari bibit penyakit: Media tanam harus bersih dari hama dan penyakit yang dapat menyerang tanaman dan menyebabkan kerusakan. Media tanam tidak harus steril, tetapi harus higienis dari bibit penyakit.
                Dalam bercocok tanam, pemilihan media tanam yang tepat sangat penting untuk memastikan pertumbuhan dan hasil tanaman yang baik. Dengan memperhatikan faktor-faktor di atas, petani dapat memilih media tanam yang sesuai dengan kebutuhan tanaman dan mencapai keberhasilan dalam pertanian modern.',
                'penulis' => 'Hendri Yulianto',
                'tahun' => '2021',
            ],
            [
                'judul' => 'Menjadi Petani Milenial dengan Teknologi Budidaya Tanaman',
                'gambar' => 'img/artikel/artikel5.jpeg',
                'deskripsi' => 'Hari Tani Nasional diperingati setiap tanggal 24 September setiap tahun. Hari tersebut ditetapkan oleh Presiden Soekarno melalui Keputusan Presiden Republik Indonesia No. 169 Tahun 1963. Penetapan Hari Tani Nasional didasari oleh pengesahan UU No. 5 Tahun 1960 tentang Peraturan Dasar Pokok-pokok Agraria yang juga disahkan pada tanggal yang sama. Di masa kini, Sobat SMP juga dapat ikut memeriahkan Hari Tani Nasional dengan mencoba bertani mandiri di lingkungan rumah masing-masing melalui urban farming. 
                Urban farming adalah istilah yang digunakan untuk budidaya tanaman di lingkungan perkotaan dengan menggunakan lahan terbatas. Berikut ini adalah beberapa teknologi budidaya tanaman yang dapat dilakukan:
                1. Hidroponik: Hidroponik adalah metode penanaman tanaman tanpa menggunakan tanah. Tanaman ditanam dalam wadah yang berisi larutan nutrisi dan mineral dalam air, atau dengan menggunakan medium seperti kerikil, arang, sekam, spons, serbuk kayu, dan sebagainya. Hidroponik dapat dilakukan di lahan sempit dan memiliki kelebihan seperti panen yang lebih melimpah dan penggunaan air yang lebih efisien, meskipun biayanya cukup mahal. 
                2. Vertikultur: Vertikultur adalah teknik budidaya tanaman dengan memanfaatkan ruang secara vertikal. Tanaman ditanam dalam instalasi bertingkat, seperti botol bekas atau pipa yang disusun secara vertikal dan diikat pada tembok. Teknik ini cocok untuk daerah perkotaan dan lahan terbatas karena dapat menghemat ruang.
                3. Aeroponik: Aeroponik adalah metode penanaman tanaman di udara tanpa menggunakan tanah. Nutrisi disemprotkan pada akar tanaman dalam bentuk kabut, sehingga akar dapat menyerap nutrisi tersebut. Sistem aeroponik cocok untuk lahan sempit di pekarangan rumah karena tidak membutuhkan tanah, melainkan menggunakan media tanam seperti gabus yang menggantung di udara.
                Dengan teknologi budidaya tanaman ini, Sobat SMP dapat mengembangkan urban farming meskipun memiliki lahan terbatas. Jika memiliki lahan yang lebih luas, Sobat SMP bahkan dapat menjadi petani modern di lahan kota. Sebagai petani, Sobat SMP dapat berperan dalam menyediakan makanan sehari-hari dan menjaga keberlanjutan lingkungan.',
                'penulis' => 'admin SMP',
                'tahun' => '2021',
            ],
            [
                'judul' => ' 5 Teknologi Pertanian yang Diterapkan di Indonesia',
                'gambar' => 'img/artikel/artikel4.jpg',
                'deskripsi' => 'Seiring dengan perkembangan zaman, teknologi pertanian juga kian canggih, hal ini tentu memiliki dampak yang postif bagi para petani. Dengan bantuan teknologi pertanian, efektifitas penanaman, perawatan, hingga panen bisa lebih meningkat. Selain itu, biaya operasional yang harus dikeluarkan oleh petani semakin menurun dengan hasil produksi yang meningkat.
                Dalam artikel ini, kita akan melihat beberapa teknologi pertanian modern yang digunakan di Indonesia untuk meningkatkan efektivitas dan hasil produksi pertanian.
                1. Transplanter: Teknologi ini digunakan untuk menanam padi dengan jarak yang tepat antara tanaman. Transplanter menerapkan sistem jajar legowo dari Jawa Timur dan dapat meningkatkan produksi padi hingga 30%. Mesin ini dilengkapi dengan pengapung agar tidak tenggelam di lumpur sawah dan dirancang dengan bobot yang ringan agar tidak menyulitkan petani.
                2. Indo Combine Harvester: Teknologi ini memudahkan petani dalam proses panen padi dengan pemotongan, pengangkutan, perontokan, pembersihan, sortasi, dan pengantongan dalam satu mesin. Dengan menggunakan indo combine harvester, petani dapat mengurangi jumlah tenaga kerja yang dibutuhkan dan meningkatkan efisiensi panen.
                3. Mesin Pemilah Bibit Unggul: Teknologi ini memungkinkan petani untuk memilih bibit unggul yang akan menghasilkan tanaman berkualitas tinggi. Mesin ini banyak digunakan oleh perusahaan penyedia bibit untuk pemilihan bibit jagung hibrida dan jenis bibit lainnya.
                4. Alat Pengering Kedelai: Alat ini mempercepat proses pengeringan kedelai yang sebelumnya memakan waktu delapan hari menjadi hanya satu hari. Selain itu, alat pengering ini juga meningkatkan daya tumbuh benih kedelai.
                5. Instalasi Pengolah Limbah: Teknologi ini digunakan untuk mengolah limbah ternak menjadi pupuk organik dan biogas. Dengan memanfaatkan instalasi pengolah limbah, limbah ternak dapat dimanfaatkan secara positif dan mengurangi dampak negatif terhadap lingkungan.
                Dengan adopsi teknologi pertanian modern ini, petani dapat meningkatkan efisiensi dan produktivitas mereka, mengurangi biaya operasional, dan menghasilkan tanaman berkualitas tinggi.',
                'penulis' => 'admin Widang Desa',
                'tahun' => '2021',
            ],
           
        ]);
    }
}