<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'provinsi' => 'Aceh',
                'p_bsni' => 'ID-AC',
            ),
            1 => 
            array (
                'id' => 2,
                'provinsi' => 'Sumatra Utara',
                'p_bsni' => 'ID-SU',
            ),
            2 => 
            array (
                'id' => 3,
                'provinsi' => 'Sumatra Barat',
                'p_bsni' => 'ID-SB',
            ),
            3 => 
            array (
                'id' => 4,
                'provinsi' => 'Riau',
                'p_bsni' => 'ID-RI',
            ),
            4 => 
            array (
                'id' => 5,
                'provinsi' => 'Jambi',
                'p_bsni' => 'ID-JA',
            ),
            5 => 
            array (
                'id' => 6,
                'provinsi' => 'Sumatra Selatan',
                'p_bsni' => 'ID-SS',
            ),
            6 => 
            array (
                'id' => 7,
                'provinsi' => 'Bengkulu',
                'p_bsni' => 'ID-BE',
            ),
            7 => 
            array (
                'id' => 8,
                'provinsi' => 'Lampung',
                'p_bsni' => 'ID-LA',
            ),
            8 => 
            array (
                'id' => 9,
                'provinsi' => 'Kepulauan Bangka Belitung',
                'p_bsni' => 'ID-BB',
            ),
            9 => 
            array (
                'id' => 10,
                'provinsi' => 'Kepulauan Riau',
                'p_bsni' => 'ID-KR',
            ),
            10 => 
            array (
                'id' => 11,
                'provinsi' => 'Daerah Khusus Ibukota Jakarta',
                'p_bsni' => 'ID-JB',
            ),
            11 => 
            array (
                'id' => 12,
                'provinsi' => 'Jawa Barat',
                'p_bsni' => 'ID-JB',
            ),
            12 => 
            array (
                'id' => 13,
                'provinsi' => 'Jawa Tengah',
                'p_bsni' => 'ID-JT',
            ),
            13 => 
            array (
                'id' => 14,
                'provinsi' => 'Daerah Istimewa Yogyakarta',
                'p_bsni' => 'ID-YO',
            ),
            14 => 
            array (
                'id' => 15,
                'provinsi' => 'Jawa Timur',
                'p_bsni' => 'ID-JI',
            ),
            15 => 
            array (
                'id' => 16,
                'provinsi' => 'Banten',
                'p_bsni' => 'ID-BT',
            ),
            16 => 
            array (
                'id' => 17,
                'provinsi' => 'Bali',
                'p_bsni' => 'ID-BA',
            ),
            17 => 
            array (
                'id' => 18,
                'provinsi' => 'Nusa Tenggara Barat',
                'p_bsni' => 'ID-NB',
            ),
            18 => 
            array (
                'id' => 19,
                'provinsi' => 'Nusa Tenggara Timur',
                'p_bsni' => 'ID-NT',
            ),
            19 => 
            array (
                'id' => 20,
                'provinsi' => 'Kalimantan Barat',
                'p_bsni' => 'ID-KB',
            ),
            20 => 
            array (
                'id' => 21,
                'provinsi' => 'Kalimantan Tengah',
                'p_bsni' => 'ID-KT',
            ),
            21 => 
            array (
                'id' => 22,
                'provinsi' => 'Kalimantan Selatan',
                'p_bsni' => 'ID-KS',
            ),
            22 => 
            array (
                'id' => 23,
                'provinsi' => 'Kalimantan Timur',
                'p_bsni' => 'ID-KI',
            ),
            23 => 
            array (
                'id' => 24,
                'provinsi' => 'Kalimantan Utara',
                'p_bsni' => 'ID-KU',
            ),
            24 => 
            array (
                'id' => 25,
                'provinsi' => 'Sulawesi Utara',
                'p_bsni' => 'ID-SA',
            ),
            25 => 
            array (
                'id' => 26,
                'provinsi' => 'Sulawesi Tengah',
                'p_bsni' => 'ID-ST',
            ),
            26 => 
            array (
                'id' => 27,
                'provinsi' => 'Sulawesi Selatan',
                'p_bsni' => 'ID-SN',
            ),
            27 => 
            array (
                'id' => 28,
                'provinsi' => 'Sulawesi Tenggara',
                'p_bsni' => 'ID-SG',
            ),
            28 => 
            array (
                'id' => 29,
                'provinsi' => 'Gorontalo',
                'p_bsni' => 'ID-GO',
            ),
            29 => 
            array (
                'id' => 30,
                'provinsi' => 'Sulawesi Barat',
                'p_bsni' => 'ID-SR',
            ),
            30 => 
            array (
                'id' => 31,
                'provinsi' => 'Maluku',
                'p_bsni' => 'ID-MA',
            ),
            31 => 
            array (
                'id' => 32,
                'provinsi' => 'Maluku Utara',
                'p_bsni' => 'ID-MU',
            ),
            32 => 
            array (
                'id' => 33,
                'provinsi' => 'Papua',
                'p_bsni' => 'ID-PA',
            ),
            33 => 
            array (
                'id' => 34,
                'provinsi' => 'Papua Barat',
                'p_bsni' => 'ID-PB',
            ),
        ));
        
        
    }
}