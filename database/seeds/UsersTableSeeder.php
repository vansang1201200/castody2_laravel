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
                'id' => 1,
                'name' => 'sáng',
                'email' => 'sang123@gamil.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/ofLX1x2fFtQTMa30ZCSNeC30UHJ5HPR5DfZb.TMY7VElYj2xxPsi',
                'remember_token' => NULL,
                'created_at' => '2020-04-22 08:47:22',
                'updated_at' => '2020-04-22 08:47:22',
            ),
        ));


    }
}
