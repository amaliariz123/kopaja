<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '079568a8605c4696964ba8f779942783',
                'fullname' => 'ringo',
                'email' => 'ringo@yahoo.com',
                'password' => '$2y$10$Lx3ZNLgYULgiba17zGr5TO5o466uHJ3ImoQS3nSEzf4i.Is/9heKK',
                'email_verified_at' => NULL,
                'profile_picture' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-06-01 19:28:10',
                'updated_at' => '2020-06-01 19:28:10',
            ),
            1 => 
            array (
                'id' => '297f5b8b3a9d4feba30dc4d47d2fce09',
                'fullname' => 'lorem',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$qVIVAnC80ku38BSONTGGK.XB0KgZL0XhtjiakvdGdzKB/on1QZOee',
                'email_verified_at' => NULL,
                'profile_picture' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-05-16 18:36:59',
                'updated_at' => '2020-05-29 21:33:37',
            ),
            2 => 
            array (
                'id' => '46a3929b69824645a8d58ba5a731e5f1',
                'fullname' => 'lama',
                'email' => 'amalia.04.xih@gmail.com',
                'password' => '$2y$10$3fpduLZm73KegbQIQf8BMe500.9bTvGsHaA894c6/AKVElSVjdN5W',
                'email_verified_at' => '2020-06-01 19:31:28',
                'profile_picture' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-06-01 19:29:00',
                'updated_at' => '2020-06-01 19:31:28',
            ),
            3 => 
            array (
                'id' => '87cefc2a65f94d8083cba3579ec408a2',
                'fullname' => 'paul mccartney',
                'email' => 'paul@gmail.com',
                'password' => '$2y$10$cJpHU91Ff0T7qtUNnCFUp.ci7Yabk4olPdU/Z856GdnoEiMkMV/l.',
                'email_verified_at' => NULL,
                'profile_picture' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-06-01 19:12:31',
                'updated_at' => '2020-06-01 19:12:31',
            ),
            4 => 
            array (
                'id' => 'b125bd16f63a4f6b96be8ff1725e8ee2',
                'fullname' => 'john lennon',
                'email' => 'john@gmail.com',
                'password' => '$2y$10$0NTMKNn9IQAC7Z3XSGPiNe4FPe1Y7Z0DIjt/2ERoywWPdcRyrQk9i',
                'email_verified_at' => NULL,
                'profile_picture' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-06-01 19:13:49',
                'updated_at' => '2020-06-01 19:13:49',
            ),
        ));
        
        
    }
}