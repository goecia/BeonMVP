<?php

use Illuminate\Database\Seeder;

class BlogEntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog_entries = array(
            array(
                'id' => null,
                'fk_users' => 1,
                'title' => 'Bienvenido al universo Beon',
                'entry' => 'Te invitamos a sumergirte en una experiencia única que recién está naciendo. Cada día encontramos nuevas mejoras y las implementamos para lograr una experiencia inigualable.<br />

De aquí en adelante no sólo se irá perfeccionando la plataforma sino que también habrá nuevos beones para disfrutar. Esto recién comienza y nos gustaría que recorramos el camino juntos.<br />

No te guardes el secreto, ayudanos a esparcirlo.<br />

Cualquier consulta o sugerencia podés mandarla a beonwords@gmail.com<br /><br />

Tal como lo prometimos:<br />
<a href="/cilindro">El Cilindro</a>',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('blog_entries')->insert($blog_entries);
    }
}
