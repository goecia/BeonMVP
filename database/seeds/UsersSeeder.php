<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array(
                'id' => 1,
                'name' => 'Equipo Beonwords',
                'email' => 'beonwords@gmail.com',
                'password' => Hash::make('beonbeon'),
                'admin' => 1,
                'avatar' => 'default.jpg',
                'verified' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 2,
                'name' => 'Me Charcos',
                'email' => 'mecharcos@gmail.com',
                'password' => Hash::make('mecharcos'),
                'admin' => 0,
                'avatar' => 'default.jpg',
                'verified' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('users')->insert($users);
    }
}
