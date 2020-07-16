<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Barat',
                'ibu_kota' => 'Meulaboh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Barat Daya',
                'ibu_kota' => 'Blangpidie',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Besar',
                'ibu_kota' => 'Jantho',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Jaya',
                'ibu_kota' => 'Calang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Selatan',
                'ibu_kota' => 'Tapak Tuan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Singkil',
                'ibu_kota' => 'Singkil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Tamiang',
                'ibu_kota' => 'Karang Baru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Tengah',
                'ibu_kota' => 'Takengon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Tenggara',
                'ibu_kota' => 'Kutacane',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Timur',
                'ibu_kota' => 'Langsa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Aceh Utara',
                'ibu_kota' => 'Lhoksukon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Bener Meriah',
                'ibu_kota' => 'Simpang Tiga Redelong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Bireuen',
                'ibu_kota' => 'Bireuen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Gayo Lues',
                'ibu_kota' => 'Blangkejeren',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Nagan Raya',
                'ibu_kota' => 'Suka Makmue',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Pidie',
                'ibu_kota' => 'Sigli',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Pidie Jaya',
                'ibu_kota' => 'Meureundu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kabupaten Simeulue',
                'ibu_kota' => 'Sinabang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kota Banda Aceh',
                'ibu_kota' => 'Banda Aceh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kota Langsa',
                'ibu_kota' => 'Langsa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kota Lhokseumawe',
                'ibu_kota' => 'Lhokseumawe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kota Sabang',
                'ibu_kota' => 'Sabang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'provinsi_id' => 1,
                'kabupaten_kota' => 'Kota Subulussalam',
                'ibu_kota' => 'Subulussalam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Asahan',
                'ibu_kota' => 'Kisaran',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Batu Bara',
                'ibu_kota' => 'Lima Puluh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Dairi',
                'ibu_kota' => 'Sidikalang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Deli Serdang',
                'ibu_kota' => 'Lubuk Pakam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Humbang Hasundutan',
                'ibu_kota' => 'Dolok Sanggul',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Karo',
                'ibu_kota' => 'Kabanjahe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Labuhanbatu',
                'ibu_kota' => 'Rantau Prapat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Labuhanbatu Selatan',
                'ibu_kota' => 'Kota Pinang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Labuhanbatu Utara',
                'ibu_kota' => 'Aek Kanopan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Langkat',
                'ibu_kota' => 'Stabat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Mandailing Natal',
                'ibu_kota' => 'Panyabungan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Nias',
                'ibu_kota' => 'Gunungsitoli',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Nias Barat',
                'ibu_kota' => 'Lahomi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Nias Selatan',
                'ibu_kota' => 'Teluk Dalam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Nias Utara',
                'ibu_kota' => 'Lotu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Padang Lawas',
                'ibu_kota' => 'Sibuhuan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Padang Lawas Utara',
                'ibu_kota' => 'Gunung Tua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Pakpak Bharat',
                'ibu_kota' => 'Salak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Samosir',
                'ibu_kota' => 'Pangururan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Serdang Bedagai',
                'ibu_kota' => 'Sei Rampah',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Simalungun',
                'ibu_kota' => 'Pematang Siantar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Tapanuli Selatan',
                'ibu_kota' => 'Padang Sidempuan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Tapanuli Tengah',
                'ibu_kota' => 'Sibolga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Tapanuli Utara',
                'ibu_kota' => 'Tarutung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kabupaten Toba Samosir',
                'ibu_kota' => 'Balige',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kota Binjai',
                'ibu_kota' => 'Binjai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kota Gunungsitoli',
                'ibu_kota' => 'Gunungsitoli',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kota Medan',
                'ibu_kota' => 'Medan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kota Padang Sidempuan',
                'ibu_kota' => 'Padang Sidempuan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kota Pematangsiantar',
                'ibu_kota' => 'Pematangsiantar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kota Sibolga',
                'ibu_kota' => 'Sibolga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kota Tanjung Balai',
                'ibu_kota' => 'Tanjung Balai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'provinsi_id' => 2,
                'kabupaten_kota' => 'Kota Tebing Tinggi',
                'ibu_kota' => 'Tebing Tinggi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Agam',
                'ibu_kota' => 'Lubuk Basung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Dharmasraya',
                'ibu_kota' => 'Pulau Punjung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Kepulauan Mentawai',
                'ibu_kota' => 'Tuapejat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Lima Puluh Kota',
                'ibu_kota' => 'Sarilamak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Padang Pariaman',
                'ibu_kota' => 'Nagari Parit Malintang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Pasaman',
                'ibu_kota' => 'Lubuk Sikaping',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Pasaman Barat',
                'ibu_kota' => 'Simpang Empat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Pesisir Selatan',
                'ibu_kota' => 'Painan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'provinsi_id' => 3,
            'kabupaten_kota' => 'Kabupaten Sijunjung (Sawah Lunto Sijunjung)',
                'ibu_kota' => 'Muaro Sijunjung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Solok',
                'ibu_kota' => 'Arosuka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Solok Selatan',
                'ibu_kota' => 'Padang Aro',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kabupaten Tanah Datar',
                'ibu_kota' => 'Batusangkar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kota Bukittinggi',
                'ibu_kota' => 'Bukittinggi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kota Padang',
                'ibu_kota' => 'Padang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kota Padang Panjang',
                'ibu_kota' => 'Padang Panjang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kota Pariaman',
                'ibu_kota' => 'Pariaman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kota Payakumbuh',
                'ibu_kota' => 'Payakumbuh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kota Sawahlunto',
                'ibu_kota' => 'Sawahlunto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'provinsi_id' => 3,
                'kabupaten_kota' => 'Kota Solok',
                'ibu_kota' => 'Solok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kabupaten Bengkalis',
                'ibu_kota' => 'Bengkalis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kabupaten Indragiri Hilir',
                'ibu_kota' => 'Tembilahan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kabupaten Indragiri Hulu',
                'ibu_kota' => 'Rengat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kabupaten Kampar',
                'ibu_kota' => 'Bangkinang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kabupaten Kepulauan Meranti',
                'ibu_kota' => 'Tebing Tinggi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kabupaten Kuantan Singingi',
                'ibu_kota' => 'Teluk Kuantan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kabupaten Pelalawan',
                'ibu_kota' => 'Pangkalan Kerinci',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kabupaten Rokan Hilir',
                'ibu_kota' => 'Ujung Tanjung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kabupaten Rokan Hulu',
                'ibu_kota' => 'Pasir Pengarairan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kabupaten Siak',
                'ibu_kota' => 'Siak Sriindrapura',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kota Dumai',
                'ibu_kota' => 'Dumai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'provinsi_id' => 4,
                'kabupaten_kota' => 'Kota Pekanbaru',
                'ibu_kota' => 'Pekanbaru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kabupaten Batanghari',
                'ibu_kota' => 'Muara Bulian',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kabupaten Bungo',
                'ibu_kota' => 'Muara Bungo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kabupaten Kerinci',
                'ibu_kota' => 'Sungai Penuh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kabupaten Merangin',
                'ibu_kota' => 'Bangko',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kabupaten Muaro Jambi',
                'ibu_kota' => 'Sengeti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kabupaten Sarolangun',
                'ibu_kota' => 'Sarolangun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kabupaten Tanjung Jabung Barat',
                'ibu_kota' => 'Kuala Tungkal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kabupaten Tanjung Jabung Timur',
                'ibu_kota' => 'Muara Sabak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kabupaten Tebo',
                'ibu_kota' => 'Muara Tebo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kota Jambi',
                'ibu_kota' => 'Jambi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'provinsi_id' => 5,
                'kabupaten_kota' => 'Kota Sungai Penuh',
                'ibu_kota' => 'Sungai Penuh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Banyuasin',
                'ibu_kota' => 'Pangkalan Balai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Empat Lawang',
                'ibu_kota' => 'Tebing Tinggi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Lahat',
                'ibu_kota' => 'Lahat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Muara Enim',
                'ibu_kota' => 'Muara Enim',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Musi Banyuasin',
                'ibu_kota' => 'Sekayu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Musi Rawas',
                'ibu_kota' => 'Muarabeliti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Musi Rawas Utara',
                'ibu_kota' => 'Rupit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Ogan Ilir',
                'ibu_kota' => 'Indralaya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Ogan Komering Ilir',
                'ibu_kota' => 'Kayu Agung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Ogan Komering Ulu',
                'ibu_kota' => 'Baturaja',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'provinsi_id' => 6,
            'kabupaten_kota' => 'Kabupaten Ogan Komering Ulu Selatan (Oku Selatan)',
                'ibu_kota' => 'Muaradua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'provinsi_id' => 6,
            'kabupaten_kota' => 'Kabupaten Ogan Komering Ulu Timur (Oku Timur)',
                'ibu_kota' => 'Martapura',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kabupaten Penukal Abab Lematang Ilir',
                'ibu_kota' => 'Talang Ubi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kota Lubuk Linggau',
                'ibu_kota' => 'Lubuk Linggau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kota Pagar Alam',
                'ibu_kota' => 'Pagar Alam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kota Palembang',
                'ibu_kota' => 'Pelembang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'provinsi_id' => 6,
                'kabupaten_kota' => 'Kota Prabumulih',
                'ibu_kota' => 'Prabumulih',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'provinsi_id' => 7,
                'kabupaten_kota' => 'Kabupaten Bengkulu Selatan',
                'ibu_kota' => 'Manna',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'provinsi_id' => 7,
                'kabupaten_kota' => 'Kabupaten Bengkulu Tengah',
                'ibu_kota' => 'Karang Tinggi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'provinsi_id' => 7,
                'kabupaten_kota' => 'Kabupaten Bengkulu Utara',
                'ibu_kota' => 'Arga Makmur',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'provinsi_id' => 7,
                'kabupaten_kota' => 'Kabupaten Kaur',
                'ibu_kota' => 'Bintuhan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'provinsi_id' => 7,
                'kabupaten_kota' => 'Kabupaten Kepahiang',
                'ibu_kota' => 'Kepahiang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'provinsi_id' => 7,
                'kabupaten_kota' => 'Kabupaten Lebong',
                'ibu_kota' => 'Tubei',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'provinsi_id' => 7,
                'kabupaten_kota' => 'Kabupaten Muko Muko',
                'ibu_kota' => 'Mukomuko',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'provinsi_id' => 7,
                'kabupaten_kota' => 'Kabupaten Rejang Lebong',
                'ibu_kota' => 'Curup',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'provinsi_id' => 7,
                'kabupaten_kota' => 'Kabupaten Seluma',
                'ibu_kota' => 'Tais',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'provinsi_id' => 7,
                'kabupaten_kota' => 'Kota Bengkulu',
                'ibu_kota' => 'Bengkulu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Lampung Barat',
                'ibu_kota' => 'Liwa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Lampung Selatan',
                'ibu_kota' => 'Kalianda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Lampung Tengah',
                'ibu_kota' => 'Gunung Sugih',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Lampung Timur',
                'ibu_kota' => 'Sukadana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Lampung Utara',
                'ibu_kota' => 'Kotabumi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Mesuji',
                'ibu_kota' => 'Mesuji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Pesawaran',
                'ibu_kota' => 'Gedong Tataan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Pesisir Barat',
                'ibu_kota' => 'Krui',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Pringsewu',
                'ibu_kota' => 'Pringsewu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Tanggamus',
                'ibu_kota' => 'Kota Agung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Tulang Bawang',
                'ibu_kota' => 'Menggala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Tulang Bawang Barat',
                'ibu_kota' => 'Tulang Bawang Tengah',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kabupaten Way Kanan',
                'ibu_kota' => 'Blambangan Umpu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kota Bandar Lampung',
                'ibu_kota' => 'Bandar Lampung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'provinsi_id' => 8,
                'kabupaten_kota' => 'Kota Metro',
                'ibu_kota' => 'Metro',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'provinsi_id' => 9,
                'kabupaten_kota' => 'Kabupaten Bangka',
                'ibu_kota' => 'Sungai Liat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'provinsi_id' => 9,
                'kabupaten_kota' => 'Kabupaten Bangka Barat',
                'ibu_kota' => 'Mentok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'provinsi_id' => 9,
                'kabupaten_kota' => 'Kabupaten Bangka Selatan',
                'ibu_kota' => 'Toboali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'provinsi_id' => 9,
                'kabupaten_kota' => 'Kabupaten Bangka Tengah',
                'ibu_kota' => 'Koba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'provinsi_id' => 9,
                'kabupaten_kota' => 'Kabupaten Belitung',
                'ibu_kota' => 'Tanjung Pandan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'provinsi_id' => 9,
                'kabupaten_kota' => 'Kabupaten Belitung Timur',
                'ibu_kota' => 'Manggar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'provinsi_id' => 9,
                'kabupaten_kota' => 'Kota Pangkal Pinang',
                'ibu_kota' => 'Pangkal Pinang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'provinsi_id' => 10,
                'kabupaten_kota' => 'Kabupaten Bintan',
                'ibu_kota' => 'Bandar Seri Bentan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'provinsi_id' => 10,
                'kabupaten_kota' => 'Kabupaten Karimun',
                'ibu_kota' => 'Tanjung Balai Karimun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'provinsi_id' => 10,
                'kabupaten_kota' => 'Kabupaten Kepulauan Anambas',
                'ibu_kota' => 'Tarempa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'provinsi_id' => 10,
                'kabupaten_kota' => 'Kabupaten Lingga',
                'ibu_kota' => 'Daik Lingga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'provinsi_id' => 10,
                'kabupaten_kota' => 'Kabupaten Natuna',
                'ibu_kota' => 'Ranai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'provinsi_id' => 10,
                'kabupaten_kota' => 'Kota Batam',
                'ibu_kota' => 'Batam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'provinsi_id' => 10,
                'kabupaten_kota' => 'Kota Tanjung Pinang',
                'ibu_kota' => 'Tanjung Pinang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'provinsi_id' => 11,
                'kabupaten_kota' => 'Kabupaten Adm. Kepulauan Seribu',
                'ibu_kota' => 'Kepulauan Seribu Utara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'provinsi_id' => 11,
                'kabupaten_kota' => 'Kota Adm. Jakarta Barat',
                'ibu_kota' => 'Grogol Petamburan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'provinsi_id' => 11,
                'kabupaten_kota' => 'Kota Adm. Jakarta Pusat',
                'ibu_kota' => 'Tanah Abang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'provinsi_id' => 11,
                'kabupaten_kota' => 'Kota Adm. Jakarta Selatan',
                'ibu_kota' => 'Kebayoran Baru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'provinsi_id' => 11,
                'kabupaten_kota' => 'Kota Adm. Jakarta Timur',
                'ibu_kota' => 'Cakung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'provinsi_id' => 11,
                'kabupaten_kota' => 'Kota Adm. Jakarta Utara',
                'ibu_kota' => 'Tanjung Priok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Bandung',
                'ibu_kota' => 'Soreang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Bandung Barat',
                'ibu_kota' => 'Ngamprah',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Bekasi',
                'ibu_kota' => 'Cikarang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Bogor',
                'ibu_kota' => 'Cibinong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Ciamis',
                'ibu_kota' => 'Ciamis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Cianjur',
                'ibu_kota' => 'Cianjur',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Cirebon',
                'ibu_kota' => 'Sumber',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Garut',
                'ibu_kota' => 'Garut',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Indramayu',
                'ibu_kota' => 'Indramayu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Karawang',
                'ibu_kota' => 'Karawang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Kuningan',
                'ibu_kota' => 'Kuningan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Majalengka',
                'ibu_kota' => 'Majalengka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Pangandaran',
                'ibu_kota' => 'Parigi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Purwakarta',
                'ibu_kota' => 'Purwakarta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Subang',
                'ibu_kota' => 'Subang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Sukabumi',
                'ibu_kota' => 'Sukabumi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Sumedang',
                'ibu_kota' => 'Sumedang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kabupaten Tasikmalaya',
                'ibu_kota' => 'Singaparna',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kota Bandung',
                'ibu_kota' => 'Bandung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kota Banjar',
                'ibu_kota' => 'Banjar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kota Bekasi',
                'ibu_kota' => 'Bekasi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kota Bogor',
                'ibu_kota' => 'Bogor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kota Cimahi',
                'ibu_kota' => 'Cimahi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kota Cirebon',
                'ibu_kota' => 'Cirebon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kota Depok',
                'ibu_kota' => 'Depok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kota Sukabumi',
                'ibu_kota' => 'Sukabumi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'provinsi_id' => 12,
                'kabupaten_kota' => 'Kota Tasikmalaya',
                'ibu_kota' => 'Tasikmalaya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Banjarnegara',
                'ibu_kota' => 'Banjarnegara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Banyumas',
                'ibu_kota' => 'Purwokerto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Batang',
                'ibu_kota' => 'Batang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Blora',
                'ibu_kota' => 'Blora',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Boyolali',
                'ibu_kota' => 'Boyolali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Brebes',
                'ibu_kota' => 'Brebes',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Cilacap',
                'ibu_kota' => 'Cilacap',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Demak',
                'ibu_kota' => 'Demak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Grobogan',
                'ibu_kota' => 'Purwodadi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Jepara',
                'ibu_kota' => 'Jepara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Karanganyar',
                'ibu_kota' => 'Karanganyar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Kebumen',
                'ibu_kota' => 'Kebumen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Kendal',
                'ibu_kota' => 'Kendal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Klaten',
                'ibu_kota' => 'Klaten',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Kudus',
                'ibu_kota' => 'Kudus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Magelang',
                'ibu_kota' => 'Mungkid',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Pati',
                'ibu_kota' => 'Pati',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Pekalongan',
                'ibu_kota' => 'Kajen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Pemalang',
                'ibu_kota' => 'Pemalang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Purbalingga',
                'ibu_kota' => 'Purbalingga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Purworejo',
                'ibu_kota' => 'Purworejo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Rembang',
                'ibu_kota' => 'Rembang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Semarang',
                'ibu_kota' => 'Ungaran',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Sragen',
                'ibu_kota' => 'Sragen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Sukoharjo',
                'ibu_kota' => 'Sukoharjo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Tegal',
                'ibu_kota' => 'Slawi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Temanggung',
                'ibu_kota' => 'Temanggung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Wonogiri',
                'ibu_kota' => 'Wonogiri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kabupaten Wonosobo',
                'ibu_kota' => 'Wonosobo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kota Magelang',
                'ibu_kota' => 'Magelang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kota Pekalongan',
                'ibu_kota' => 'Pekalongan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kota Salatiga',
                'ibu_kota' => 'Salatiga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kota Semarang',
                'ibu_kota' => 'Semarang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'provinsi_id' => 13,
            'kabupaten_kota' => 'Kota Surakarta (Solo)',
                'ibu_kota' => 'Surakarta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'provinsi_id' => 13,
                'kabupaten_kota' => 'Kota Tegal',
                'ibu_kota' => 'Tegal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'provinsi_id' => 14,
                'kabupaten_kota' => 'Kabupaten Bantul',
                'ibu_kota' => 'Bantul',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'provinsi_id' => 14,
                'kabupaten_kota' => 'Kabupaten Gunung Kidul',
                'ibu_kota' => 'Wonosari',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'provinsi_id' => 14,
                'kabupaten_kota' => 'Kabupaten Kulon Progo',
                'ibu_kota' => 'Wates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'provinsi_id' => 14,
                'kabupaten_kota' => 'Kabupaten Sleman',
                'ibu_kota' => 'Sleman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'provinsi_id' => 14,
                'kabupaten_kota' => 'Kota Yogyakarta',
                'ibu_kota' => 'Yogyakarta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Bangkalan',
                'ibu_kota' => 'Bangkalan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Banyuwangi',
                'ibu_kota' => 'Banyuwangi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Blitar',
                'ibu_kota' => 'Kanigoro',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Bojonegoro',
                'ibu_kota' => 'Bojonegoro',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Bondowoso',
                'ibu_kota' => 'Bondowoso',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Gresik',
                'ibu_kota' => 'Gresik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Jember',
                'ibu_kota' => 'Jember',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Jombang',
                'ibu_kota' => 'Jombang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Kediri',
                'ibu_kota' => 'Kediri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Lamongan',
                'ibu_kota' => 'Lamongan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Lumajang',
                'ibu_kota' => 'Lumajang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Madiun',
                'ibu_kota' => 'Mejayan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Magetan',
                'ibu_kota' => 'Magetan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Malang',
                'ibu_kota' => 'Kepanjen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Mojokerto',
                'ibu_kota' => 'Mojokerto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Nganjuk',
                'ibu_kota' => 'Nganjuk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Ngawi',
                'ibu_kota' => 'Ngawi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Pacitan',
                'ibu_kota' => 'Pacitan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Pamekasan',
                'ibu_kota' => 'Pamekasan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Pasuruan',
                'ibu_kota' => 'Pasuruan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Ponorogo',
                'ibu_kota' => 'Ponorogo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Probolinggo',
                'ibu_kota' => 'Kraksaan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Sampang',
                'ibu_kota' => 'Sampang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Sidoarjo',
                'ibu_kota' => 'Sidoarjo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Situbondo',
                'ibu_kota' => 'Situbondo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Sumenep',
                'ibu_kota' => 'Sumenep',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Trenggalek',
                'ibu_kota' => 'Trenggalek',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Tuban',
                'ibu_kota' => 'Tuban',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kabupaten Tulungagung',
                'ibu_kota' => 'Tulungagung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kota Batu',
                'ibu_kota' => 'Batu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kota Blitar',
                'ibu_kota' => 'Blitar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kota Kediri',
                'ibu_kota' => 'Kediri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kota Madiun',
                'ibu_kota' => 'Madiun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kota Malang',
                'ibu_kota' => 'Malang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kota Mojokerto',
                'ibu_kota' => 'Mojokerto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kota Pasuruan',
                'ibu_kota' => 'Pasuruan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kota Probolinggo',
                'ibu_kota' => 'Probolinggo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'provinsi_id' => 15,
                'kabupaten_kota' => 'Kota Surabaya',
                'ibu_kota' => 'Surabaya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'provinsi_id' => 16,
                'kabupaten_kota' => 'Kabupaten Lebak',
                'ibu_kota' => 'Rangkas Bitung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'provinsi_id' => 16,
                'kabupaten_kota' => 'Kabupaten Pandeglang',
                'ibu_kota' => 'Pandeglang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'provinsi_id' => 16,
                'kabupaten_kota' => 'Kabupaten Serang',
                'ibu_kota' => 'Serang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'provinsi_id' => 16,
                'kabupaten_kota' => 'Kabupaten Tangerang',
                'ibu_kota' => 'Tigaraksa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'provinsi_id' => 16,
                'kabupaten_kota' => 'Kota Cilegon',
                'ibu_kota' => 'Cilegon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'provinsi_id' => 16,
                'kabupaten_kota' => 'Kota Serang',
                'ibu_kota' => 'Serang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'provinsi_id' => 16,
                'kabupaten_kota' => 'Kota Tangerang',
                'ibu_kota' => 'Tangerang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'provinsi_id' => 16,
                'kabupaten_kota' => 'Kota Tangerang Selatan',
                'ibu_kota' => 'Ciputat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'provinsi_id' => 17,
                'kabupaten_kota' => 'Kabupaten Badung',
                'ibu_kota' => 'Mengwi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'provinsi_id' => 17,
                'kabupaten_kota' => 'Kabupaten Bangli',
                'ibu_kota' => 'Bangli',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'provinsi_id' => 17,
                'kabupaten_kota' => 'Kabupaten Buleleng',
                'ibu_kota' => 'Singaraja',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'provinsi_id' => 17,
                'kabupaten_kota' => 'Kabupaten Gianyar',
                'ibu_kota' => 'Gianyar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'provinsi_id' => 17,
                'kabupaten_kota' => 'Kabupaten Jembrana',
                'ibu_kota' => 'Negara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'provinsi_id' => 17,
                'kabupaten_kota' => 'Kabupaten Karangasem',
                'ibu_kota' => 'Karangasem',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'provinsi_id' => 17,
                'kabupaten_kota' => 'Kabupaten Klungkung',
                'ibu_kota' => 'Semarapura',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'provinsi_id' => 17,
                'kabupaten_kota' => 'Kabupaten Tabanan',
                'ibu_kota' => 'Tabanan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'provinsi_id' => 17,
                'kabupaten_kota' => 'Kota Denpasar',
                'ibu_kota' => 'Denpasar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'provinsi_id' => 18,
                'kabupaten_kota' => 'Kabupaten Bima',
                'ibu_kota' => 'Woha',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'provinsi_id' => 18,
                'kabupaten_kota' => 'Kabupaten Dompu',
                'ibu_kota' => 'Dompu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'provinsi_id' => 18,
                'kabupaten_kota' => 'Kabupaten Lombok Barat',
                'ibu_kota' => 'Gerung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'provinsi_id' => 18,
                'kabupaten_kota' => 'Kabupaten Lombok Tengah',
                'ibu_kota' => 'Praya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'provinsi_id' => 18,
                'kabupaten_kota' => 'Kabupaten Lombok Timur',
                'ibu_kota' => 'Selong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'provinsi_id' => 18,
                'kabupaten_kota' => 'Kabupaten Lombok Utara',
                'ibu_kota' => 'Tanjung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'provinsi_id' => 18,
                'kabupaten_kota' => 'Kabupaten Sumbawa',
                'ibu_kota' => 'Sumbawa Besar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'provinsi_id' => 18,
                'kabupaten_kota' => 'Kabupaten Sumbawa Barat',
                'ibu_kota' => 'Taliwang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'provinsi_id' => 18,
                'kabupaten_kota' => 'Kota Bima',
                'ibu_kota' => 'Bima',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'provinsi_id' => 18,
                'kabupaten_kota' => 'Kota Mataram',
                'ibu_kota' => 'Mataram',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Alor',
                'ibu_kota' => 'Kalabahi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Belu',
                'ibu_kota' => 'Atambua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Ende',
                'ibu_kota' => 'Ende',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Flores Timur',
                'ibu_kota' => 'Larantuka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Kupang',
                'ibu_kota' => 'Kupang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Lembata',
                'ibu_kota' => 'Lewoleba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Malaka',
                'ibu_kota' => 'Betun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Manggarai',
                'ibu_kota' => 'Ruteng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Manggarai Barat',
                'ibu_kota' => 'Labuan Bajo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Manggarai Timur',
                'ibu_kota' => 'Borong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Nagekeo',
                'ibu_kota' => 'Mbay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Ngada',
                'ibu_kota' => 'Bajawa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Rote Ndao',
                'ibu_kota' => 'Baa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Sabu Raijua',
                'ibu_kota' => 'Sabu Barat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Sikka',
                'ibu_kota' => 'Maumere',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Sumba Barat',
                'ibu_kota' => 'Waikabubak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Sumba Barat Daya',
                'ibu_kota' => 'Tambolaka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Sumba Tengah',
                'ibu_kota' => 'Waibakul',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Sumba Timur',
                'ibu_kota' => 'Waingapu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Timor Tengah Selatan',
                'ibu_kota' => 'Soe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kabupaten Timor Tengah Utara',
                'ibu_kota' => 'Kefamenanu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'provinsi_id' => 19,
                'kabupaten_kota' => 'Kota Kupang',
                'ibu_kota' => 'Kupang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Bengkayang',
                'ibu_kota' => 'Bengkayang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Kapuas Hulu',
                'ibu_kota' => 'Putussibau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Kayong Utara',
                'ibu_kota' => 'Sukadane',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Ketapang',
                'ibu_kota' => 'Ketapang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Kubu Raya',
                'ibu_kota' => 'Sungai Raya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Landak',
                'ibu_kota' => 'Ngabang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Melawi',
                'ibu_kota' => 'Nanga Pinoh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Mempawah',
                'ibu_kota' => 'Mempawah',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Sambas',
                'ibu_kota' => 'Sambas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Sanggau',
                'ibu_kota' => 'Sanggau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Sekadau',
                'ibu_kota' => 'Sekadau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kabupaten Sintang',
                'ibu_kota' => 'Sintang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kota Pontianak',
                'ibu_kota' => 'Pontianak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'provinsi_id' => 20,
                'kabupaten_kota' => 'Kota Singkawang',
                'ibu_kota' => 'Singkawang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Barito Selatan',
                'ibu_kota' => 'Buntok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Barito Timur',
                'ibu_kota' => 'Tamiang Layang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Barito Utara',
                'ibu_kota' => 'Muara Teweh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Gunung Mas',
                'ibu_kota' => 'Kuala Kurun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Kapuas',
                'ibu_kota' => 'Kuala Kapuas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Katingan',
                'ibu_kota' => 'Kasongan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Kotawaringin Barat',
                'ibu_kota' => 'Pangkalan Bun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Kotawaringin Timur',
                'ibu_kota' => 'Sampit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Lamandau',
                'ibu_kota' => 'Nanga Bulik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Murung Raya',
                'ibu_kota' => 'Puruk Cahu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Pulang Pisau',
                'ibu_kota' => 'Pulang Pisau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Seruyan',
                'ibu_kota' => 'Kuala Pembuang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kabupaten Sukamara',
                'ibu_kota' => 'Sukamara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'provinsi_id' => 21,
                'kabupaten_kota' => 'Kota Palangka Raya',
                'ibu_kota' => 'Palangkaraya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Balangan',
                'ibu_kota' => 'Paringin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Banjar',
                'ibu_kota' => 'Martapura',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Barito Kuala',
                'ibu_kota' => 'Marabahan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Hulu Sungai Selatan',
                'ibu_kota' => 'Kandangan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Hulu Sungai Tengah',
                'ibu_kota' => 'Barabai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Hulu Sungai Utara',
                'ibu_kota' => 'Amuntai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Kotabaru',
                'ibu_kota' => 'Kotabaru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Tabalong',
                'ibu_kota' => 'Tanjung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Tanah Bumbu',
                'ibu_kota' => 'Batulicin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Tanah Laut',
                'ibu_kota' => 'Pelaihari',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kabupaten Tapin',
                'ibu_kota' => 'Rantau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kota Banjarbaru',
                'ibu_kota' => 'Banjarbaru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'provinsi_id' => 22,
                'kabupaten_kota' => 'Kota Banjarmasin',
                'ibu_kota' => 'Banjarmasin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kabupaten Berau',
                'ibu_kota' => 'Tanjung Redeb',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kabupaten Kutai Barat',
                'ibu_kota' => 'Sendawar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kabupaten Kutai Kartanegara',
                'ibu_kota' => 'Tenggarong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kabupaten Kutai Timur',
                'ibu_kota' => 'Sanggatta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kabupaten Mahakam Ulu',
                'ibu_kota' => 'Ujoh Bilang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kabupaten Paser',
                'ibu_kota' => 'Tanah Grogot',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kabupaten Penajam Paser Utara',
                'ibu_kota' => 'Penajam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kota Balikpapan',
                'ibu_kota' => 'Balikpapan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kota Bontang',
                'ibu_kota' => 'Bontang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kota Samarinda',
                'ibu_kota' => 'Samarinda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'provinsi_id' => 23,
            'kabupaten_kota' => 'Kabupaten Bulungan (Bulongan)',
                'ibu_kota' => 'Tanjung Selor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kabupaten Malinau',
                'ibu_kota' => 'Malinau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kabupaten Nunukan',
                'ibu_kota' => 'Nunukan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kabupaten Tana Tidung',
                'ibu_kota' => 'Tideng Pale',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'provinsi_id' => 23,
                'kabupaten_kota' => 'Kota Tarakan',
                'ibu_kota' => 'Tarakan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kabupaten Bolaang Mongondow',
                'ibu_kota' => 'Lolak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kabupaten Bolaang Mongondow Selatan',
                'ibu_kota' => 'Bolaang Uki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kabupaten Bolaang Mongondow Timur',
                'ibu_kota' => 'Tutuyan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kabupaten Bolaang Mongondow Utara',
                'ibu_kota' => 'Boroko',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kabupaten Kepulauan Sangihe',
                'ibu_kota' => 'Tahuna',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'provinsi_id' => 25,
            'kabupaten_kota' => 'Kabupaten Kepulauan Siau Tagulandang Biaro (Sitaro)',
                'ibu_kota' => 'Ondong Siau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kabupaten Kepulauan Talaud',
                'ibu_kota' => 'Melongguane',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kabupaten Minahasa',
                'ibu_kota' => 'Tondano',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kabupaten Minahasa Selatan',
                'ibu_kota' => 'Amurang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kabupaten Minahasa Tenggara',
                'ibu_kota' => 'Ratahan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kabupaten Minahasa Utara',
                'ibu_kota' => 'Air Madidi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kota Bitung',
                'ibu_kota' => 'Bitung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kota Kotamobagu',
                'ibu_kota' => 'Kotamobagu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kota Manado',
                'ibu_kota' => 'Manado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'provinsi_id' => 25,
                'kabupaten_kota' => 'Kota Tomohon',
                'ibu_kota' => 'Tomohon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Banggai',
                'ibu_kota' => 'Luwuk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Banggai Kepulauan',
                'ibu_kota' => 'Salakan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Banggai Laut',
                'ibu_kota' => 'Banggai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Buol',
                'ibu_kota' => 'Buol',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Donggala',
                'ibu_kota' => 'Donggala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Morowali',
                'ibu_kota' => 'Bungku',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Morowali Utara',
                'ibu_kota' => 'Kolonodale',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Parigi Moutong',
                'ibu_kota' => 'Parigi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Poso',
                'ibu_kota' => 'Poso',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Sigi',
                'ibu_kota' => 'Sigi Biromaru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Tojo Una-Una',
                'ibu_kota' => 'Ampana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kabupaten Toli-Toli',
                'ibu_kota' => 'Toli Toli',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'provinsi_id' => 26,
                'kabupaten_kota' => 'Kota Palu',
                'ibu_kota' => 'Palu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Bantaeng',
                'ibu_kota' => 'Bantaeng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Barru',
                'ibu_kota' => 'Barru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Bone',
                'ibu_kota' => 'Watampone',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Bulukumba',
                'ibu_kota' => 'Bulukumba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Enrekang',
                'ibu_kota' => 'Enrekang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Gowa',
                'ibu_kota' => 'Sungguminasa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Jeneponto',
                'ibu_kota' => 'Jeneponto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'provinsi_id' => 27,
            'kabupaten_kota' => 'Kabupaten Selayar (Kepulauan Selayar)',
                'ibu_kota' => 'Benteng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Luwu',
                'ibu_kota' => 'Palopo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Luwu Timur',
                'ibu_kota' => 'Malili',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Luwu Utara',
                'ibu_kota' => 'Masamba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Maros',
                'ibu_kota' => 'Maros',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Pangkajene Kepulauan',
                'ibu_kota' => 'Pangkajene',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Pinrang',
                'ibu_kota' => 'Pinrang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'provinsi_id' => 27,
            'kabupaten_kota' => 'Kabupaten Sidenreng Rappang (Sidrap)',
                'ibu_kota' => 'Sidenreng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Sinjai',
                'ibu_kota' => 'Sinjai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Soppeng',
                'ibu_kota' => 'Watan Soppeng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Takalar',
                'ibu_kota' => 'Takalar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Tana Toraja',
                'ibu_kota' => 'Makale',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Toraja Utara',
                'ibu_kota' => 'Rantepao',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kabupaten Wajo',
                'ibu_kota' => 'Sengkang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kota Makassar',
                'ibu_kota' => 'Makassar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kota Palopo',
                'ibu_kota' => 'Palopo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'provinsi_id' => 27,
                'kabupaten_kota' => 'Kota Parepare',
                'ibu_kota' => 'Pare Pare',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Bombana',
                'ibu_kota' => 'Rumbia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Buton',
                'ibu_kota' => 'Pasar Wajo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Buton Selatan',
                'ibu_kota' => 'Batauga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Buton Tengah',
                'ibu_kota' => 'Labungkari',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Buton Utara',
                'ibu_kota' => 'Buranga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Kolaka',
                'ibu_kota' => 'Kolaka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Kolaka Timur',
                'ibu_kota' => 'Tirawuta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Kolaka Utara',
                'ibu_kota' => 'Lasusua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Konawe',
                'ibu_kota' => 'Unaaha',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Konawe Kepulauan',
                'ibu_kota' => 'Langara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Konawe Selatan',
                'ibu_kota' => 'Andoolo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Konawe Utara',
                'ibu_kota' => 'Wanggudu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Muna',
                'ibu_kota' => 'Raha',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Muna Barat',
                'ibu_kota' => 'Sawerigadi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kabupaten Wakatobi',
                'ibu_kota' => 'Wangi Wangi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kota Baubau',
                'ibu_kota' => 'Bau-Bau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'provinsi_id' => 28,
                'kabupaten_kota' => 'Kota Kendari',
                'ibu_kota' => 'Kendari',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'provinsi_id' => 29,
                'kabupaten_kota' => 'Kabupaten Boalemo',
                'ibu_kota' => 'Tilamuta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'provinsi_id' => 29,
                'kabupaten_kota' => 'Kabupaten Bone Bolango',
                'ibu_kota' => 'Suwawa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'provinsi_id' => 29,
                'kabupaten_kota' => 'Kabupaten Gorontalo',
                'ibu_kota' => 'Limboto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'provinsi_id' => 29,
                'kabupaten_kota' => 'Kabupaten Gorontalo Utara',
                'ibu_kota' => 'Kwandang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'provinsi_id' => 29,
                'kabupaten_kota' => 'Kabupaten Pohuwato',
                'ibu_kota' => 'Marisa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'provinsi_id' => 29,
                'kabupaten_kota' => 'Kota Gorontalo',
                'ibu_kota' => 'Gorontalo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'provinsi_id' => 30,
                'kabupaten_kota' => 'Kabupaten Majene',
                'ibu_kota' => 'Majene',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'provinsi_id' => 30,
                'kabupaten_kota' => 'Kabupaten Mamasa',
                'ibu_kota' => 'Mamasa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'provinsi_id' => 30,
                'kabupaten_kota' => 'Kabupaten Mamuju',
                'ibu_kota' => 'Mamuju',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'provinsi_id' => 30,
                'kabupaten_kota' => 'Kabupaten Mamuju Tengah',
                'ibu_kota' => 'Tobadak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'provinsi_id' => 30,
                'kabupaten_kota' => 'Kabupaten Mamuju Utara',
                'ibu_kota' => 'Pasangkayu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'provinsi_id' => 30,
                'kabupaten_kota' => 'Kabupaten Polewali Mandar',
                'ibu_kota' => 'Polewali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kabupaten Buru',
                'ibu_kota' => 'Namlea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kabupaten Buru Selatan',
                'ibu_kota' => 'Namrole',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kabupaten Kepulauan Aru',
                'ibu_kota' => 'Dobo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kabupaten Maluku Barat Daya',
                'ibu_kota' => 'Tiakur',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kabupaten Maluku Tengah',
                'ibu_kota' => 'Masohi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kabupaten Maluku Tenggara',
                'ibu_kota' => 'Tual',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kabupaten Maluku Tenggara Barat',
                'ibu_kota' => 'Saumlaki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kabupaten Seram Bagian Barat',
                'ibu_kota' => 'Dataran Hunipopu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kabupaten Seram Bagian Timur',
                'ibu_kota' => 'Dataran Hunimoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kota Ambon',
                'ibu_kota' => 'Ambon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'provinsi_id' => 31,
                'kabupaten_kota' => 'Kota Tual',
                'ibu_kota' => 'Tual',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'provinsi_id' => 32,
                'kabupaten_kota' => 'Kabupaten Halmahera Barat',
                'ibu_kota' => 'Jailolo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'provinsi_id' => 32,
                'kabupaten_kota' => 'Kabupaten Halmahera Selatan',
                'ibu_kota' => 'Labuha',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'provinsi_id' => 32,
                'kabupaten_kota' => 'Kabupaten Halmahera Tengah',
                'ibu_kota' => 'Weda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'provinsi_id' => 32,
                'kabupaten_kota' => 'Kabupaten Halmahera Timur',
                'ibu_kota' => 'Maba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'provinsi_id' => 32,
                'kabupaten_kota' => 'Kabupaten Halmahera Utara',
                'ibu_kota' => 'Tobelo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'provinsi_id' => 32,
                'kabupaten_kota' => 'Kabupaten Kepulauan Sula',
                'ibu_kota' => 'Sanana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'provinsi_id' => 32,
                'kabupaten_kota' => 'Kabupaten Pulau Morotai',
                'ibu_kota' => 'Daruba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'provinsi_id' => 32,
                'kabupaten_kota' => 'Kabupaten Pulau Taliabu',
                'ibu_kota' => 'Bobong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'provinsi_id' => 32,
                'kabupaten_kota' => 'Kota Ternate',
                'ibu_kota' => 'Ternate',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'provinsi_id' => 32,
                'kabupaten_kota' => 'Kota Tidore Kepulauan',
                'ibu_kota' => 'Tidore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Asmat',
                'ibu_kota' => 'Agats',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Biak Numfor',
                'ibu_kota' => 'Biak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Boven Digoel',
                'ibu_kota' => 'Tanah Merah',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'provinsi_id' => 33,
            'kabupaten_kota' => 'Kabupaten Deiyai (Deliyai)',
                'ibu_kota' => 'Tigi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Dogiyai',
                'ibu_kota' => 'Kigamani',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Intan Jaya',
                'ibu_kota' => 'Sugapa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Jayapura',
                'ibu_kota' => 'Jayapura',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Jayawijaya',
                'ibu_kota' => 'Wamena',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Keerom',
                'ibu_kota' => 'Waris',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'provinsi_id' => 33,
            'kabupaten_kota' => 'Kabupaten Kepulauan Yapen (Yapen Waropen)',
                'ibu_kota' => 'Serui',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Lanny Jaya',
                'ibu_kota' => 'Tiom',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Mamberamo Raya',
                'ibu_kota' => 'Burmeso',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Mamberamo Tengah',
                'ibu_kota' => 'Kobakma',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Mappi',
                'ibu_kota' => 'Kepi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Merauke',
                'ibu_kota' => 'Merauke',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Mimika',
                'ibu_kota' => 'Timika',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Nabire',
                'ibu_kota' => 'Nabire',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Nduga',
                'ibu_kota' => 'Kenyam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Paniai',
                'ibu_kota' => 'Enarotali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Pegunungan Bintang',
                'ibu_kota' => 'Oksibil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Puncak',
                'ibu_kota' => 'Ilaga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Puncak Jaya',
                'ibu_kota' => 'Mulia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Sarmi',
                'ibu_kota' => 'Sarmi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Supiori',
                'ibu_kota' => 'Sorendiweri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Tolikara',
                'ibu_kota' => 'Karubaga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Waropen',
                'ibu_kota' => 'Botawa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Yahukimo',
                'ibu_kota' => 'Sumohai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kabupaten Yalimo',
                'ibu_kota' => 'Elelim',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'provinsi_id' => 33,
                'kabupaten_kota' => 'Kota Jayapura',
                'ibu_kota' => 'Jayapura',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Fakfak',
                'ibu_kota' => 'Fak Fak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Kaimana',
                'ibu_kota' => 'Kaimana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Manokwari',
                'ibu_kota' => 'Manokwari',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Manokwari Selatan',
                'ibu_kota' => 'Ransiki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Maybrat',
                'ibu_kota' => 'Aifat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Pegunungan Arfak',
                'ibu_kota' => 'Anggi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Raja Ampat',
                'ibu_kota' => 'Waisai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Sorong',
                'ibu_kota' => 'Aimas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Sorong Selatan',
                'ibu_kota' => 'Teminabuan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Tambrauw',
                'ibu_kota' => 'Fef',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Teluk Bintuni',
                'ibu_kota' => 'Bintuni',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kabupaten Teluk Wondama',
                'ibu_kota' => 'Rasiei',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'provinsi_id' => 34,
                'kabupaten_kota' => 'Kota Sorong',
                'ibu_kota' => 'Sorong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}