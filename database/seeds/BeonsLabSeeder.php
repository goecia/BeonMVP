<?php

use Illuminate\Database\Seeder;

class BeonsLabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beons_lab = array(
            array(
                'id' => 1,
                'fk_users' => 0,
                'name' => 'El Cilindro',
                'filename' => 'el_cilindro.txt',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 2,
                'fk_users' => 1,
                'name' => 'El Cilindro',
                'filename' => 'el_cilindro.txt',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 3,
                'fk_users' => 2,
                'name' => 'El Cilindro',
                'filename' => 'el_cilindro.txt',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('beons_lab')->insert($beons_lab);
    }
}
