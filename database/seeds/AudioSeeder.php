<?php

use Illuminate\Database\Seeder;

class AudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $audio = array(
            array(
                'id' => 1,
                'fk_users' => 0,
                'name' => 'AmbienteCaverna_01',
                'filename' => 'AmbienteCaverna_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 2,
                'fk_users' => 0,
                'name' => 'AmbienteIntro_01',
                'filename' => 'AmbienteIntro_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 3,
                'fk_users' => 0,
                'name' => 'AmbienteRotacion_01',
                'filename' => 'AmbienteRotacion_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 4,
                'fk_users' => 0,
                'name' => 'AmbienteSilencio_01',
                'filename' => 'AmbienteSilencio_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 5,
                'fk_users' => 0,
                'name' => '1stFall_01',
                'filename' => '1stFall_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 6,
                'fk_users' => 0,
                'name' => 'AlmostDown_01',
                'filename' => 'AlmostDown_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 7,
                'fk_users' => 0,
                'name' => 'Aplausos_01',
                'filename' => 'Aplausos_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 8,
                'fk_users' => 0,
                'name' => 'DavidCrying_01',
                'filename' => 'DavidCrying_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 9,
                'fk_users' => 0,
                'name' => 'DavidScreams_01',
                'filename' => 'DavidScreams_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 10,
                'fk_users' => 0,
                'name' => 'Falling2ground_01',
                'filename' => 'Falling2ground_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 11,
                'fk_users' => 0,
                'name' => 'FinalFall_01',
                'filename' => 'FinalFall_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 12,
                'fk_users' => 0,
                'name' => 'Music_01',
                'filename' => 'Music_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 13,
                'fk_users' => 0,
                'name' => 'Music_Epica_01',
                'filename' => 'Music_Epica_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 14,
                'fk_users' => 0,
                'name' => 'Music_Epica_02',
                'filename' => 'Music_Epica_02.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 15,
                'fk_users' => 0,
                'name' => 'Music_Tension_01',
                'filename' => 'Music_Tension_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 16,
                'fk_users' => 0,
                'name' => 'Music_Tension_02',
                'filename' => 'Music_Tension_02.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 17,
                'fk_users' => 0,
                'name' => 'ambiente_bar_01',
                'filename' => 'ambiente_bar_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 18,
                'fk_users' => 0,
                'name' => 'ambiente__lluvia_suave_01',
                'filename' => 'ambiente__lluvia_suave_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 19,
                'fk_users' => 0,
                'name' => 'ambiente_auto_01',
                'filename' => 'ambiente_auto_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 20,
                'fk_users' => 0,
                'name' => 'ambiente_auto_lluvia_01',
                'filename' => 'ambiente_auto_lluvia_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 21,
                'fk_users' => 0,
                'name' => 'ambiente_partido_radio_01',
                'filename' => 'ambiente_partido_radio_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 22,
                'fk_users' => 0,
                'name' => 'ambiente_lluvia_01',
                'filename' => 'ambiente_lluvia_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 23,
                'fk_users' => 0,
                'name' => 'ambiente_auto_veloz_01',
                'filename' => 'ambiente_auto_veloz_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 24,
                'fk_users' => 0,
                'name' => 'silla_mov_01_01',
                'filename' => 'silla_mov_01_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 25,
                'fk_users' => 0,
                'name' => 'silla_mov_02_01',
                'filename' => 'silla_mov_02_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 26,
                'fk_users' => 0,
                'name' => 'transicion_01',
                'filename' => 'transicion_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 27,
                'fk_users' => 0,
                'name' => 'trueno_01',
                'filename' => 'trueno_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 28,
                'fk_users' => 0,
                'name' => 'limpiaparabrisas_01',
                'filename' => 'limpiaparabrisas_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 29,
                'fk_users' => 0,
                'name' => 'switch_radio_01',
                'filename' => 'switch_radio_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 30,
                'fk_users' => 0,
                'name' => 'chirrido_ruedas_01',
                'filename' => 'chirrido_ruedas_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 31,
                'fk_users' => 0,
                'name' => 'pajaro_01',
                'filename' => 'pajaro_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 32,
                'fk_users' => 0,
                'name' => 'futbol_duo_01',
                'filename' => 'futbol_duo_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 33,
                'fk_users' => 0,
                'name' => 'cerrarpuertaauto_01',
                'filename' => 'cerrarpuertaauto_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 34,
                'fk_users' => 0,
                'name' => 'llaves_no_entran_01',
                'filename' => 'llaves_no_entran_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 35,
                'fk_users' => 0,
                'name' => 'cerrarpuertacasa_01',
                'filename' => 'cerrarpuertacasa_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 36,
                'fk_users' => 0,
                'name' => 'pasosmojados_01',
                'filename' => 'pasosmojados_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 37,
                'fk_users' => 0,
                'name' => 'abrir_puerta_cuarto_01',
                'filename' => 'abrir_puerta_cuarto_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 38,
                'fk_users' => 0,
                'name' => 'gotas_cuarto_01',
                'filename' => 'gotas_cuarto_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 39,
                'fk_users' => 0,
                'name' => 'musica_preocupacion_01',
                'filename' => 'musica_preocupacion_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 40,
                'fk_users' => 0,
                'name' => 'musica_preocupacion_b_01',
                'filename' => 'musica_preocupacion_b_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 41,
                'fk_users' => 0,
                'name' => 'musica_clasica_01',
                'filename' => 'musica_clasica_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 42,
                'fk_users' => 0,
                'name' => 'musica_tv_lejos_01',
                'filename' => 'musica_tv_lejos_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 43,
                'fk_users' => 0,
                'name' => 'musica_tv_cerca_01',
                'filename' => 'musica_tv_cerca_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 44,
                'fk_users' => 0,
                'name' => 'musica_tension_tutorial_01',
                'filename' => 'musica_tension_tutorial_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 45,
                'fk_users' => 0,
                'name' => 'musica_comedia_01',
                'filename' => 'musica_comedia_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 46,
                'fk_users' => 0,
                'name' => 'ambiente_fabrica_01',
                'filename' => 'ambiente_fabrica_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 47,
                'fk_users' => 0,
                'name' => 'ambiente_bus_01',
                'filename' => 'ambiente_bus_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 48,
                'fk_users' => 0,
                'name' => 'ambiente_bus_02',
                'filename' => 'ambiente_bus_02.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 49,
                'fk_users' => 0,
                'name' => 'ambiente_bus_exterior_01',
                'filename' => 'ambiente_bus_exterior_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 50,
                'fk_users' => 0,
                'name' => 'ambiente_viento_01',
                'filename' => 'ambiente_viento_01.mp4',
                'type' => 'ambient',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 51,
                'fk_users' => 0,
                'name' => 'wistle_fabrica_01',
                'filename' => 'wistle_fabrica_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 52,
                'fk_users' => 0,
                'name' => 'perro_ladrando_01',
                'filename' => 'perro_ladrando_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 53,
                'fk_users' => 0,
                'name' => 'llegada_bus_01',
                'filename' => 'llegada_bus_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 54,
                'fk_users' => 0,
                'name' => 'golpe_bache_01',
                'filename' => 'golpe_bache_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 55,
                'fk_users' => 0,
                'name' => 'timbre_01',
                'filename' => 'timbre_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 56,
                'fk_users' => 0,
                'name' => 'chirrido_ruedas_01',
                'filename' => 'chirrido_ruedas_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 57,
                'fk_users' => 0,
                'name' => 'golpe_01',
                'filename' => 'golpe_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 58,
                'fk_users' => 0,
                'name' => 'slowmotion_01',
                'filename' => 'slowmotion_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 59,
                'fk_users' => 0,
                'name' => 'nota_suspenso_01',
                'filename' => 'nota_suspenso_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 60,
                'fk_users' => 0,
                'name' => 'vidrio_roto_01',
                'filename' => 'vidrio_roto_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 61,
                'fk_users' => 0,
                'name' => 'rodando_asfalto_01',
                'filename' => 'rodando_asfalto_01.mp4',
                'type' => 'fx',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 62,
                'fk_users' => 0,
                'name' => 'musica_intro_lucas',
                'filename' => 'musica_intro_lucas.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 63,
                'fk_users' => 0,
                'name' => 'musica_tension_01',
                'filename' => 'musica_tension_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 64,
                'fk_users' => 0,
                'name' => 'musica_epica_01',
                'filename' => 'musica_epica_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 65,
                'fk_users' => 0,
                'name' => 'musica_tension_02',
                'filename' => 'musica_tension_02.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 66,
                'fk_users' => 0,
                'name' => 'musica_terror_01',
                'filename' => 'musica_terror_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 67,
                'fk_users' => 0,
                'name' => 'musica_escape_01',
                'filename' => 'musica_escape_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
            array(
                'id' => 68,
                'fk_users' => 0,
                'name' => 'musica_final_01',
                'filename' => 'musica_final_01.mp4',
                'type' => 'music',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('audio')->insert($audio);
    }
}
