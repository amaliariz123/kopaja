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
            ),
            1 => 
            array (
                'id' => 2,
                'provinsi' => 'Sumatra Utara',
            ),
            2 => 
            array (
                'id' => 3,
                'provinsi' => 'Sumatra Barat',
            ),
            3 => 
            array (
                'id' => 4,
                'provinsi' => 'Riau',
            ),
            4 => 
            array (
                'id' => 5,
                'provinsi' => 'Jambi',
            ),
            5 => 
            array (
                'id' => 6,
                'provinsi' => 'Sumatra Selatan',
            ),
            6 => 
            array (
                'id' => 7,
                'provinsi' => 'Bengkulu',
            ),
            7 => 
            array (
                'id' => 8,
                'provinsi' => 'Lampung',
            ),
            8 => 
            array (
                'id' => 9,
                'provinsi' => 'Kepulauan Bangka Belitung',
            ),
            9 => 
            array (
                'id' => 10,
                'provinsi' => 'Kepulauan Riau',
            ),
            10 => 
            array (
                'id' => 11,
                'provinsi' => 'Daerah Khusus Ibukota Jakarta',
            ),
            11 => 
            array (
                'id' => 12,
                'provinsi' => 'Jawa Barat',
            ),
            12 => 
            array (
                'id' => 13,
                'provinsi' => 'Jawa Tengah',
            ),
            13 => 
            array (
                'id' => 14,
                'provinsi' => 'Daerah Istimewa Yogyakarta',
            ),
            14 => 
            array (
                'id' => 15,
                'provinsi' => 'Jawa Timur',
            ),
            15 => 
            array (
                'id' => 16,
                'provinsi' => 'Banten',
            ),
            16 => 
            array (
                'id' => 17,
                'provinsi' => 'Bali',
            ),
            17 => 
            array (
                'id' => 18,
                'provinsi' => 'Nusa Tenggara Barat',
            ),
            18 => 
            array (
                'id' => 19,
                'provinsi' => 'Nusa Tenggara Timur',
            ),
            19 => 
            array (
                'id' => 20,
                'provinsi' => 'Kalimantan Barat',
            ),
            20 => 
            array (
                'id' => 21,
                'provinsi' => 'Kalimantan Tengah',
            ),
            21 => 
            array (
                'id' => 22,
                'provinsi' => 'Kalimantan Selatan',
            ),
            22 => 
            array (
                'id' => 23,
                'provinsi' => 'Kalimantan Timur',
            ),
            23 => 
            array (
                'id' => 24,
                'provinsi' => 'Kalimantan Utara',
            ),
            24 => 
            array (
                'id' => 25,
                'provinsi' => 'Sulawesi Utara',
            ),
            25 => 
            array (
                'id' => 26,
                'provinsi' => 'Sulawesi Tengah',
            ),
            26 => 
            array (
                'id' => 27,
                'provinsi' => 'Sulawesi Selatan',
            ),
            27 => 
            array (
                'id' => 28,
                'provinsi' => 'Sulawesi Tenggara',
            ),
            28 => 
            array (
                'id' => 29,
                'provinsi' => 'Gorontalo',
            ),
            29 => 
            array (
                'id' => 30,
                'provinsi' => 'Sulawesi Barat',
            ),
            30 => 
            array (
                'id' => 31,
                'provinsi' => 'Maluku',
            ),
            31 => 
            array (
                'id' => 32,
                'provinsi' => 'Maluku Utara',
            ),
            32 => 
            array (
                'id' => 33,
                'provinsi' => 'Papua',
            ),
            33 => 
            array (
                'id' => 34,
                'provinsi' => 'Papua Barat',
            ),
        ));
        
        
    }
}