<?php

use Illuminate\Database\Seeder;

class TaxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taxes')->delete();
        
        \DB::table('taxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'PPH Pasal 4 Ayat 2',
            'description' => 'PPh Pasal 4 Ayat (2) adalah pajak yang dipotong dari penghasilan dengan perlakuan tersendiri yang diatur melalui peraturan pemerintah dan bersifat final. Pemotongan PPh Final Pasal 4 Ayat (2) dilkukan oleh pihak pemberi penghasilan sehubungan dengan pembayaran untuk objek tertentu seperti sewa tanah dan/atau bangunan, jasa konstruksi, pengalihan ha katas tanah dan/atau bangunan dan lainnya. Yang dimaksud final disini bahwa pajak yang dipotong, dipungut oleh pihak pemberi penghasilan atau dibayar sendiri oleh pihak penerima penghasilan, penghitungan pajaknya sudah selesai dan tidak dapat dikreditkan lagi dalam penghitungan PPh pada SPT Tahunan.',
                'tax_type' => 'Pajak Pusat',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'PPH Pasal 15',
                'description' => 'Pasal 15 Undang-Undang Pajak Penghasilan menyebutkan tentang penetapan Norma Penghitungan Khusus guna menghitung penghasilan neto bagi Wajib Pajak tertentu yang tidak dapat dihitung dengan ketentuan umum sebagaimana diatur dalam Pasal 16 UU PPh.',
                'tax_type' => 'Pajak Pusat',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'PPH Pasal 21',
            'description' => 'PPh Pasal 21 adalah pajak yang dipotong dari penghasilan sehubungan dengan pekerjaan, jasa, dan kegiatan yang dilakukan oleh Wajib Pajak (WP) orang pribadi dalam negeri, yaitu penghasilan berupa gaji, upah, honorarium, tunjangan, serta pembayaran lain dengan nama dan dalam bentuk apapun. Apabila penghasilan tersebut yang menerima adalah Wajib Pajak luar negeri maka diatur dalam Pasal 26 UU PPh yang selanjutnya disebut PPh Pasal 26.',
                'tax_type' => 'Pajak Pusat',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'PPH Pasal 22',
                'description' => 'PPh Pasal 22 merupakan pajak yang dipungut oleh bendaharawan pemerintah, baik Pemerintah Pusat maupun Pemerintah Daerah; instansi atau Lembaga pemerintah dan Lembaga-lembaga negara lain yang berkenaan dengan pembayaran atas penyerahan barang; dan badan-badan tertentu, baik badan pemerintah maupun swasta, berkenaan dengan kegiatan di bidang impor atau kegiatan usaha di bidang lain.
PPh Pasal 22 dibayar dalam tahun berjalan melalui pemotongan atau pemungutan oleh pihak-pihak tertentu. Selanjutnya, pemotong/pemungut akan menyetor dan melaporkan pajak yang telah dipotong/dipungut.',
                'tax_type' => 'Pajak Pusat',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'PPH Pasal 23',
            'description' => 'PPh Pasal 23 merupakan yang dipotong atas penghasilan yang diterima atau diperoleh Wajib Pajak dalam negeri (orang pribadi dan badan) dan bentuk usaha tetap yang berasal dari modal, penyerahan jasa, atau penyelenggaraan kegiatan selain yang telah dipotong PPh Pasal 21. PPh Pasal 23 ini dibayar atau terutang oleh badan pemerintah atau subjek pajak dalam negeri, penyelenggaraan kegiatan, bentuk usaha tetap, atau perwakilan perusahaan luar negeri lainnya.',
                'tax_type' => 'Pajak Pusat',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'PPh Pasal 25',
                'description' => 'PPh Pasal 25 merupakan angsuran PPh yang harus dibayar sendiri oleh Wajib Pajak untuk setiap bulan dalam tahun pajak berjalan sebagaimana dimaksud dalam Pasal 25 UU No. 7 Tahun 1983 sebagaimana telah diubah terakhir dengan UU No. 36 Tahun 2008 tentang Pajak Penghasilan. Pembayaran angsuran setiap bulan itu sendiri dimaksudkan untuk meringankan beban Wajib Pajak dalam membayar pajak terutang.
Angsuran PPh Pasal 25 tersebut dapat dijadikan kredit pajak terhadap pajak yang terutang atas seluruh penghasilan Wajib Pajak pada akhir tahun pajak yang dilaporkan dalam Surat Pemberitahuan Tahunan Pajak Penghasilan (SPT Tahunan PPh).',
                'tax_type' => 'Pajak Pusat',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'PPH Pasal 26',
            'description' => 'Tarif yang dikenakan adalah 20% untuk setiap jenis penghasilan yang dikenakan PPh Pasal 26 atau sesuai dengan persetujuan penghindaran pajak berganda (P3B) antarnegara atau tax treaty.',
                'tax_type' => 'Pajak Pusat',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'PPN',
            'description' => 'Berdasarkan Undang-Undang RI No. 42 Tahun 2009 tentang Perubahan Ketiga atas Undang-Undang No. 8 Tahun 1983 tentang Pajak Pertambahan Nilai Barang dan Jasa dan Pajak Penjualan atas Barang Mewah, bahwa Pajak Pertambahan Nilai (PPN) adalah pajak atas konsumsi barang dan jasa di daerah pabean yang dikenakan secara bertingkat di setiap jalur produksi dan distribusi.',
                'tax_type' => 'Pajak Pusat',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'PPnBM',
            'description' => 'PPnBM menurut UU nomor 42 tahun 2009 Pasal 5 adalah pajak yang dikenakan pada barang yang tergolong mewah yang dilakukan oleh produsen (pengusaha) untuk menghasilkan atau mengimpor dalam kegiatan usaha atau pekerjaannya.',
                'tax_type' => 'Pajak Pusat',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Bea Materai',
                'description' => 'Bea meterai adalah pajak yang dikenakan atas dokumen yang menurut Undang-Undang Bea Meterai menjadi objek Bea Meterai. Dokumen yang dikenai bea meterai antara lain adalah dokumen yang berbentuk surat yang memuat jumlah uang, dokumen yang bersifat perdata, dan dokumen yang dapat digunakan di muka pengadilan misalnya dokumen kontrak pengadaan meja kursi kantor, dokumen perjanjian pembangunan gedung kantor dengan pengusaha jasa konstruksi, dan dokumen kontrak pengadaan jasa tenaga kebersihan.',
                'tax_type' => 'Pajak Pusat',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'PPB',
            'description' => 'Pajak Bumi dan Bangunan (PBB) adalah pajak Negara yang dikenakan terhadap bumi dan/atau bangunan berdasarkan Undang-Undang No. 12 Tahun 1985 tentang Bumi dan Bangunan sebagaimana telah diubah terakhir dengan Undang-Undang No. 12 Tahun 1994. “PBB adalah pajak kebendaan atas bumi dan/atau bangunan yang dikenakan terhadap orang atau badan yang secara nyata mempunyai suatu hak atas bumi, dan/atau memperoleh manfaat atas bumi, dan/atau memiliki, menguasai, dan/atau memperoleh manfaat atas bangunan. PBB termasuk dalam pengertian pajak objektif, artinya besarnya pajak terutang ditentukan oleh keadaan objek pajak, yaitu tanah dan/atau bangunan, sedangkan keadaan subjek pajaknya tidak menentukan besarnya pajak”.',
                'tax_type' => 'Pajak Daerah',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Pajak Provinsi',
                'description' => 'Salah satu pajak yang dikelola oleh Pemerintah Daerah adalah Pajak Provinsi. Pendapatan Pajak Provinsi berlaku untuk Pajak Kendaraan Bermotor, Pajak Air Permukaan, Pajak Bahan Bakar Kendaraan Bermotor, Pajak Rokok, dan Bea Balik Nama Kendaraan Bermotor. Semua jenis pajak itu dikelola oleh Pemerintah Provinsi.',
                'tax_type' => 'Pajak Daerah',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Pajak Kabupaten',
                'description' => 'Salah satu pajak yang dikelola oleh Pemerintah Kabupaten dan Kota. Ada beberapa jenis pajak seperti Pajak Reklame, Pajak Parkir, Pajak Hiburan, Pajak Hotel dan Restoran, Pajak Penerangan Jalan, Pajak Air Tanah, Bea Perolahan Hak atas Tanah dan Bangunan, Pajak Sarang Burung Walet, dan Pajak Bumi dan Bangunan.',
                'tax_type' => 'Pajak Daerah',
                'module' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}