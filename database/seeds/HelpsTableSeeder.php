<?php

use Illuminate\Database\Seeder;

class HelpsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('helps')->delete();
        
        \DB::table('helps')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => 'Apa itu Kopaja?',
                'answer' => 'KOPAJA singkatan dari Kompas Pajak Ajaib, yang dibuat oleh tim yang terdiri dari kolaborasi mahasiswa Teknologi Instrumentasi dan Akuntansi terinspirasi untuk membuat alat peraga yang dapat memudahkan dalam belajar berbagai tarif dan jenis pajak.

Bisnis model dari KOPAJA adalah dengan memberikan akses pengajaran untuk mata pelajaran yang berkaitan dengan perpajakan dari tingkat SMA/SMK hingga Perguruan Tinggi yang disajikan secara online melalui website KOPAJA.ac.id maupun offline berupa alat peraga yang dapat di order melalui kontak person yang sudah tersedia.',
                'created_at' => '2020-03-13 19:15:44',
                'updated_at' => '2020-03-13 19:15:44',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => 'Apa itu kopaja.id?',
                'answer' => 'Kopaja.id adalah sebuah website belajar perpajakan online yang kami sediakan bagi siswa-siswi SMA/SMK dan Perguruan Tinggi di seluruh Indonesia untuk belajar memahami materi perpajakan, latihan soal, serta mengevaluasi pembahasan soal untuk masing-masing pasal sesuai dengan klasifikasi dan jenis pajak. Website KOPAJA.ac..id juga dilengkapi dengan ujian mandiri tentang perpajakan.',
                'created_at' => '2020-03-13 19:16:48',
                'updated_at' => '2020-03-13 19:16:48',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => 'Siapa saja yang dapat mengakses KOPAJA?',
                'answer' => 'Siapapun dapat mengakses website KOPAJA terlepat dari usia dan tingkat pendidikannya, baik untuk tingkat SMA/SMK, Perguruan Tinggi hingga Umum.Siapapun dapat mengakses website KOPAJA terlepat dari usia dan tingkat pendidikannya, baik untuk tingkat SMA/SMK, Perguruan Tinggi hingga Umum.',
                'created_at' => '2020-03-13 19:17:16',
                'updated_at' => '2020-03-13 19:17:16',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => 'Bagaimana cara mengakses website KOPAJA?',
                'answer' => 'Cara untuk mengakses website KOPAJA yaitu :
1. Kamu bisa melakukan pendaftaran dengan klik “Daftar” pada bagian kanan atas halaman utama KOPAJA
2. Lalu mengisi formulir pendaftaran',
                'created_at' => '2020-03-13 19:18:00',
                'updated_at' => '2020-03-13 19:18:00',
            ),
            4 => 
            array (
                'id' => 5,
                'question' => 'Konten apa saja yang tersedia pada website KOPAJA?',
                'answer' => 'Materi Perpajakan
Materi perpajakan yang terdiri dari pajak pusat dan daerah dilengkapi dengan definisi dan praktik perhitungan. Selain itu, kamu juga bisa menemukan berbagai jenis dan tarif pajak yang berkaitan dengan pajak pusat dan daerah.

Latihan Soal dan Pembahasan
Tempat bagi kamu untuk mengukur pemahaman tentang perpajakan dengan cara mengerjakan latihan soal. Selesai mengerjakan, kamu bisa langsung mendapatkan pembahasan dan analisis topik.

Download Materi Perpajakan
Bisa download materi perpajakan yang dapat memberikan pemahaman mengenai berbagai jenis dan tarif pajak

Download Soal dan Pembahasan
Dapatkan soal perpajakan mengenai berbagai jenis dan tarif pajak yang dilengkapi dengan pembahasan lengkap.',
                'created_at' => '2020-03-13 19:19:12',
                'updated_at' => '2020-03-13 19:19:12',
            ),
        ));
        
        
    }
}