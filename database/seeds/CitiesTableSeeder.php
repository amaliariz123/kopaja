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
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Barat',
                'ibu_kota' => 'Meulaboh',
                'k_bsni' => 'MBO',
            ),
            1 => 
            array (
                'id' => 2,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Barat Daya',
                'ibu_kota' => 'Blangpidie',
                'k_bsni' => 'BPD',
            ),
            2 => 
            array (
                'id' => 3,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Besar',
                'ibu_kota' => 'Jantho',
                'k_bsni' => 'JTH',
            ),
            3 => 
            array (
                'id' => 4,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Jaya',
                'ibu_kota' => 'Calang',
                'k_bsni' => 'CAG',
            ),
            4 => 
            array (
                'id' => 5,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Selatan',
                'ibu_kota' => 'Tapak Tuan',
                'k_bsni' => 'TTN',
            ),
            5 => 
            array (
                'id' => 6,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Singkil',
                'ibu_kota' => 'Singkil',
                'k_bsni' => 'SKL',
            ),
            6 => 
            array (
                'id' => 7,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Tamiang',
                'ibu_kota' => 'Karang Baru',
                'k_bsni' => 'KRB',
            ),
            7 => 
            array (
                'id' => 8,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Tengah',
                'ibu_kota' => 'Takengon',
                'k_bsni' => 'TKN',
            ),
            8 => 
            array (
                'id' => 9,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Tenggara',
                'ibu_kota' => 'Kutacane',
                'k_bsni' => 'KTN',
            ),
            9 => 
            array (
                'id' => 10,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Timur',
                'ibu_kota' => 'Langsa',
                'k_bsni' => 'LGS',
            ),
            10 => 
            array (
                'id' => 11,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Aceh Utara',
                'ibu_kota' => 'Lhoksukon',
                'k_bsni' => 'LSK',
            ),
            11 => 
            array (
                'id' => 12,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Bener Meriah',
                'ibu_kota' => 'Simpang Tiga Redelong',
                'k_bsni' => 'STR',
            ),
            12 => 
            array (
                'id' => 13,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Bireuen',
                'ibu_kota' => 'Bireuen',
                'k_bsni' => 'BIR',
            ),
            13 => 
            array (
                'id' => 14,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Gayo Lues',
                'ibu_kota' => 'Blangkejeren',
                'k_bsni' => 'BKJ',
            ),
            14 => 
            array (
                'id' => 15,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Nagan Raya',
                'ibu_kota' => 'Suka Makmue',
                'k_bsni' => 'SKM',
            ),
            15 => 
            array (
                'id' => 16,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Pidie',
                'ibu_kota' => 'Sigli',
                'k_bsni' => 'SGI',
            ),
            16 => 
            array (
                'id' => 17,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Pidie Jaya',
                'ibu_kota' => 'Meureundu',
                'k_bsni' => 'MRN',
            ),
            17 => 
            array (
                'id' => 18,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kabupaten Simeulue',
                'ibu_kota' => 'Sinabang',
                'k_bsni' => 'SNB',
            ),
            18 => 
            array (
                'id' => 19,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kota Banda Aceh',
                'ibu_kota' => 'Banda Aceh',
                'k_bsni' => 'BNA',
            ),
            19 => 
            array (
                'id' => 20,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kota Langsa',
                'ibu_kota' => 'Langsa',
                'k_bsni' => 'LGS',
            ),
            20 => 
            array (
                'id' => 21,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kota Lhokseumawe',
                'ibu_kota' => 'Lhokseumawe',
                'k_bsni' => 'LSM',
            ),
            21 => 
            array (
                'id' => 22,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kota Sabang',
                'ibu_kota' => 'Sabang',
                'k_bsni' => 'SAB',
            ),
            22 => 
            array (
                'id' => 23,
                'provinsi_id' => '1',
                'kabupaten_kota' => 'Kota Subulussalam',
                'ibu_kota' => 'Subulussalam',
                'k_bsni' => 'SUS',
            ),
            23 => 
            array (
                'id' => 24,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Asahan',
                'ibu_kota' => 'Kisaran',
                'k_bsni' => 'KIS',
            ),
            24 => 
            array (
                'id' => 25,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Batu Bara',
                'ibu_kota' => 'Lima Puluh',
                'k_bsni' => 'LMP',
            ),
            25 => 
            array (
                'id' => 26,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Dairi',
                'ibu_kota' => 'Sidikalang',
                'k_bsni' => 'SDK',
            ),
            26 => 
            array (
                'id' => 27,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Deli Serdang',
                'ibu_kota' => 'Lubuk Pakam',
                'k_bsni' => 'LBP',
            ),
            27 => 
            array (
                'id' => 28,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Humbang Hasundutan',
                'ibu_kota' => 'Dolok Sanggul',
                'k_bsni' => 'DLS',
            ),
            28 => 
            array (
                'id' => 29,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Karo',
                'ibu_kota' => 'Kabanjahe',
                'k_bsni' => 'KBJ',
            ),
            29 => 
            array (
                'id' => 30,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Labuhanbatu',
                'ibu_kota' => 'Rantau Prapat',
                'k_bsni' => 'RAP',
            ),
            30 => 
            array (
                'id' => 31,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Labuhanbatu Selatan',
                'ibu_kota' => 'Kota Pinang',
                'k_bsni' => 'KPI',
            ),
            31 => 
            array (
                'id' => 32,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Labuhanbatu Utara',
                'ibu_kota' => 'Aek Kanopan',
                'k_bsni' => 'AKK',
            ),
            32 => 
            array (
                'id' => 33,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Langkat',
                'ibu_kota' => 'Stabat',
                'k_bsni' => 'STB',
            ),
            33 => 
            array (
                'id' => 34,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Mandailing Natal',
                'ibu_kota' => 'Panyabungan',
                'k_bsni' => 'PYB',
            ),
            34 => 
            array (
                'id' => 35,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Nias',
                'ibu_kota' => 'Gunungsitoli',
                'k_bsni' => 'GST',
            ),
            35 => 
            array (
                'id' => 36,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Nias Barat',
                'ibu_kota' => 'Lahomi',
                'k_bsni' => 'LHM',
            ),
            36 => 
            array (
                'id' => 37,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Nias Selatan',
                'ibu_kota' => 'Teluk Dalam',
                'k_bsni' => 'TLD',
            ),
            37 => 
            array (
                'id' => 38,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Nias Utara',
                'ibu_kota' => 'Lotu',
                'k_bsni' => 'LTU',
            ),
            38 => 
            array (
                'id' => 39,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Padang Lawas',
                'ibu_kota' => 'Sibuhuan',
                'k_bsni' => 'SBH',
            ),
            39 => 
            array (
                'id' => 40,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Padang Lawas Utara',
                'ibu_kota' => 'Gunung Tua',
                'k_bsni' => 'GNT',
            ),
            40 => 
            array (
                'id' => 41,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Pakpak Bharat',
                'ibu_kota' => 'Salak',
                'k_bsni' => 'SAL',
            ),
            41 => 
            array (
                'id' => 42,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Samosir',
                'ibu_kota' => 'Pangururan',
                'k_bsni' => 'PRR',
            ),
            42 => 
            array (
                'id' => 43,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Serdang Bedagai',
                'ibu_kota' => 'Sei Rampah',
                'k_bsni' => 'SRH',
            ),
            43 => 
            array (
                'id' => 44,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Simalungun',
                'ibu_kota' => 'Pematang Siantar',
                'k_bsni' => 'PMS',
            ),
            44 => 
            array (
                'id' => 45,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Tapanuli Selatan',
                'ibu_kota' => 'Padang Sidempuan',
                'k_bsni' => 'PSP',
            ),
            45 => 
            array (
                'id' => 46,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Tapanuli Tengah',
                'ibu_kota' => 'Sibolga',
                'k_bsni' => 'SBG',
            ),
            46 => 
            array (
                'id' => 47,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Tapanuli Utara',
                'ibu_kota' => 'Tarutung',
                'k_bsni' => 'TRT',
            ),
            47 => 
            array (
                'id' => 48,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kabupaten Toba Samosir',
                'ibu_kota' => 'Balige',
                'k_bsni' => 'BLG',
            ),
            48 => 
            array (
                'id' => 49,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kota Binjai',
                'ibu_kota' => 'Binjai',
                'k_bsni' => 'BNJ',
            ),
            49 => 
            array (
                'id' => 50,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kota Gunungsitoli',
                'ibu_kota' => 'Gunungsitoli',
                'k_bsni' => 'GST',
            ),
            50 => 
            array (
                'id' => 51,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kota Medan',
                'ibu_kota' => 'Medan',
                'k_bsni' => 'MDN',
            ),
            51 => 
            array (
                'id' => 52,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kota Padang Sidempuan',
                'ibu_kota' => 'Padang Sidempuan',
                'k_bsni' => 'PSP',
            ),
            52 => 
            array (
                'id' => 53,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kota Pematangsiantar',
                'ibu_kota' => 'Pematangsiantar',
                'k_bsni' => 'PMS',
            ),
            53 => 
            array (
                'id' => 54,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kota Sibolga',
                'ibu_kota' => 'Sibolga',
                'k_bsni' => 'SBG',
            ),
            54 => 
            array (
                'id' => 55,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kota Tanjung Balai',
                'ibu_kota' => 'Tanjung Balai',
                'k_bsni' => 'TJB',
            ),
            55 => 
            array (
                'id' => 56,
                'provinsi_id' => '2',
                'kabupaten_kota' => 'Kota Tebing Tinggi',
                'ibu_kota' => 'Tebing Tinggi',
                'k_bsni' => 'TBT',
            ),
            56 => 
            array (
                'id' => 57,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Agam',
                'ibu_kota' => 'Lubuk Basung',
                'k_bsni' => 'LBB',
            ),
            57 => 
            array (
                'id' => 58,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Dharmasraya',
                'ibu_kota' => 'Pulau Punjung',
                'k_bsni' => 'PLJ',
            ),
            58 => 
            array (
                'id' => 59,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Kepulauan Mentawai',
                'ibu_kota' => 'Tuapejat',
                'k_bsni' => 'TPT',
            ),
            59 => 
            array (
                'id' => 60,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Lima Puluh Kota',
                'ibu_kota' => 'Sarilamak',
                'k_bsni' => 'SRK',
            ),
            60 => 
            array (
                'id' => 61,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Padang Pariaman',
                'ibu_kota' => 'Nagari Parit Malintang',
                'k_bsni' => 'NPM',
            ),
            61 => 
            array (
                'id' => 62,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Pasaman',
                'ibu_kota' => 'Lubuk Sikaping',
                'k_bsni' => 'LBS',
            ),
            62 => 
            array (
                'id' => 63,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Pasaman Barat',
                'ibu_kota' => 'Simpang Empat',
                'k_bsni' => 'SPE',
            ),
            63 => 
            array (
                'id' => 64,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Pesisir Selatan',
                'ibu_kota' => 'Painan',
                'k_bsni' => 'PNN',
            ),
            64 => 
            array (
                'id' => 65,
                'provinsi_id' => '3',
            'kabupaten_kota' => 'Kabupaten Sijunjung (Sawah Lunto Sijunjung)',
                'ibu_kota' => 'Muaro Sijunjung',
                'k_bsni' => 'MRJ',
            ),
            65 => 
            array (
                'id' => 66,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Solok',
                'ibu_kota' => 'Arosuka',
                'k_bsni' => 'ARS',
            ),
            66 => 
            array (
                'id' => 67,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Solok Selatan',
                'ibu_kota' => 'Padang Aro',
                'k_bsni' => 'PDA',
            ),
            67 => 
            array (
                'id' => 68,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kabupaten Tanah Datar',
                'ibu_kota' => 'Batusangkar',
                'k_bsni' => 'BSK',
            ),
            68 => 
            array (
                'id' => 69,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kota Bukittinggi',
                'ibu_kota' => 'Bukittinggi',
                'k_bsni' => 'BKT',
            ),
            69 => 
            array (
                'id' => 70,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kota Padang',
                'ibu_kota' => 'Padang',
                'k_bsni' => 'PAD',
            ),
            70 => 
            array (
                'id' => 71,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kota Padang Panjang',
                'ibu_kota' => 'Padang Panjang',
                'k_bsni' => 'PDP',
            ),
            71 => 
            array (
                'id' => 72,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kota Pariaman',
                'ibu_kota' => 'Pariaman',
                'k_bsni' => 'PMN',
            ),
            72 => 
            array (
                'id' => 73,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kota Payakumbuh',
                'ibu_kota' => 'Payakumbuh',
                'k_bsni' => 'PYH',
            ),
            73 => 
            array (
                'id' => 74,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kota Sawahlunto',
                'ibu_kota' => 'Sawahlunto',
                'k_bsni' => 'SWL',
            ),
            74 => 
            array (
                'id' => 75,
                'provinsi_id' => '3',
                'kabupaten_kota' => 'Kota Solok',
                'ibu_kota' => 'Solok',
                'k_bsni' => 'SLK',
            ),
            75 => 
            array (
                'id' => 76,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kabupaten Bengkalis',
                'ibu_kota' => 'Bengkalis',
                'k_bsni' => 'BLS',
            ),
            76 => 
            array (
                'id' => 77,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kabupaten Indragiri Hilir',
                'ibu_kota' => 'Tembilahan',
                'k_bsni' => 'TBH',
            ),
            77 => 
            array (
                'id' => 78,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kabupaten Indragiri Hulu',
                'ibu_kota' => 'Rengat',
                'k_bsni' => 'RGT',
            ),
            78 => 
            array (
                'id' => 79,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kabupaten Kampar',
                'ibu_kota' => 'Bangkinang',
                'k_bsni' => 'BKN',
            ),
            79 => 
            array (
                'id' => 80,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kabupaten Kepulauan Meranti',
                'ibu_kota' => 'Tebing Tinggi',
                'k_bsni' => 'TTG',
            ),
            80 => 
            array (
                'id' => 81,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kabupaten Kuantan Singingi',
                'ibu_kota' => 'Teluk Kuantan',
                'k_bsni' => 'TLK',
            ),
            81 => 
            array (
                'id' => 82,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kabupaten Pelalawan',
                'ibu_kota' => 'Pangkalan Kerinci',
                'k_bsni' => 'PKK',
            ),
            82 => 
            array (
                'id' => 83,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kabupaten Rokan Hilir',
                'ibu_kota' => 'Ujung Tanjung',
                'k_bsni' => 'UJT',
            ),
            83 => 
            array (
                'id' => 84,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kabupaten Rokan Hulu',
                'ibu_kota' => 'Pasir Pengarairan',
                'k_bsni' => 'PRP',
            ),
            84 => 
            array (
                'id' => 85,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kabupaten Siak',
                'ibu_kota' => 'Siak Sriindrapura',
                'k_bsni' => 'SAK',
            ),
            85 => 
            array (
                'id' => 86,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kota Dumai',
                'ibu_kota' => 'Dumai',
                'k_bsni' => 'DUM',
            ),
            86 => 
            array (
                'id' => 87,
                'provinsi_id' => '4',
                'kabupaten_kota' => 'Kota Pekanbaru',
                'ibu_kota' => 'Pekanbaru',
                'k_bsni' => 'PBR',
            ),
            87 => 
            array (
                'id' => 88,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kabupaten Batanghari',
                'ibu_kota' => 'Muara Bulian',
                'k_bsni' => 'MBN',
            ),
            88 => 
            array (
                'id' => 89,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kabupaten Bungo',
                'ibu_kota' => 'Muara Bungo',
                'k_bsni' => 'MRB',
            ),
            89 => 
            array (
                'id' => 90,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kabupaten Kerinci',
                'ibu_kota' => 'Sungai Penuh',
                'k_bsni' => 'SPN',
            ),
            90 => 
            array (
                'id' => 91,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kabupaten Merangin',
                'ibu_kota' => 'Bangko',
                'k_bsni' => 'BKO',
            ),
            91 => 
            array (
                'id' => 92,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kabupaten Muaro Jambi',
                'ibu_kota' => 'Sengeti',
                'k_bsni' => 'SNT',
            ),
            92 => 
            array (
                'id' => 93,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kabupaten Sarolangun',
                'ibu_kota' => 'Sarolangun',
                'k_bsni' => 'SRL',
            ),
            93 => 
            array (
                'id' => 94,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kabupaten Tanjung Jabung Barat',
                'ibu_kota' => 'Kuala Tungkal',
                'k_bsni' => 'KLT',
            ),
            94 => 
            array (
                'id' => 95,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kabupaten Tanjung Jabung Timur',
                'ibu_kota' => 'Muara Sabak',
                'k_bsni' => 'MSK',
            ),
            95 => 
            array (
                'id' => 96,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kabupaten Tebo',
                'ibu_kota' => 'Muara Tebo',
                'k_bsni' => 'MRT',
            ),
            96 => 
            array (
                'id' => 97,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kota Jambi',
                'ibu_kota' => 'Jambi',
                'k_bsni' => 'JMB',
            ),
            97 => 
            array (
                'id' => 98,
                'provinsi_id' => '5',
                'kabupaten_kota' => 'Kota Sungai Penuh',
                'ibu_kota' => 'Sungai Penuh',
                'k_bsni' => 'SPN',
            ),
            98 => 
            array (
                'id' => 99,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Banyuasin',
                'ibu_kota' => 'Pangkalan Balai',
                'k_bsni' => 'PKB',
            ),
            99 => 
            array (
                'id' => 100,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Empat Lawang',
                'ibu_kota' => 'Tebing Tinggi',
                'k_bsni' => 'TBG',
            ),
            100 => 
            array (
                'id' => 101,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Lahat',
                'ibu_kota' => 'Lahat',
                'k_bsni' => 'LHT',
            ),
            101 => 
            array (
                'id' => 102,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Muara Enim',
                'ibu_kota' => 'Muara Enim',
                'k_bsni' => 'MRE',
            ),
            102 => 
            array (
                'id' => 103,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Musi Banyuasin',
                'ibu_kota' => 'Sekayu',
                'k_bsni' => 'SKY',
            ),
            103 => 
            array (
                'id' => 104,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Musi Rawas',
                'ibu_kota' => 'Muarabeliti',
                'k_bsni' => 'MBL',
            ),
            104 => 
            array (
                'id' => 105,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Musi Rawas Utara',
                'ibu_kota' => 'Rupit',
                'k_bsni' => 'RPT',
            ),
            105 => 
            array (
                'id' => 106,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Ogan Ilir',
                'ibu_kota' => 'Indralaya',
                'k_bsni' => 'IDL',
            ),
            106 => 
            array (
                'id' => 107,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Ogan Komering Ilir',
                'ibu_kota' => 'Kayu Agung',
                'k_bsni' => 'KAG',
            ),
            107 => 
            array (
                'id' => 108,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Ogan Komering Ulu',
                'ibu_kota' => 'Baturaja',
                'k_bsni' => 'BTA',
            ),
            108 => 
            array (
                'id' => 109,
                'provinsi_id' => '6',
            'kabupaten_kota' => 'Kabupaten Ogan Komering Ulu Selatan (Oku Selatan)',
                'ibu_kota' => 'Muaradua',
                'k_bsni' => 'MRD',
            ),
            109 => 
            array (
                'id' => 110,
                'provinsi_id' => '6',
            'kabupaten_kota' => 'Kabupaten Ogan Komering Ulu Timur (Oku Timur)',
                'ibu_kota' => 'Martapura',
                'k_bsni' => 'MPR',
            ),
            110 => 
            array (
                'id' => 111,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kabupaten Penukal Abab Lematang Ilir',
                'ibu_kota' => 'Talang Ubi',
                'k_bsni' => 'TLB',
            ),
            111 => 
            array (
                'id' => 112,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kota Lubuk Linggau',
                'ibu_kota' => 'Lubuk Linggau',
                'k_bsni' => 'LLG',
            ),
            112 => 
            array (
                'id' => 113,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kota Pagar Alam',
                'ibu_kota' => 'Pagar Alam',
                'k_bsni' => 'PGA',
            ),
            113 => 
            array (
                'id' => 114,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kota Palembang',
                'ibu_kota' => 'Pelembang',
                'k_bsni' => 'PLG',
            ),
            114 => 
            array (
                'id' => 115,
                'provinsi_id' => '6',
                'kabupaten_kota' => 'Kota Prabumulih',
                'ibu_kota' => 'Prabumulih',
                'k_bsni' => 'PBM',
            ),
            115 => 
            array (
                'id' => 116,
                'provinsi_id' => '7',
                'kabupaten_kota' => 'Kabupaten Bengkulu Selatan',
                'ibu_kota' => 'Manna',
                'k_bsni' => 'MNA',
            ),
            116 => 
            array (
                'id' => 117,
                'provinsi_id' => '7',
                'kabupaten_kota' => 'Kabupaten Bengkulu Tengah',
                'ibu_kota' => 'Karang Tinggi',
                'k_bsni' => 'KRT',
            ),
            117 => 
            array (
                'id' => 118,
                'provinsi_id' => '7',
                'kabupaten_kota' => 'Kabupaten Bengkulu Utara',
                'ibu_kota' => 'Arga Makmur',
                'k_bsni' => 'AGM',
            ),
            118 => 
            array (
                'id' => 119,
                'provinsi_id' => '7',
                'kabupaten_kota' => 'Kabupaten Kaur',
                'ibu_kota' => 'Bintuhan',
                'k_bsni' => 'BHN',
            ),
            119 => 
            array (
                'id' => 120,
                'provinsi_id' => '7',
                'kabupaten_kota' => 'Kabupaten Kepahiang',
                'ibu_kota' => 'Kepahiang',
                'k_bsni' => 'KPH',
            ),
            120 => 
            array (
                'id' => 121,
                'provinsi_id' => '7',
                'kabupaten_kota' => 'Kabupaten Lebong',
                'ibu_kota' => 'Tubei',
                'k_bsni' => 'TUB',
            ),
            121 => 
            array (
                'id' => 122,
                'provinsi_id' => '7',
                'kabupaten_kota' => 'Kabupaten Muko Muko',
                'ibu_kota' => 'Mukomuko',
                'k_bsni' => 'MKM',
            ),
            122 => 
            array (
                'id' => 123,
                'provinsi_id' => '7',
                'kabupaten_kota' => 'Kabupaten Rejang Lebong',
                'ibu_kota' => 'Curup',
                'k_bsni' => 'CRP',
            ),
            123 => 
            array (
                'id' => 124,
                'provinsi_id' => '7',
                'kabupaten_kota' => 'Kabupaten Seluma',
                'ibu_kota' => 'Tais',
                'k_bsni' => 'TAS',
            ),
            124 => 
            array (
                'id' => 125,
                'provinsi_id' => '7',
                'kabupaten_kota' => 'Kota Bengkulu',
                'ibu_kota' => 'Bengkulu',
                'k_bsni' => 'BGL',
            ),
            125 => 
            array (
                'id' => 126,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Lampung Barat',
                'ibu_kota' => 'Liwa',
                'k_bsni' => 'LIW',
            ),
            126 => 
            array (
                'id' => 127,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Lampung Selatan',
                'ibu_kota' => 'Kalianda',
                'k_bsni' => 'KLA',
            ),
            127 => 
            array (
                'id' => 128,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Lampung Tengah',
                'ibu_kota' => 'Gunung Sugih',
                'k_bsni' => 'GNS',
            ),
            128 => 
            array (
                'id' => 129,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Lampung Timur',
                'ibu_kota' => 'Sukadana',
                'k_bsni' => 'SDN',
            ),
            129 => 
            array (
                'id' => 130,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Lampung Utara',
                'ibu_kota' => 'Kotabumi',
                'k_bsni' => 'KTB',
            ),
            130 => 
            array (
                'id' => 131,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Mesuji',
                'ibu_kota' => 'Mesuji',
                'k_bsni' => 'MSJ',
            ),
            131 => 
            array (
                'id' => 132,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Pesawaran',
                'ibu_kota' => 'Gedong Tataan',
                'k_bsni' => 'GDT',
            ),
            132 => 
            array (
                'id' => 133,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Pesisir Barat',
                'ibu_kota' => 'Krui',
                'k_bsni' => 'KRU',
            ),
            133 => 
            array (
                'id' => 134,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Pringsewu',
                'ibu_kota' => 'Pringsewu',
                'k_bsni' => 'PRW',
            ),
            134 => 
            array (
                'id' => 135,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Tanggamus',
                'ibu_kota' => 'Kota Agung',
                'k_bsni' => 'KOT',
            ),
            135 => 
            array (
                'id' => 136,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Tulang Bawang',
                'ibu_kota' => 'Menggala',
                'k_bsni' => 'MGL',
            ),
            136 => 
            array (
                'id' => 137,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Tulang Bawang Barat',
                'ibu_kota' => 'Tulang Bawang Tengah',
                'k_bsni' => 'TWG',
            ),
            137 => 
            array (
                'id' => 138,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kabupaten Way Kanan',
                'ibu_kota' => 'Blambangan Umpu',
                'k_bsni' => 'BBU',
            ),
            138 => 
            array (
                'id' => 139,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kota Bandar Lampung',
                'ibu_kota' => 'Bandar Lampung',
                'k_bsni' => 'BDL',
            ),
            139 => 
            array (
                'id' => 140,
                'provinsi_id' => '8',
                'kabupaten_kota' => 'Kota Metro',
                'ibu_kota' => 'Metro',
                'k_bsni' => 'MET',
            ),
            140 => 
            array (
                'id' => 141,
                'provinsi_id' => '9',
                'kabupaten_kota' => 'Kabupaten Bangka',
                'ibu_kota' => 'Sungai Liat',
                'k_bsni' => 'SGL',
            ),
            141 => 
            array (
                'id' => 142,
                'provinsi_id' => '9',
                'kabupaten_kota' => 'Kabupaten Bangka Barat',
                'ibu_kota' => 'Mentok',
                'k_bsni' => 'MTK',
            ),
            142 => 
            array (
                'id' => 143,
                'provinsi_id' => '9',
                'kabupaten_kota' => 'Kabupaten Bangka Selatan',
                'ibu_kota' => 'Toboali',
                'k_bsni' => 'TBL',
            ),
            143 => 
            array (
                'id' => 144,
                'provinsi_id' => '9',
                'kabupaten_kota' => 'Kabupaten Bangka Tengah',
                'ibu_kota' => 'Koba',
                'k_bsni' => 'KBA',
            ),
            144 => 
            array (
                'id' => 145,
                'provinsi_id' => '9',
                'kabupaten_kota' => 'Kabupaten Belitung',
                'ibu_kota' => 'Tanjung Pandan',
                'k_bsni' => 'TDN',
            ),
            145 => 
            array (
                'id' => 146,
                'provinsi_id' => '9',
                'kabupaten_kota' => 'Kabupaten Belitung Timur',
                'ibu_kota' => 'Manggar',
                'k_bsni' => 'MGR',
            ),
            146 => 
            array (
                'id' => 147,
                'provinsi_id' => '9',
                'kabupaten_kota' => 'Kota Pangkal Pinang',
                'ibu_kota' => 'Pangkal Pinang',
                'k_bsni' => 'PGP',
            ),
            147 => 
            array (
                'id' => 148,
                'provinsi_id' => '10',
                'kabupaten_kota' => 'Kabupaten Bintan',
                'ibu_kota' => 'Bandar Seri Bentan',
                'k_bsni' => 'BSB',
            ),
            148 => 
            array (
                'id' => 149,
                'provinsi_id' => '10',
                'kabupaten_kota' => 'Kabupaten Karimun',
                'ibu_kota' => 'Tanjung Balai Karimun',
                'k_bsni' => 'TBK',
            ),
            149 => 
            array (
                'id' => 150,
                'provinsi_id' => '10',
                'kabupaten_kota' => 'Kabupaten Kepulauan Anambas',
                'ibu_kota' => 'Tarempa',
                'k_bsni' => 'TRP',
            ),
            150 => 
            array (
                'id' => 151,
                'provinsi_id' => '10',
                'kabupaten_kota' => 'Kabupaten Lingga',
                'ibu_kota' => 'Daik Lingga',
                'k_bsni' => 'DKL',
            ),
            151 => 
            array (
                'id' => 152,
                'provinsi_id' => '10',
                'kabupaten_kota' => 'Kabupaten Natuna',
                'ibu_kota' => 'Ranai',
                'k_bsni' => 'RAN',
            ),
            152 => 
            array (
                'id' => 153,
                'provinsi_id' => '10',
                'kabupaten_kota' => 'Kota Batam',
                'ibu_kota' => 'Batam',
                'k_bsni' => 'BTM',
            ),
            153 => 
            array (
                'id' => 154,
                'provinsi_id' => '10',
                'kabupaten_kota' => 'Kota Tanjung Pinang',
                'ibu_kota' => 'Tanjung Pinang',
                'k_bsni' => 'TPG',
            ),
            154 => 
            array (
                'id' => 155,
                'provinsi_id' => '11',
                'kabupaten_kota' => 'Kabupaten Adm. Kepulauan Seribu',
                'ibu_kota' => 'Kepulauan Seribu Utara',
                'k_bsni' => 'KSU',
            ),
            155 => 
            array (
                'id' => 156,
                'provinsi_id' => '11',
                'kabupaten_kota' => 'Kota Adm. Jakarta Barat',
                'ibu_kota' => 'Grogol Petamburan',
                'k_bsni' => 'GGP',
            ),
            156 => 
            array (
                'id' => 157,
                'provinsi_id' => '11',
                'kabupaten_kota' => 'Kota Adm. Jakarta Pusat',
                'ibu_kota' => 'Tanah Abang',
                'k_bsni' => 'TNA',
            ),
            157 => 
            array (
                'id' => 158,
                'provinsi_id' => '11',
                'kabupaten_kota' => 'Kota Adm. Jakarta Selatan',
                'ibu_kota' => 'Kebayoran Baru',
                'k_bsni' => 'KYB',
            ),
            158 => 
            array (
                'id' => 159,
                'provinsi_id' => '11',
                'kabupaten_kota' => 'Kota Adm. Jakarta Timur',
                'ibu_kota' => 'Cakung',
                'k_bsni' => 'CKG',
            ),
            159 => 
            array (
                'id' => 160,
                'provinsi_id' => '11',
                'kabupaten_kota' => 'Kota Adm. Jakarta Utara',
                'ibu_kota' => 'Tanjung Priok',
                'k_bsni' => 'TJP',
            ),
            160 => 
            array (
                'id' => 161,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Bandung',
                'ibu_kota' => 'Soreang',
                'k_bsni' => 'SOR',
            ),
            161 => 
            array (
                'id' => 162,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Bandung Barat',
                'ibu_kota' => 'Ngamprah',
                'k_bsni' => 'NPH',
            ),
            162 => 
            array (
                'id' => 163,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Bekasi',
                'ibu_kota' => 'Cikarang',
                'k_bsni' => 'CKR',
            ),
            163 => 
            array (
                'id' => 164,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Bogor',
                'ibu_kota' => 'Cibinong',
                'k_bsni' => 'CBI',
            ),
            164 => 
            array (
                'id' => 165,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Ciamis',
                'ibu_kota' => 'Ciamis',
                'k_bsni' => 'CMS',
            ),
            165 => 
            array (
                'id' => 166,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Cianjur',
                'ibu_kota' => 'Cianjur',
                'k_bsni' => 'CJR',
            ),
            166 => 
            array (
                'id' => 167,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Cirebon',
                'ibu_kota' => 'Sumber',
                'k_bsni' => 'SBR',
            ),
            167 => 
            array (
                'id' => 168,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Garut',
                'ibu_kota' => 'Garut',
                'k_bsni' => 'GRT',
            ),
            168 => 
            array (
                'id' => 169,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Indramayu',
                'ibu_kota' => 'Indramayu',
                'k_bsni' => 'IDM',
            ),
            169 => 
            array (
                'id' => 170,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Karawang',
                'ibu_kota' => 'Karawang',
                'k_bsni' => 'KWG',
            ),
            170 => 
            array (
                'id' => 171,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Kuningan',
                'ibu_kota' => 'Kuningan',
                'k_bsni' => 'KNG',
            ),
            171 => 
            array (
                'id' => 172,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Majalengka',
                'ibu_kota' => 'Majalengka',
                'k_bsni' => 'MJL',
            ),
            172 => 
            array (
                'id' => 173,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Pangandaran',
                'ibu_kota' => 'Parigi',
                'k_bsni' => 'PAG',
            ),
            173 => 
            array (
                'id' => 174,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Purwakarta',
                'ibu_kota' => 'Purwakarta',
                'k_bsni' => 'PWK',
            ),
            174 => 
            array (
                'id' => 175,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Subang',
                'ibu_kota' => 'Subang',
                'k_bsni' => 'SNG',
            ),
            175 => 
            array (
                'id' => 176,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Sukabumi',
                'ibu_kota' => 'Sukabumi',
                'k_bsni' => 'SBM',
            ),
            176 => 
            array (
                'id' => 177,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Sumedang',
                'ibu_kota' => 'Sumedang',
                'k_bsni' => 'SMD',
            ),
            177 => 
            array (
                'id' => 178,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kabupaten Tasikmalaya',
                'ibu_kota' => 'Singaparna',
                'k_bsni' => 'SPA',
            ),
            178 => 
            array (
                'id' => 179,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kota Bandung',
                'ibu_kota' => 'Bandung',
                'k_bsni' => 'BDG',
            ),
            179 => 
            array (
                'id' => 180,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kota Banjar',
                'ibu_kota' => 'Banjar',
                'k_bsni' => 'BJR',
            ),
            180 => 
            array (
                'id' => 181,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kota Bekasi',
                'ibu_kota' => 'Bekasi',
                'k_bsni' => 'BKS',
            ),
            181 => 
            array (
                'id' => 182,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kota Bogor',
                'ibu_kota' => 'Bogor',
                'k_bsni' => 'BGR',
            ),
            182 => 
            array (
                'id' => 183,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kota Cimahi',
                'ibu_kota' => 'Cimahi',
                'k_bsni' => 'CMH',
            ),
            183 => 
            array (
                'id' => 184,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kota Cirebon',
                'ibu_kota' => 'Cirebon',
                'k_bsni' => 'CBN',
            ),
            184 => 
            array (
                'id' => 185,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kota Depok',
                'ibu_kota' => 'Depok',
                'k_bsni' => 'DPK',
            ),
            185 => 
            array (
                'id' => 186,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kota Sukabumi',
                'ibu_kota' => 'Sukabumi',
                'k_bsni' => 'SKB',
            ),
            186 => 
            array (
                'id' => 187,
                'provinsi_id' => '12',
                'kabupaten_kota' => 'Kota Tasikmalaya',
                'ibu_kota' => 'Tasikmalaya',
                'k_bsni' => 'TSM',
            ),
            187 => 
            array (
                'id' => 188,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Banjarnegara',
                'ibu_kota' => 'Banjarnegara',
                'k_bsni' => 'BNR',
            ),
            188 => 
            array (
                'id' => 189,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Banyumas',
                'ibu_kota' => 'Purwokerto',
                'k_bsni' => 'PWT',
            ),
            189 => 
            array (
                'id' => 190,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Batang',
                'ibu_kota' => 'Batang',
                'k_bsni' => 'BTG',
            ),
            190 => 
            array (
                'id' => 191,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Blora',
                'ibu_kota' => 'Blora',
                'k_bsni' => 'BLA',
            ),
            191 => 
            array (
                'id' => 192,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Boyolali',
                'ibu_kota' => 'Boyolali',
                'k_bsni' => 'BYL',
            ),
            192 => 
            array (
                'id' => 193,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Brebes',
                'ibu_kota' => 'Brebes',
                'k_bsni' => 'BBS',
            ),
            193 => 
            array (
                'id' => 194,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Cilacap',
                'ibu_kota' => 'Cilacap',
                'k_bsni' => 'CLP',
            ),
            194 => 
            array (
                'id' => 195,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Demak',
                'ibu_kota' => 'Demak',
                'k_bsni' => 'DMK',
            ),
            195 => 
            array (
                'id' => 196,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Grobogan',
                'ibu_kota' => 'Purwodadi',
                'k_bsni' => 'PWD',
            ),
            196 => 
            array (
                'id' => 197,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Jepara',
                'ibu_kota' => 'Jepara',
                'k_bsni' => 'JPA',
            ),
            197 => 
            array (
                'id' => 198,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Karanganyar',
                'ibu_kota' => 'Karanganyar',
                'k_bsni' => 'KRG',
            ),
            198 => 
            array (
                'id' => 199,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Kebumen',
                'ibu_kota' => 'Kebumen',
                'k_bsni' => 'KBM',
            ),
            199 => 
            array (
                'id' => 200,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Kendal',
                'ibu_kota' => 'Kendal',
                'k_bsni' => 'KDL',
            ),
            200 => 
            array (
                'id' => 201,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Klaten',
                'ibu_kota' => 'Klaten',
                'k_bsni' => 'KLN',
            ),
            201 => 
            array (
                'id' => 202,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Kudus',
                'ibu_kota' => 'Kudus',
                'k_bsni' => 'KDS',
            ),
            202 => 
            array (
                'id' => 203,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Magelang',
                'ibu_kota' => 'Mungkid',
                'k_bsni' => 'MKD',
            ),
            203 => 
            array (
                'id' => 204,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Pati',
                'ibu_kota' => 'Pati',
                'k_bsni' => 'PTI',
            ),
            204 => 
            array (
                'id' => 205,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Pekalongan',
                'ibu_kota' => 'Kajen',
                'k_bsni' => 'KJN',
            ),
            205 => 
            array (
                'id' => 206,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Pemalang',
                'ibu_kota' => 'Pemalang',
                'k_bsni' => 'PML',
            ),
            206 => 
            array (
                'id' => 207,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Purbalingga',
                'ibu_kota' => 'Purbalingga',
                'k_bsni' => 'PBG',
            ),
            207 => 
            array (
                'id' => 208,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Purworejo',
                'ibu_kota' => 'Purworejo',
                'k_bsni' => 'PWR',
            ),
            208 => 
            array (
                'id' => 209,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Rembang',
                'ibu_kota' => 'Rembang',
                'k_bsni' => 'RBG',
            ),
            209 => 
            array (
                'id' => 210,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Semarang',
                'ibu_kota' => 'Ungaran',
                'k_bsni' => 'UNR',
            ),
            210 => 
            array (
                'id' => 211,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Sragen',
                'ibu_kota' => 'Sragen',
                'k_bsni' => 'SGN',
            ),
            211 => 
            array (
                'id' => 212,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Sukoharjo',
                'ibu_kota' => 'Sukoharjo',
                'k_bsni' => 'SKH',
            ),
            212 => 
            array (
                'id' => 213,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Tegal',
                'ibu_kota' => 'Slawi',
                'k_bsni' => 'SLW',
            ),
            213 => 
            array (
                'id' => 214,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Temanggung',
                'ibu_kota' => 'Temanggung',
                'k_bsni' => 'TMG',
            ),
            214 => 
            array (
                'id' => 215,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Wonogiri',
                'ibu_kota' => 'Wonogiri',
                'k_bsni' => 'WNG',
            ),
            215 => 
            array (
                'id' => 216,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kabupaten Wonosobo',
                'ibu_kota' => 'Wonosobo',
                'k_bsni' => 'WSB',
            ),
            216 => 
            array (
                'id' => 217,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kota Magelang',
                'ibu_kota' => 'Magelang',
                'k_bsni' => 'MGG',
            ),
            217 => 
            array (
                'id' => 218,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kota Pekalongan',
                'ibu_kota' => 'Pekalongan',
                'k_bsni' => 'PKL',
            ),
            218 => 
            array (
                'id' => 219,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kota Salatiga',
                'ibu_kota' => 'Salatiga',
                'k_bsni' => 'SLT',
            ),
            219 => 
            array (
                'id' => 220,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kota Semarang',
                'ibu_kota' => 'Semarang',
                'k_bsni' => 'SMG',
            ),
            220 => 
            array (
                'id' => 221,
                'provinsi_id' => '13',
            'kabupaten_kota' => 'Kota Surakarta (Solo)',
                'ibu_kota' => 'Surakarta',
                'k_bsni' => 'SKT',
            ),
            221 => 
            array (
                'id' => 222,
                'provinsi_id' => '13',
                'kabupaten_kota' => 'Kota Tegal',
                'ibu_kota' => 'Tegal',
                'k_bsni' => 'TGL',
            ),
            222 => 
            array (
                'id' => 223,
                'provinsi_id' => '14',
                'kabupaten_kota' => 'Kabupaten Bantul',
                'ibu_kota' => 'Bantul',
                'k_bsni' => 'BTL',
            ),
            223 => 
            array (
                'id' => 224,
                'provinsi_id' => '14',
                'kabupaten_kota' => 'Kabupaten Gunung Kidul',
                'ibu_kota' => 'Wonosari',
                'k_bsni' => 'WNO',
            ),
            224 => 
            array (
                'id' => 225,
                'provinsi_id' => '14',
                'kabupaten_kota' => 'Kabupaten Kulon Progo',
                'ibu_kota' => 'Wates',
                'k_bsni' => 'WAT',
            ),
            225 => 
            array (
                'id' => 226,
                'provinsi_id' => '14',
                'kabupaten_kota' => 'Kabupaten Sleman',
                'ibu_kota' => 'Sleman',
                'k_bsni' => 'SMN',
            ),
            226 => 
            array (
                'id' => 227,
                'provinsi_id' => '14',
                'kabupaten_kota' => 'Kota Yogyakarta',
                'ibu_kota' => 'Yogyakarta',
                'k_bsni' => 'YYK',
            ),
            227 => 
            array (
                'id' => 228,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Bangkalan',
                'ibu_kota' => 'Bangkalan',
                'k_bsni' => 'BKL',
            ),
            228 => 
            array (
                'id' => 229,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Banyuwangi',
                'ibu_kota' => 'Banyuwangi',
                'k_bsni' => 'BYW',
            ),
            229 => 
            array (
                'id' => 230,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Blitar',
                'ibu_kota' => 'Kanigoro',
                'k_bsni' => 'KNR',
            ),
            230 => 
            array (
                'id' => 231,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Bojonegoro',
                'ibu_kota' => 'Bojonegoro',
                'k_bsni' => 'BJN',
            ),
            231 => 
            array (
                'id' => 232,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Bondowoso',
                'ibu_kota' => 'Bondowoso',
                'k_bsni' => 'BDW',
            ),
            232 => 
            array (
                'id' => 233,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Gresik',
                'ibu_kota' => 'Gresik',
                'k_bsni' => 'GSK',
            ),
            233 => 
            array (
                'id' => 234,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Jember',
                'ibu_kota' => 'Jember',
                'k_bsni' => 'JMR',
            ),
            234 => 
            array (
                'id' => 235,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Jombang',
                'ibu_kota' => 'Jombang',
                'k_bsni' => 'JBG',
            ),
            235 => 
            array (
                'id' => 236,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Kediri',
                'ibu_kota' => 'Kediri',
                'k_bsni' => 'KDR',
            ),
            236 => 
            array (
                'id' => 237,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Lamongan',
                'ibu_kota' => 'Lamongan',
                'k_bsni' => 'LMG',
            ),
            237 => 
            array (
                'id' => 238,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Lumajang',
                'ibu_kota' => 'Lumajang',
                'k_bsni' => 'LMJ',
            ),
            238 => 
            array (
                'id' => 239,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Madiun',
                'ibu_kota' => 'Mejayan',
                'k_bsni' => 'MJY',
            ),
            239 => 
            array (
                'id' => 240,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Magetan',
                'ibu_kota' => 'Magetan',
                'k_bsni' => 'MGT',
            ),
            240 => 
            array (
                'id' => 241,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Malang',
                'ibu_kota' => 'Kepanjen',
                'k_bsni' => 'KPN',
            ),
            241 => 
            array (
                'id' => 242,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Mojokerto',
                'ibu_kota' => 'Mojokerto',
                'k_bsni' => 'MJK',
            ),
            242 => 
            array (
                'id' => 243,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Nganjuk',
                'ibu_kota' => 'Nganjuk',
                'k_bsni' => 'NJK',
            ),
            243 => 
            array (
                'id' => 244,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Ngawi',
                'ibu_kota' => 'Ngawi',
                'k_bsni' => 'NGW',
            ),
            244 => 
            array (
                'id' => 245,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Pacitan',
                'ibu_kota' => 'Pacitan',
                'k_bsni' => 'PCT',
            ),
            245 => 
            array (
                'id' => 246,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Pamekasan',
                'ibu_kota' => 'Pamekasan',
                'k_bsni' => 'PMK',
            ),
            246 => 
            array (
                'id' => 247,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Pasuruan',
                'ibu_kota' => 'Pasuruan',
                'k_bsni' => 'PSR',
            ),
            247 => 
            array (
                'id' => 248,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Ponorogo',
                'ibu_kota' => 'Ponorogo',
                'k_bsni' => 'PNG',
            ),
            248 => 
            array (
                'id' => 249,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Probolinggo',
                'ibu_kota' => 'Kraksaan',
                'k_bsni' => 'KRS',
            ),
            249 => 
            array (
                'id' => 250,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Sampang',
                'ibu_kota' => 'Sampang',
                'k_bsni' => 'SPG',
            ),
            250 => 
            array (
                'id' => 251,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Sidoarjo',
                'ibu_kota' => 'Sidoarjo',
                'k_bsni' => 'SDA',
            ),
            251 => 
            array (
                'id' => 252,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Situbondo',
                'ibu_kota' => 'Situbondo',
                'k_bsni' => 'SIT',
            ),
            252 => 
            array (
                'id' => 253,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Sumenep',
                'ibu_kota' => 'Sumenep',
                'k_bsni' => 'SMP',
            ),
            253 => 
            array (
                'id' => 254,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Trenggalek',
                'ibu_kota' => 'Trenggalek',
                'k_bsni' => 'TRK',
            ),
            254 => 
            array (
                'id' => 255,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Tuban',
                'ibu_kota' => 'Tuban',
                'k_bsni' => 'TBN',
            ),
            255 => 
            array (
                'id' => 256,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kabupaten Tulungagung',
                'ibu_kota' => 'Tulungagung',
                'k_bsni' => 'TLG',
            ),
            256 => 
            array (
                'id' => 257,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kota Batu',
                'ibu_kota' => 'Batu',
                'k_bsni' => 'BTU',
            ),
            257 => 
            array (
                'id' => 258,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kota Blitar',
                'ibu_kota' => 'Blitar',
                'k_bsni' => 'BLT',
            ),
            258 => 
            array (
                'id' => 259,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kota Kediri',
                'ibu_kota' => 'Kediri',
                'k_bsni' => 'KDR',
            ),
            259 => 
            array (
                'id' => 260,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kota Madiun',
                'ibu_kota' => 'Madiun',
                'k_bsni' => 'MAD',
            ),
            260 => 
            array (
                'id' => 261,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kota Malang',
                'ibu_kota' => 'Malang',
                'k_bsni' => 'MLG',
            ),
            261 => 
            array (
                'id' => 262,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kota Mojokerto',
                'ibu_kota' => 'Mojokerto',
                'k_bsni' => 'MJK',
            ),
            262 => 
            array (
                'id' => 263,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kota Pasuruan',
                'ibu_kota' => 'Pasuruan',
                'k_bsni' => 'PSN',
            ),
            263 => 
            array (
                'id' => 264,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kota Probolinggo',
                'ibu_kota' => 'Probolinggo',
                'k_bsni' => 'PBL',
            ),
            264 => 
            array (
                'id' => 265,
                'provinsi_id' => '15',
                'kabupaten_kota' => 'Kota Surabaya',
                'ibu_kota' => 'Surabaya',
                'k_bsni' => 'SBY',
            ),
            265 => 
            array (
                'id' => 266,
                'provinsi_id' => '16',
                'kabupaten_kota' => 'Kabupaten Lebak',
                'ibu_kota' => 'Rangkas Bitung',
                'k_bsni' => 'RKB',
            ),
            266 => 
            array (
                'id' => 267,
                'provinsi_id' => '16',
                'kabupaten_kota' => 'Kabupaten Pandeglang',
                'ibu_kota' => 'Pandeglang',
                'k_bsni' => 'PDG',
            ),
            267 => 
            array (
                'id' => 268,
                'provinsi_id' => '16',
                'kabupaten_kota' => 'Kabupaten Serang',
                'ibu_kota' => 'Serang',
                'k_bsni' => 'SRG',
            ),
            268 => 
            array (
                'id' => 269,
                'provinsi_id' => '16',
                'kabupaten_kota' => 'Kabupaten Tangerang',
                'ibu_kota' => 'Tigaraksa',
                'k_bsni' => 'TGR',
            ),
            269 => 
            array (
                'id' => 270,
                'provinsi_id' => '16',
                'kabupaten_kota' => 'Kota Cilegon',
                'ibu_kota' => 'Cilegon',
                'k_bsni' => 'CLG',
            ),
            270 => 
            array (
                'id' => 271,
                'provinsi_id' => '16',
                'kabupaten_kota' => 'Kota Serang',
                'ibu_kota' => 'Serang',
                'k_bsni' => 'SRG',
            ),
            271 => 
            array (
                'id' => 272,
                'provinsi_id' => '16',
                'kabupaten_kota' => 'Kota Tangerang',
                'ibu_kota' => 'Tangerang',
                'k_bsni' => 'TNG',
            ),
            272 => 
            array (
                'id' => 273,
                'provinsi_id' => '16',
                'kabupaten_kota' => 'Kota Tangerang Selatan',
                'ibu_kota' => 'Ciputat',
                'k_bsni' => 'CPT',
            ),
            273 => 
            array (
                'id' => 274,
                'provinsi_id' => '17',
                'kabupaten_kota' => 'Kabupaten Badung',
                'ibu_kota' => 'Mengwi',
                'k_bsni' => 'MGW',
            ),
            274 => 
            array (
                'id' => 275,
                'provinsi_id' => '17',
                'kabupaten_kota' => 'Kabupaten Bangli',
                'ibu_kota' => 'Bangli',
                'k_bsni' => 'BLI',
            ),
            275 => 
            array (
                'id' => 276,
                'provinsi_id' => '17',
                'kabupaten_kota' => 'Kabupaten Buleleng',
                'ibu_kota' => 'Singaraja',
                'k_bsni' => 'SGR',
            ),
            276 => 
            array (
                'id' => 277,
                'provinsi_id' => '17',
                'kabupaten_kota' => 'Kabupaten Gianyar',
                'ibu_kota' => 'Gianyar',
                'k_bsni' => 'GIN',
            ),
            277 => 
            array (
                'id' => 278,
                'provinsi_id' => '17',
                'kabupaten_kota' => 'Kabupaten Jembrana',
                'ibu_kota' => 'Negara',
                'k_bsni' => 'NGA',
            ),
            278 => 
            array (
                'id' => 279,
                'provinsi_id' => '17',
                'kabupaten_kota' => 'Kabupaten Karangasem',
                'ibu_kota' => 'Karangasem',
                'k_bsni' => 'KRA',
            ),
            279 => 
            array (
                'id' => 280,
                'provinsi_id' => '17',
                'kabupaten_kota' => 'Kabupaten Klungkung',
                'ibu_kota' => 'Semarapura',
                'k_bsni' => 'SRP',
            ),
            280 => 
            array (
                'id' => 281,
                'provinsi_id' => '17',
                'kabupaten_kota' => 'Kabupaten Tabanan',
                'ibu_kota' => 'Tabanan',
                'k_bsni' => 'TAB',
            ),
            281 => 
            array (
                'id' => 282,
                'provinsi_id' => '17',
                'kabupaten_kota' => 'Kota Denpasar',
                'ibu_kota' => 'Denpasar',
                'k_bsni' => 'DPR',
            ),
            282 => 
            array (
                'id' => 283,
                'provinsi_id' => '18',
                'kabupaten_kota' => 'Kabupaten Bima',
                'ibu_kota' => 'Woha',
                'k_bsni' => 'WHO',
            ),
            283 => 
            array (
                'id' => 284,
                'provinsi_id' => '18',
                'kabupaten_kota' => 'Kabupaten Dompu',
                'ibu_kota' => 'Dompu',
                'k_bsni' => 'DPU',
            ),
            284 => 
            array (
                'id' => 285,
                'provinsi_id' => '18',
                'kabupaten_kota' => 'Kabupaten Lombok Barat',
                'ibu_kota' => 'Gerung',
                'k_bsni' => 'GRG',
            ),
            285 => 
            array (
                'id' => 286,
                'provinsi_id' => '18',
                'kabupaten_kota' => 'Kabupaten Lombok Tengah',
                'ibu_kota' => 'Praya',
                'k_bsni' => 'PYA',
            ),
            286 => 
            array (
                'id' => 287,
                'provinsi_id' => '18',
                'kabupaten_kota' => 'Kabupaten Lombok Timur',
                'ibu_kota' => 'Selong',
                'k_bsni' => 'SEL',
            ),
            287 => 
            array (
                'id' => 288,
                'provinsi_id' => '18',
                'kabupaten_kota' => 'Kabupaten Lombok Utara',
                'ibu_kota' => 'Tanjung',
                'k_bsni' => 'TJN',
            ),
            288 => 
            array (
                'id' => 289,
                'provinsi_id' => '18',
                'kabupaten_kota' => 'Kabupaten Sumbawa',
                'ibu_kota' => 'Sumbawa Besar',
                'k_bsni' => 'SBW',
            ),
            289 => 
            array (
                'id' => 290,
                'provinsi_id' => '18',
                'kabupaten_kota' => 'Kabupaten Sumbawa Barat',
                'ibu_kota' => 'Taliwang',
                'k_bsni' => 'TLW',
            ),
            290 => 
            array (
                'id' => 291,
                'provinsi_id' => '18',
                'kabupaten_kota' => 'Kota Bima',
                'ibu_kota' => 'Bima',
                'k_bsni' => 'BIM',
            ),
            291 => 
            array (
                'id' => 292,
                'provinsi_id' => '18',
                'kabupaten_kota' => 'Kota Mataram',
                'ibu_kota' => 'Mataram',
                'k_bsni' => 'MTR',
            ),
            292 => 
            array (
                'id' => 293,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Alor',
                'ibu_kota' => 'Kalabahi',
                'k_bsni' => 'KLB',
            ),
            293 => 
            array (
                'id' => 294,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Belu',
                'ibu_kota' => 'Atambua',
                'k_bsni' => 'ATB',
            ),
            294 => 
            array (
                'id' => 295,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Ende',
                'ibu_kota' => 'Ende',
                'k_bsni' => 'END',
            ),
            295 => 
            array (
                'id' => 296,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Flores Timur',
                'ibu_kota' => 'Larantuka',
                'k_bsni' => 'LRT',
            ),
            296 => 
            array (
                'id' => 297,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Kupang',
                'ibu_kota' => 'Kupang',
                'k_bsni' => 'KPG',
            ),
            297 => 
            array (
                'id' => 298,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Lembata',
                'ibu_kota' => 'Lewoleba',
                'k_bsni' => 'LWB',
            ),
            298 => 
            array (
                'id' => 299,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Malaka',
                'ibu_kota' => 'Betun',
                'k_bsni' => 'BTN',
            ),
            299 => 
            array (
                'id' => 300,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Manggarai',
                'ibu_kota' => 'Ruteng',
                'k_bsni' => 'RTG',
            ),
            300 => 
            array (
                'id' => 301,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Manggarai Barat',
                'ibu_kota' => 'Labuan Bajo',
                'k_bsni' => 'LBJ',
            ),
            301 => 
            array (
                'id' => 302,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Manggarai Timur',
                'ibu_kota' => 'Borong',
                'k_bsni' => 'BRG',
            ),
            302 => 
            array (
                'id' => 303,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Nagekeo',
                'ibu_kota' => 'Mbay',
                'k_bsni' => 'MBY',
            ),
            303 => 
            array (
                'id' => 304,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Ngada',
                'ibu_kota' => 'Bajawa',
                'k_bsni' => 'BJW',
            ),
            304 => 
            array (
                'id' => 305,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Rote Ndao',
                'ibu_kota' => 'Baa',
                'k_bsni' => 'BAA',
            ),
            305 => 
            array (
                'id' => 306,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Sabu Raijua',
                'ibu_kota' => 'Sabu Barat',
                'k_bsni' => 'SBB',
            ),
            306 => 
            array (
                'id' => 307,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Sikka',
                'ibu_kota' => 'Maumere',
                'k_bsni' => 'MME',
            ),
            307 => 
            array (
                'id' => 308,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Sumba Barat',
                'ibu_kota' => 'Waikabubak',
                'k_bsni' => 'WKB',
            ),
            308 => 
            array (
                'id' => 309,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Sumba Barat Daya',
                'ibu_kota' => 'Tambolaka',
                'k_bsni' => 'TAM',
            ),
            309 => 
            array (
                'id' => 310,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Sumba Tengah',
                'ibu_kota' => 'Waibakul',
                'k_bsni' => 'WBL',
            ),
            310 => 
            array (
                'id' => 311,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Sumba Timur',
                'ibu_kota' => 'Waingapu',
                'k_bsni' => 'WGP',
            ),
            311 => 
            array (
                'id' => 312,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Timor Tengah Selatan',
                'ibu_kota' => 'Soe',
                'k_bsni' => 'SOE',
            ),
            312 => 
            array (
                'id' => 313,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kabupaten Timor Tengah Utara',
                'ibu_kota' => 'Kefamenanu',
                'k_bsni' => 'KFM',
            ),
            313 => 
            array (
                'id' => 314,
                'provinsi_id' => '19',
                'kabupaten_kota' => 'Kota Kupang',
                'ibu_kota' => 'Kupang',
                'k_bsni' => 'KPG',
            ),
            314 => 
            array (
                'id' => 315,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Bengkayang',
                'ibu_kota' => 'Bengkayang',
                'k_bsni' => 'BEK',
            ),
            315 => 
            array (
                'id' => 316,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Kapuas Hulu',
                'ibu_kota' => 'Putussibau',
                'k_bsni' => 'PTS',
            ),
            316 => 
            array (
                'id' => 317,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Kayong Utara',
                'ibu_kota' => 'Sukadane',
                'k_bsni' => 'SKD',
            ),
            317 => 
            array (
                'id' => 318,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Ketapang',
                'ibu_kota' => 'Ketapang',
                'k_bsni' => 'KTP',
            ),
            318 => 
            array (
                'id' => 319,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Kubu Raya',
                'ibu_kota' => 'Sungai Raya',
                'k_bsni' => 'SRY',
            ),
            319 => 
            array (
                'id' => 320,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Landak',
                'ibu_kota' => 'Ngabang',
                'k_bsni' => 'NBA',
            ),
            320 => 
            array (
                'id' => 321,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Melawi',
                'ibu_kota' => 'Nanga Pinoh',
                'k_bsni' => 'NGP',
            ),
            321 => 
            array (
                'id' => 322,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Mempawah',
                'ibu_kota' => 'Mempawah',
                'k_bsni' => 'MPW',
            ),
            322 => 
            array (
                'id' => 323,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Sambas',
                'ibu_kota' => 'Sambas',
                'k_bsni' => 'SBS',
            ),
            323 => 
            array (
                'id' => 324,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Sanggau',
                'ibu_kota' => 'Sanggau',
                'k_bsni' => 'SAG',
            ),
            324 => 
            array (
                'id' => 325,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Sekadau',
                'ibu_kota' => 'Sekadau',
                'k_bsni' => 'SED',
            ),
            325 => 
            array (
                'id' => 326,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kabupaten Sintang',
                'ibu_kota' => 'Sintang',
                'k_bsni' => 'STG',
            ),
            326 => 
            array (
                'id' => 327,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kota Pontianak',
                'ibu_kota' => 'Pontianak',
                'k_bsni' => 'PTK',
            ),
            327 => 
            array (
                'id' => 328,
                'provinsi_id' => '20',
                'kabupaten_kota' => 'Kota Singkawang',
                'ibu_kota' => 'Singkawang',
                'k_bsni' => 'SKW',
            ),
            328 => 
            array (
                'id' => 329,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Barito Selatan',
                'ibu_kota' => 'Buntok',
                'k_bsni' => 'BNT',
            ),
            329 => 
            array (
                'id' => 330,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Barito Timur',
                'ibu_kota' => 'Tamiang Layang',
                'k_bsni' => 'TML',
            ),
            330 => 
            array (
                'id' => 331,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Barito Utara',
                'ibu_kota' => 'Muara Teweh',
                'k_bsni' => 'MTW',
            ),
            331 => 
            array (
                'id' => 332,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Gunung Mas',
                'ibu_kota' => 'Kuala Kurun',
                'k_bsni' => 'KKN',
            ),
            332 => 
            array (
                'id' => 333,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Kapuas',
                'ibu_kota' => 'Kuala Kapuas',
                'k_bsni' => 'KLK',
            ),
            333 => 
            array (
                'id' => 334,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Katingan',
                'ibu_kota' => 'Kasongan',
                'k_bsni' => 'KSN',
            ),
            334 => 
            array (
                'id' => 335,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Kotawaringin Barat',
                'ibu_kota' => 'Pangkalan Bun',
                'k_bsni' => 'PBU',
            ),
            335 => 
            array (
                'id' => 336,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Kotawaringin Timur',
                'ibu_kota' => 'Sampit',
                'k_bsni' => 'SPT',
            ),
            336 => 
            array (
                'id' => 337,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Lamandau',
                'ibu_kota' => 'Nanga Bulik',
                'k_bsni' => 'NGB',
            ),
            337 => 
            array (
                'id' => 338,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Murung Raya',
                'ibu_kota' => 'Puruk Cahu',
                'k_bsni' => 'PRC',
            ),
            338 => 
            array (
                'id' => 339,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Pulang Pisau',
                'ibu_kota' => 'Pulang Pisau',
                'k_bsni' => 'PPS',
            ),
            339 => 
            array (
                'id' => 340,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Seruyan',
                'ibu_kota' => 'Kuala Pembuang',
                'k_bsni' => 'KLP',
            ),
            340 => 
            array (
                'id' => 341,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kabupaten Sukamara',
                'ibu_kota' => 'Sukamara',
                'k_bsni' => 'SKR',
            ),
            341 => 
            array (
                'id' => 342,
                'provinsi_id' => '21',
                'kabupaten_kota' => 'Kota Palangka Raya',
                'ibu_kota' => 'Palangkaraya',
                'k_bsni' => 'PLK',
            ),
            342 => 
            array (
                'id' => 343,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Balangan',
                'ibu_kota' => 'Paringin',
                'k_bsni' => 'PRN',
            ),
            343 => 
            array (
                'id' => 344,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Banjar',
                'ibu_kota' => 'Martapura',
                'k_bsni' => 'MTP',
            ),
            344 => 
            array (
                'id' => 345,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Barito Kuala',
                'ibu_kota' => 'Marabahan',
                'k_bsni' => 'MRH',
            ),
            345 => 
            array (
                'id' => 346,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Hulu Sungai Selatan',
                'ibu_kota' => 'Kandangan',
                'k_bsni' => 'KGN',
            ),
            346 => 
            array (
                'id' => 347,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Hulu Sungai Tengah',
                'ibu_kota' => 'Barabai',
                'k_bsni' => 'BRB',
            ),
            347 => 
            array (
                'id' => 348,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Hulu Sungai Utara',
                'ibu_kota' => 'Amuntai',
                'k_bsni' => 'AMT',
            ),
            348 => 
            array (
                'id' => 349,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Kotabaru',
                'ibu_kota' => 'Kotabaru',
                'k_bsni' => 'KBR',
            ),
            349 => 
            array (
                'id' => 350,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Tabalong',
                'ibu_kota' => 'Tanjung',
                'k_bsni' => 'TJG',
            ),
            350 => 
            array (
                'id' => 351,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Tanah Bumbu',
                'ibu_kota' => 'Batulicin',
                'k_bsni' => 'BLN',
            ),
            351 => 
            array (
                'id' => 352,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Tanah Laut',
                'ibu_kota' => 'Pelaihari',
                'k_bsni' => 'PLI',
            ),
            352 => 
            array (
                'id' => 353,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kabupaten Tapin',
                'ibu_kota' => 'Rantau',
                'k_bsni' => 'RTA',
            ),
            353 => 
            array (
                'id' => 354,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kota Banjarbaru',
                'ibu_kota' => 'Banjarbaru',
                'k_bsni' => 'BJB',
            ),
            354 => 
            array (
                'id' => 355,
                'provinsi_id' => '22',
                'kabupaten_kota' => 'Kota Banjarmasin',
                'ibu_kota' => 'Banjarmasin',
                'k_bsni' => 'BJM',
            ),
            355 => 
            array (
                'id' => 356,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kabupaten Berau',
                'ibu_kota' => 'Tanjung Redeb',
                'k_bsni' => 'TNR',
            ),
            356 => 
            array (
                'id' => 357,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kabupaten Kutai Barat',
                'ibu_kota' => 'Sendawar',
                'k_bsni' => 'SDW',
            ),
            357 => 
            array (
                'id' => 358,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kabupaten Kutai Kartanegara',
                'ibu_kota' => 'Tenggarong',
                'k_bsni' => 'TRG',
            ),
            358 => 
            array (
                'id' => 359,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kabupaten Kutai Timur',
                'ibu_kota' => 'Sanggatta',
                'k_bsni' => 'SGT',
            ),
            359 => 
            array (
                'id' => 360,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kabupaten Mahakam Ulu',
                'ibu_kota' => 'Ujoh Bilang',
                'k_bsni' => 'UJB',
            ),
            360 => 
            array (
                'id' => 361,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kabupaten Paser',
                'ibu_kota' => 'Tanah Grogot',
                'k_bsni' => 'TGT',
            ),
            361 => 
            array (
                'id' => 362,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kabupaten Penajam Paser Utara',
                'ibu_kota' => 'Penajam',
                'k_bsni' => 'PNJ',
            ),
            362 => 
            array (
                'id' => 363,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kota Balikpapan',
                'ibu_kota' => 'Balikpapan',
                'k_bsni' => 'BPP',
            ),
            363 => 
            array (
                'id' => 364,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kota Bontang',
                'ibu_kota' => 'Bontang',
                'k_bsni' => 'BON',
            ),
            364 => 
            array (
                'id' => 365,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kota Samarinda',
                'ibu_kota' => 'Samarinda',
                'k_bsni' => 'SMR',
            ),
            365 => 
            array (
                'id' => 366,
                'provinsi_id' => '23',
            'kabupaten_kota' => 'Kabupaten Bulungan (Bulongan)',
                'ibu_kota' => 'Tanjung Selor',
                'k_bsni' => 'TJS',
            ),
            366 => 
            array (
                'id' => 367,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kabupaten Malinau',
                'ibu_kota' => 'Malinau',
                'k_bsni' => 'MLN',
            ),
            367 => 
            array (
                'id' => 368,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kabupaten Nunukan',
                'ibu_kota' => 'Nunukan',
                'k_bsni' => 'NNK',
            ),
            368 => 
            array (
                'id' => 369,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kabupaten Tana Tidung',
                'ibu_kota' => 'Tideng Pale',
                'k_bsni' => 'TDP',
            ),
            369 => 
            array (
                'id' => 370,
                'provinsi_id' => '23',
                'kabupaten_kota' => 'Kota Tarakan',
                'ibu_kota' => 'Tarakan',
                'k_bsni' => 'TAR',
            ),
            370 => 
            array (
                'id' => 371,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kabupaten Bolaang Mongondow',
                'ibu_kota' => 'Lolak',
                'k_bsni' => 'LLK',
            ),
            371 => 
            array (
                'id' => 372,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kabupaten Bolaang Mongondow Selatan',
                'ibu_kota' => 'Bolaang Uki',
                'k_bsni' => 'BLU',
            ),
            372 => 
            array (
                'id' => 373,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kabupaten Bolaang Mongondow Timur',
                'ibu_kota' => 'Tutuyan',
                'k_bsni' => 'TTY',
            ),
            373 => 
            array (
                'id' => 374,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kabupaten Bolaang Mongondow Utara',
                'ibu_kota' => 'Boroko',
                'k_bsni' => 'BRK',
            ),
            374 => 
            array (
                'id' => 375,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kabupaten Kepulauan Sangihe',
                'ibu_kota' => 'Tahuna',
                'k_bsni' => 'THN',
            ),
            375 => 
            array (
                'id' => 376,
                'provinsi_id' => '25',
            'kabupaten_kota' => 'Kabupaten Kepulauan Siau Tagulandang Biaro (Sitaro)',
                'ibu_kota' => 'Ondong Siau',
                'k_bsni' => 'ODS',
            ),
            376 => 
            array (
                'id' => 377,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kabupaten Kepulauan Talaud',
                'ibu_kota' => 'Melongguane',
                'k_bsni' => 'MGN',
            ),
            377 => 
            array (
                'id' => 378,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kabupaten Minahasa',
                'ibu_kota' => 'Tondano',
                'k_bsni' => 'TNN',
            ),
            378 => 
            array (
                'id' => 379,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kabupaten Minahasa Selatan',
                'ibu_kota' => 'Amurang',
                'k_bsni' => 'AMR',
            ),
            379 => 
            array (
                'id' => 380,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kabupaten Minahasa Tenggara',
                'ibu_kota' => 'Ratahan',
                'k_bsni' => 'RTN',
            ),
            380 => 
            array (
                'id' => 381,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kabupaten Minahasa Utara',
                'ibu_kota' => 'Air Madidi',
                'k_bsni' => 'ARM',
            ),
            381 => 
            array (
                'id' => 382,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kota Bitung',
                'ibu_kota' => 'Bitung',
                'k_bsni' => 'BIT',
            ),
            382 => 
            array (
                'id' => 383,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kota Kotamobagu',
                'ibu_kota' => 'Kotamobagu',
                'k_bsni' => 'KTG',
            ),
            383 => 
            array (
                'id' => 384,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kota Manado',
                'ibu_kota' => 'Manado',
                'k_bsni' => 'MND',
            ),
            384 => 
            array (
                'id' => 385,
                'provinsi_id' => '25',
                'kabupaten_kota' => 'Kota Tomohon',
                'ibu_kota' => 'Tomohon',
                'k_bsni' => 'TMH',
            ),
            385 => 
            array (
                'id' => 386,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Banggai',
                'ibu_kota' => 'Luwuk',
                'k_bsni' => 'LWK',
            ),
            386 => 
            array (
                'id' => 387,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Banggai Kepulauan',
                'ibu_kota' => 'Salakan',
                'k_bsni' => 'SKN',
            ),
            387 => 
            array (
                'id' => 388,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Banggai Laut',
                'ibu_kota' => 'Banggai',
                'k_bsni' => 'BGI',
            ),
            388 => 
            array (
                'id' => 389,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Buol',
                'ibu_kota' => 'Buol',
                'k_bsni' => 'BUL',
            ),
            389 => 
            array (
                'id' => 390,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Donggala',
                'ibu_kota' => 'Donggala',
                'k_bsni' => 'DGL',
            ),
            390 => 
            array (
                'id' => 391,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Morowali',
                'ibu_kota' => 'Bungku',
                'k_bsni' => 'BGK',
            ),
            391 => 
            array (
                'id' => 392,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Morowali Utara',
                'ibu_kota' => 'Kolonodale',
                'k_bsni' => 'KND',
            ),
            392 => 
            array (
                'id' => 393,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Parigi Moutong',
                'ibu_kota' => 'Parigi',
                'k_bsni' => 'PRG',
            ),
            393 => 
            array (
                'id' => 394,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Poso',
                'ibu_kota' => 'Poso',
                'k_bsni' => 'PSO',
            ),
            394 => 
            array (
                'id' => 395,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Sigi',
                'ibu_kota' => 'Sigi Biromaru',
                'k_bsni' => 'SGB',
            ),
            395 => 
            array (
                'id' => 396,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Tojo Una-Una',
                'ibu_kota' => 'Ampana',
                'k_bsni' => 'APN',
            ),
            396 => 
            array (
                'id' => 397,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kabupaten Toli-Toli',
                'ibu_kota' => 'Toli Toli',
                'k_bsni' => 'TLI',
            ),
            397 => 
            array (
                'id' => 398,
                'provinsi_id' => '26',
                'kabupaten_kota' => 'Kota Palu',
                'ibu_kota' => 'Palu',
                'k_bsni' => 'PAL',
            ),
            398 => 
            array (
                'id' => 399,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Bantaeng',
                'ibu_kota' => 'Bantaeng',
                'k_bsni' => 'BAN',
            ),
            399 => 
            array (
                'id' => 400,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Barru',
                'ibu_kota' => 'Barru',
                'k_bsni' => 'BAR',
            ),
            400 => 
            array (
                'id' => 401,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Bone',
                'ibu_kota' => 'Watampone',
                'k_bsni' => 'WTP',
            ),
            401 => 
            array (
                'id' => 402,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Bulukumba',
                'ibu_kota' => 'Bulukumba',
                'k_bsni' => 'BLK',
            ),
            402 => 
            array (
                'id' => 403,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Enrekang',
                'ibu_kota' => 'Enrekang',
                'k_bsni' => 'ENR',
            ),
            403 => 
            array (
                'id' => 404,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Gowa',
                'ibu_kota' => 'Sungguminasa',
                'k_bsni' => 'SGM',
            ),
            404 => 
            array (
                'id' => 405,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Jeneponto',
                'ibu_kota' => 'Jeneponto',
                'k_bsni' => 'JNP',
            ),
            405 => 
            array (
                'id' => 406,
                'provinsi_id' => '27',
            'kabupaten_kota' => 'Kabupaten Selayar (Kepulauan Selayar)',
                'ibu_kota' => 'Benteng',
                'k_bsni' => 'BEN',
            ),
            406 => 
            array (
                'id' => 407,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Luwu',
                'ibu_kota' => 'Palopo',
                'k_bsni' => 'PLP',
            ),
            407 => 
            array (
                'id' => 408,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Luwu Timur',
                'ibu_kota' => 'Malili',
                'k_bsni' => 'MLL',
            ),
            408 => 
            array (
                'id' => 409,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Luwu Utara',
                'ibu_kota' => 'Masamba',
                'k_bsni' => 'MSB',
            ),
            409 => 
            array (
                'id' => 410,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Maros',
                'ibu_kota' => 'Maros',
                'k_bsni' => 'MRS',
            ),
            410 => 
            array (
                'id' => 411,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Pangkajene Kepulauan',
                'ibu_kota' => 'Pangkajene',
                'k_bsni' => 'PKJ',
            ),
            411 => 
            array (
                'id' => 412,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Pinrang',
                'ibu_kota' => 'Pinrang',
                'k_bsni' => 'PIN',
            ),
            412 => 
            array (
                'id' => 413,
                'provinsi_id' => '27',
            'kabupaten_kota' => 'Kabupaten Sidenreng Rappang (Sidrap)',
                'ibu_kota' => 'Sidenreng',
                'k_bsni' => 'SDR',
            ),
            413 => 
            array (
                'id' => 414,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Sinjai',
                'ibu_kota' => 'Sinjai',
                'k_bsni' => 'SNJ',
            ),
            414 => 
            array (
                'id' => 415,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Soppeng',
                'ibu_kota' => 'Watan Soppeng',
                'k_bsni' => 'WNS',
            ),
            415 => 
            array (
                'id' => 416,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Takalar',
                'ibu_kota' => 'Takalar',
                'k_bsni' => 'TKA',
            ),
            416 => 
            array (
                'id' => 417,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Tana Toraja',
                'ibu_kota' => 'Makale',
                'k_bsni' => 'MAK',
            ),
            417 => 
            array (
                'id' => 418,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Toraja Utara',
                'ibu_kota' => 'Rantepao',
                'k_bsni' => 'RTP',
            ),
            418 => 
            array (
                'id' => 419,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kabupaten Wajo',
                'ibu_kota' => 'Sengkang',
                'k_bsni' => 'SKG',
            ),
            419 => 
            array (
                'id' => 420,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kota Makassar',
                'ibu_kota' => 'Makassar',
                'k_bsni' => 'MKS',
            ),
            420 => 
            array (
                'id' => 421,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kota Palopo',
                'ibu_kota' => 'Palopo',
                'k_bsni' => 'PLP',
            ),
            421 => 
            array (
                'id' => 422,
                'provinsi_id' => '27',
                'kabupaten_kota' => 'Kota Parepare',
                'ibu_kota' => 'Pare Pare',
                'k_bsni' => 'PRE',
            ),
            422 => 
            array (
                'id' => 423,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Bombana',
                'ibu_kota' => 'Rumbia',
                'k_bsni' => 'RMB',
            ),
            423 => 
            array (
                'id' => 424,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Buton',
                'ibu_kota' => 'Pasar Wajo',
                'k_bsni' => 'PSW',
            ),
            424 => 
            array (
                'id' => 425,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Buton Selatan',
                'ibu_kota' => 'Batauga',
                'k_bsni' => 'BAG',
            ),
            425 => 
            array (
                'id' => 426,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Buton Tengah',
                'ibu_kota' => 'Labungkari',
                'k_bsni' => 'LBK',
            ),
            426 => 
            array (
                'id' => 427,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Buton Utara',
                'ibu_kota' => 'Buranga',
                'k_bsni' => 'BNG',
            ),
            427 => 
            array (
                'id' => 428,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Kolaka',
                'ibu_kota' => 'Kolaka',
                'k_bsni' => 'KKA',
            ),
            428 => 
            array (
                'id' => 429,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Kolaka Timur',
                'ibu_kota' => 'Tirawuta',
                'k_bsni' => 'TRW',
            ),
            429 => 
            array (
                'id' => 430,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Kolaka Utara',
                'ibu_kota' => 'Lasusua',
                'k_bsni' => 'LSS',
            ),
            430 => 
            array (
                'id' => 431,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Konawe',
                'ibu_kota' => 'Unaaha',
                'k_bsni' => 'UNH',
            ),
            431 => 
            array (
                'id' => 432,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Konawe Kepulauan',
                'ibu_kota' => 'Langara',
                'k_bsni' => 'LGR',
            ),
            432 => 
            array (
                'id' => 433,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Konawe Selatan',
                'ibu_kota' => 'Andoolo',
                'k_bsni' => 'ADL',
            ),
            433 => 
            array (
                'id' => 434,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Konawe Utara',
                'ibu_kota' => 'Wanggudu',
                'k_bsni' => 'WGD',
            ),
            434 => 
            array (
                'id' => 435,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Muna',
                'ibu_kota' => 'Raha',
                'k_bsni' => 'RAH',
            ),
            435 => 
            array (
                'id' => 436,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Muna Barat',
                'ibu_kota' => 'Sawerigadi',
                'k_bsni' => 'SWG',
            ),
            436 => 
            array (
                'id' => 437,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kabupaten Wakatobi',
                'ibu_kota' => 'Wangi Wangi',
                'k_bsni' => 'WGW',
            ),
            437 => 
            array (
                'id' => 438,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kota Baubau',
                'ibu_kota' => 'Bau-Bau',
                'k_bsni' => 'BAU',
            ),
            438 => 
            array (
                'id' => 439,
                'provinsi_id' => '28',
                'kabupaten_kota' => 'Kota Kendari',
                'ibu_kota' => 'Kendari',
                'k_bsni' => 'KDI',
            ),
            439 => 
            array (
                'id' => 440,
                'provinsi_id' => '29',
                'kabupaten_kota' => 'Kabupaten Boalemo',
                'ibu_kota' => 'Tilamuta',
                'k_bsni' => 'TMT',
            ),
            440 => 
            array (
                'id' => 441,
                'provinsi_id' => '29',
                'kabupaten_kota' => 'Kabupaten Bone Bolango',
                'ibu_kota' => 'Suwawa',
                'k_bsni' => 'SWW',
            ),
            441 => 
            array (
                'id' => 442,
                'provinsi_id' => '29',
                'kabupaten_kota' => 'Kabupaten Gorontalo',
                'ibu_kota' => 'Limboto',
                'k_bsni' => 'LBT',
            ),
            442 => 
            array (
                'id' => 443,
                'provinsi_id' => '29',
                'kabupaten_kota' => 'Kabupaten Gorontalo Utara',
                'ibu_kota' => 'Kwandang',
                'k_bsni' => 'KWD',
            ),
            443 => 
            array (
                'id' => 444,
                'provinsi_id' => '29',
                'kabupaten_kota' => 'Kabupaten Pohuwato',
                'ibu_kota' => 'Marisa',
                'k_bsni' => 'MAR',
            ),
            444 => 
            array (
                'id' => 445,
                'provinsi_id' => '29',
                'kabupaten_kota' => 'Kota Gorontalo',
                'ibu_kota' => 'Gorontalo',
                'k_bsni' => 'GTO',
            ),
            445 => 
            array (
                'id' => 446,
                'provinsi_id' => '30',
                'kabupaten_kota' => 'Kabupaten Majene',
                'ibu_kota' => 'Majene',
                'k_bsni' => 'MJN',
            ),
            446 => 
            array (
                'id' => 447,
                'provinsi_id' => '30',
                'kabupaten_kota' => 'Kabupaten Mamasa',
                'ibu_kota' => 'Mamasa',
                'k_bsni' => 'MMS',
            ),
            447 => 
            array (
                'id' => 448,
                'provinsi_id' => '30',
                'kabupaten_kota' => 'Kabupaten Mamuju',
                'ibu_kota' => 'Mamuju',
                'k_bsni' => 'MAM',
            ),
            448 => 
            array (
                'id' => 449,
                'provinsi_id' => '30',
                'kabupaten_kota' => 'Kabupaten Mamuju Tengah',
                'ibu_kota' => 'Tobadak',
                'k_bsni' => 'TBD',
            ),
            449 => 
            array (
                'id' => 450,
                'provinsi_id' => '30',
                'kabupaten_kota' => 'Kabupaten Mamuju Utara',
                'ibu_kota' => 'Pasangkayu',
                'k_bsni' => 'PKY',
            ),
            450 => 
            array (
                'id' => 451,
                'provinsi_id' => '30',
                'kabupaten_kota' => 'Kabupaten Polewali Mandar',
                'ibu_kota' => 'Polewali',
                'k_bsni' => 'PLW',
            ),
            451 => 
            array (
                'id' => 452,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kabupaten Buru',
                'ibu_kota' => 'Namlea',
                'k_bsni' => 'NLA',
            ),
            452 => 
            array (
                'id' => 453,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kabupaten Buru Selatan',
                'ibu_kota' => 'Namrole',
                'k_bsni' => 'NMR',
            ),
            453 => 
            array (
                'id' => 454,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kabupaten Kepulauan Aru',
                'ibu_kota' => 'Dobo',
                'k_bsni' => 'DOB',
            ),
            454 => 
            array (
                'id' => 455,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kabupaten Maluku Barat Daya',
                'ibu_kota' => 'Tiakur',
                'k_bsni' => 'TKR',
            ),
            455 => 
            array (
                'id' => 456,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kabupaten Maluku Tengah',
                'ibu_kota' => 'Masohi',
                'k_bsni' => 'MSH',
            ),
            456 => 
            array (
                'id' => 457,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kabupaten Maluku Tenggara',
                'ibu_kota' => 'Tual',
                'k_bsni' => 'TUL',
            ),
            457 => 
            array (
                'id' => 458,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kabupaten Maluku Tenggara Barat',
                'ibu_kota' => 'Saumlaki',
                'k_bsni' => 'SML',
            ),
            458 => 
            array (
                'id' => 459,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kabupaten Seram Bagian Barat',
                'ibu_kota' => 'Dataran Hunipopu',
                'k_bsni' => 'DRH',
            ),
            459 => 
            array (
                'id' => 460,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kabupaten Seram Bagian Timur',
                'ibu_kota' => 'Dataran Hunimoa',
                'k_bsni' => 'DTH',
            ),
            460 => 
            array (
                'id' => 461,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kota Ambon',
                'ibu_kota' => 'Ambon',
                'k_bsni' => 'AMB',
            ),
            461 => 
            array (
                'id' => 462,
                'provinsi_id' => '31',
                'kabupaten_kota' => 'Kota Tual',
                'ibu_kota' => 'Tual',
                'k_bsni' => 'TUL',
            ),
            462 => 
            array (
                'id' => 463,
                'provinsi_id' => '32',
                'kabupaten_kota' => 'Kabupaten Halmahera Barat',
                'ibu_kota' => 'Jailolo',
                'k_bsni' => 'JLL',
            ),
            463 => 
            array (
                'id' => 464,
                'provinsi_id' => '32',
                'kabupaten_kota' => 'Kabupaten Halmahera Selatan',
                'ibu_kota' => 'Labuha',
                'k_bsni' => 'LBA',
            ),
            464 => 
            array (
                'id' => 465,
                'provinsi_id' => '32',
                'kabupaten_kota' => 'Kabupaten Halmahera Tengah',
                'ibu_kota' => 'Weda',
                'k_bsni' => 'WED',
            ),
            465 => 
            array (
                'id' => 466,
                'provinsi_id' => '32',
                'kabupaten_kota' => 'Kabupaten Halmahera Timur',
                'ibu_kota' => 'Maba',
                'k_bsni' => 'MAB',
            ),
            466 => 
            array (
                'id' => 467,
                'provinsi_id' => '32',
                'kabupaten_kota' => 'Kabupaten Halmahera Utara',
                'ibu_kota' => 'Tobelo',
                'k_bsni' => 'TOB',
            ),
            467 => 
            array (
                'id' => 468,
                'provinsi_id' => '32',
                'kabupaten_kota' => 'Kabupaten Kepulauan Sula',
                'ibu_kota' => 'Sanana',
                'k_bsni' => 'SNN',
            ),
            468 => 
            array (
                'id' => 469,
                'provinsi_id' => '32',
                'kabupaten_kota' => 'Kabupaten Pulau Morotai',
                'ibu_kota' => 'Daruba',
                'k_bsni' => 'DRB',
            ),
            469 => 
            array (
                'id' => 470,
                'provinsi_id' => '32',
                'kabupaten_kota' => 'Kabupaten Pulau Taliabu',
                'ibu_kota' => 'Bobong',
                'k_bsni' => 'BOB',
            ),
            470 => 
            array (
                'id' => 471,
                'provinsi_id' => '32',
                'kabupaten_kota' => 'Kota Ternate',
                'ibu_kota' => 'Ternate',
                'k_bsni' => 'TTE',
            ),
            471 => 
            array (
                'id' => 472,
                'provinsi_id' => '32',
                'kabupaten_kota' => 'Kota Tidore Kepulauan',
                'ibu_kota' => 'Tidore',
                'k_bsni' => 'TDR',
            ),
            472 => 
            array (
                'id' => 473,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Asmat',
                'ibu_kota' => 'Agats',
                'k_bsni' => 'AGT',
            ),
            473 => 
            array (
                'id' => 474,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Biak Numfor',
                'ibu_kota' => 'Biak',
                'k_bsni' => 'BIK',
            ),
            474 => 
            array (
                'id' => 475,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Boven Digoel',
                'ibu_kota' => 'Tanah Merah',
                'k_bsni' => 'TMR',
            ),
            475 => 
            array (
                'id' => 476,
                'provinsi_id' => '33',
            'kabupaten_kota' => 'Kabupaten Deiyai (Deliyai)',
                'ibu_kota' => 'Tigi',
                'k_bsni' => 'TIG',
            ),
            476 => 
            array (
                'id' => 477,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Dogiyai',
                'ibu_kota' => 'Kigamani',
                'k_bsni' => 'KGM',
            ),
            477 => 
            array (
                'id' => 478,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Intan Jaya',
                'ibu_kota' => 'Sugapa',
                'k_bsni' => 'SGP',
            ),
            478 => 
            array (
                'id' => 479,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Jayapura',
                'ibu_kota' => 'Jayapura',
                'k_bsni' => 'JAP',
            ),
            479 => 
            array (
                'id' => 480,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Jayawijaya',
                'ibu_kota' => 'Wamena',
                'k_bsni' => 'WAM',
            ),
            480 => 
            array (
                'id' => 481,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Keerom',
                'ibu_kota' => 'Waris',
                'k_bsni' => 'WRS',
            ),
            481 => 
            array (
                'id' => 482,
                'provinsi_id' => '33',
            'kabupaten_kota' => 'Kabupaten Kepulauan Yapen (Yapen Waropen)',
                'ibu_kota' => 'Serui',
                'k_bsni' => 'SRU',
            ),
            482 => 
            array (
                'id' => 483,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Lanny Jaya',
                'ibu_kota' => 'Tiom',
                'k_bsni' => 'TOM',
            ),
            483 => 
            array (
                'id' => 484,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Mamberamo Raya',
                'ibu_kota' => 'Burmeso',
                'k_bsni' => 'BRM',
            ),
            484 => 
            array (
                'id' => 485,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Mamberamo Tengah',
                'ibu_kota' => 'Kobakma',
                'k_bsni' => 'KBK',
            ),
            485 => 
            array (
                'id' => 486,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Mappi',
                'ibu_kota' => 'Kepi',
                'k_bsni' => 'KEP',
            ),
            486 => 
            array (
                'id' => 487,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Merauke',
                'ibu_kota' => 'Merauke',
                'k_bsni' => 'MRK',
            ),
            487 => 
            array (
                'id' => 488,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Mimika',
                'ibu_kota' => 'Timika',
                'k_bsni' => 'TIM',
            ),
            488 => 
            array (
                'id' => 489,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Nabire',
                'ibu_kota' => 'Nabire',
                'k_bsni' => 'NAB',
            ),
            489 => 
            array (
                'id' => 490,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Nduga',
                'ibu_kota' => 'Kenyam',
                'k_bsni' => 'KYM',
            ),
            490 => 
            array (
                'id' => 491,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Paniai',
                'ibu_kota' => 'Enarotali',
                'k_bsni' => 'ERT',
            ),
            491 => 
            array (
                'id' => 492,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Pegunungan Bintang',
                'ibu_kota' => 'Oksibil',
                'k_bsni' => 'OSB',
            ),
            492 => 
            array (
                'id' => 493,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Puncak',
                'ibu_kota' => 'Ilaga',
                'k_bsni' => 'ILG',
            ),
            493 => 
            array (
                'id' => 494,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Puncak Jaya',
                'ibu_kota' => 'Mulia',
                'k_bsni' => 'MUL',
            ),
            494 => 
            array (
                'id' => 495,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Sarmi',
                'ibu_kota' => 'Sarmi',
                'k_bsni' => 'SMI',
            ),
            495 => 
            array (
                'id' => 496,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Supiori',
                'ibu_kota' => 'Sorendiweri',
                'k_bsni' => 'SRW',
            ),
            496 => 
            array (
                'id' => 497,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Tolikara',
                'ibu_kota' => 'Karubaga',
                'k_bsni' => 'KBG',
            ),
            497 => 
            array (
                'id' => 498,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Waropen',
                'ibu_kota' => 'Botawa',
                'k_bsni' => 'BTW',
            ),
            498 => 
            array (
                'id' => 499,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Yahukimo',
                'ibu_kota' => 'Sumohai',
                'k_bsni' => 'SMH',
            ),
            499 => 
            array (
                'id' => 500,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kabupaten Yalimo',
                'ibu_kota' => 'Elelim',
                'k_bsni' => 'ELL',
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'provinsi_id' => '33',
                'kabupaten_kota' => 'Kota Jayapura',
                'ibu_kota' => 'Jayapura',
                'k_bsni' => 'JAP',
            ),
            1 => 
            array (
                'id' => 502,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Fakfak',
                'ibu_kota' => 'Fak Fak',
                'k_bsni' => 'FFK',
            ),
            2 => 
            array (
                'id' => 503,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Kaimana',
                'ibu_kota' => 'Kaimana',
                'k_bsni' => 'KMN',
            ),
            3 => 
            array (
                'id' => 504,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Manokwari',
                'ibu_kota' => 'Manokwari',
                'k_bsni' => 'MNK',
            ),
            4 => 
            array (
                'id' => 505,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Manokwari Selatan',
                'ibu_kota' => 'Ransiki',
                'k_bsni' => 'RNK',
            ),
            5 => 
            array (
                'id' => 506,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Maybrat',
                'ibu_kota' => 'Aifat',
                'k_bsni' => 'AFT',
            ),
            6 => 
            array (
                'id' => 507,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Pegunungan Arfak',
                'ibu_kota' => 'Anggi',
                'k_bsni' => 'ANG',
            ),
            7 => 
            array (
                'id' => 508,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Raja Ampat',
                'ibu_kota' => 'Waisai',
                'k_bsni' => 'WAS',
            ),
            8 => 
            array (
                'id' => 509,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Sorong',
                'ibu_kota' => 'Aimas',
                'k_bsni' => 'AMS',
            ),
            9 => 
            array (
                'id' => 510,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Sorong Selatan',
                'ibu_kota' => 'Teminabuan',
                'k_bsni' => 'TMB',
            ),
            10 => 
            array (
                'id' => 511,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Tambrauw',
                'ibu_kota' => 'Fef',
                'k_bsni' => 'FEF',
            ),
            11 => 
            array (
                'id' => 512,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Teluk Bintuni',
                'ibu_kota' => 'Bintuni',
                'k_bsni' => 'BTI',
            ),
            12 => 
            array (
                'id' => 513,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kabupaten Teluk Wondama',
                'ibu_kota' => 'Rasiei',
                'k_bsni' => 'RAS',
            ),
            13 => 
            array (
                'id' => 514,
                'provinsi_id' => '34',
                'kabupaten_kota' => 'Kota Sorong',
                'ibu_kota' => 'Sorong',
                'k_bsni' => 'SON',
            ),
        ));
        
        
    }
}