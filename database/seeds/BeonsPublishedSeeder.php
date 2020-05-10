<?php

use Illuminate\Database\Seeder;

class BeonsPublishedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beons_published = array(
            array(
                'id' => 1,
                'fk_users' => 0,
                'name' => 'Bienvenido a Beon',
                'filename' => 'bienvenido_a_beon.phtml',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 2,
                'fk_users' => 0,
                'name' => '2013 Lucas',
                'filename' => '2013_lucas.phtml',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 3,
                'fk_users' => 0,
                'name' => 'El Cilindro',
                'filename' => 'el_cilindro.phtml',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('beons_published')->insert($beons_published);
    }
}
