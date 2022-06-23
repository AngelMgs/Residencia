<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('notices')->insert([
            'title' => 'FORO',
            'body' => 'EXPERIENCIAS EXITOSAS EN EL MARCO DE LA IMPLEMENTACIÓN DEL PLAN DE MEJORA CONTINUA CICLO ESCOLAR 2020-2021',
            'img_url' => 'https://static.wixstatic.com/media/f3980b_a57227752b1b47279d62ffecc8279459~mv2.jpg/v1/fill/w_535,h_535,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/FORO.jpg',
            'link_name'=> 'ver el video',
            'link_url'=> 'https://www.youtube.com/watch?v=vuT1lSdrmaE',
        ]);

        DB::table('notices')->insert([
            'title' => 'SUSPENSIÓN LABORES C.21-22',
            'body' => 'SE LES COMUNICA QUE HABRÁ SUSPESIÓN DE LABORES LOS DÍAS 15,16 Y 17 DE SEPTIEMBRE 2021. REINCORPORANDONOS A LAS LABORES EDUCATIVAS ONLINE Y ADMINSTRATIVAS PRESENCIAL EL DIA 20 DE SEPTIEMBRE 2021.',
            'img_url' => 'https://static.wixstatic.com/media/f3980b_7fbd3a80d4ea44288ac3f5e1efc7a3cf~mv2.png/v1/fill/w_865,h_725,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/AVISO%20%2313%20-%20090921%20(1).png',
            'link_name'=> '',
            'link_url'=> '',
        ]);

        DB::table('notices')->insert([
            'title' => 'EVALUACIÓN INGRESO MEDIA SUPERIOR',
            'body' => 'APLICACIÓN DE LA EVALUACIÓN DE INGRESO AL NIVEL MEDIA SUPERIOR C. 2021-2022',
            'img_url' => 'https://static.wixstatic.com/media/f3980b_5c29bf5582964987bb133eb59597aaf8~mv2.png/v1/fill/w_865,h_725,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/evaluacion%20c21-22.png',
            'link_name'=> 'ver el video',
            'link_url'=> 'https://www.youtube.com/watch?v=Wr1HiQ344Ug',
        ]);

        DB::table('notices')->insert([
            'title' => 'REGRESO A CLASES C.21-22',
            'body' => 'INICIAREMOS CLASES ESTE 30 DE AGOSTO 2021, CORRESPODIENTE AL CICLO ESCOLAR 2021-2022 CON CLASES EN LINEA.',
            'img_url' => 'https://static.wixstatic.com/media/f3980b_54d463aec6854113aa0a9d28a7de892b~mv2.png/v1/fill/w_865,h_725,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/COMUNICADO%20GENERAL%20C21-22.png',
            'link_name'=> '',
            'link_url'=> '',
        ]);

        
    }
}
