<?php

use Illuminate\Database\Seeder;

class UsersBeonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_beons = array(
            array(
                'id' => 1,
                'fk_users' => 0,
                'fk_beons_published' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 2,
                'fk_users' => 0,
                'fk_beons_published' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 3,
                'fk_users' => 0,
                'fk_beons_published' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 4,
                'fk_users' => 1,
                'fk_beons_published' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 5,
                'fk_users' => 1,
                'fk_beons_published' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 6,
                'fk_users' => 1,
                'fk_beons_published' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 7,
                'fk_users' => 2,
                'fk_beons_published' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 8,
                'fk_users' => 2,
                'fk_beons_published' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 9,
                'fk_users' => 2,
                'fk_beons_published' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('users_beons')->insert($users_beons);
    }
}
