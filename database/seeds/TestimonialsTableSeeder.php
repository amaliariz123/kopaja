<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => 'Saya itu suka mata pelajaran pajak, tetapi kalau hanya lihat buku saya sudah pusing duluan. Tapi berkat adanya KOPAJA ini membantu banget dalam proses pembelajaran perpajakan, apalagi dilengkapi dengan praktik perhitungan juga. Terima kasih KOPAJA, beruntung banget dapet informasi dan akses website ini',
                'id_member' => 3,
                'created_at' => '2020-06-01 07:41:20',
                'updated_at' => '2020-06-01 07:45:29',
            ),
            1 => 
            array (
                'id' => 2,
                'content' => 'Senang sekali bisa belajar perpajakan melalui KOPAJA ini. Fitur yang ada di KOPAJA ini membuat saya semangat belajar perpajakan. Selain ada materi dan latihan soal, ada praktik perhitungannya dan pengenaan tarifnya. Hal ini membantu sekali dalam proses pembelajaran bagi kaum milenial yang sukanya instan',
                'id_member' => 2,
                'created_at' => '2020-06-01 07:45:20',
                'updated_at' => '2020-06-01 07:47:29',
            ),
        ));
        
        
    }
}