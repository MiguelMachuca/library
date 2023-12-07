<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;
use App\Models\Idioma;
use App\Models\Voces;
use App\Models\Categoria;
use Carbon\Carbon;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

      
        $idiomas = [
            [
                'nombre'=>'Español', 
                'codigo'=>'es'
            ],
            [
                'nombre'=>'Ingles', 
                'codigo'=>'en'
            ],
            [
                'nombre'=>'Frances', 
                'codigo'=>'fr'
            ],
            [
                'nombre'=>'Portugues', 
                'codigo'=>'pt'
            ],
            [
                'nombre'=>'Italiano', 
                'codigo'=>'it'
            ],
            [
                'nombre'=>'Aleman', 
                'codigo'=>'de'
            ]
        ];
        foreach ($idiomas as $dato) {
            Idioma::create($dato);
        }
        // 
        $voces = [
            [
                'nombre'=>'james',
                'codigo_voz'=>'ingles',
                'idioma_id'=>1
            ],
            [
                'nombre'=>'william',
                'codigo_voz'=>'ingles',
                'idioma_id'=>1
            ],
            [
                'nombre'=>'john',
                'codigo_voz'=>'ingles',
                'idioma_id'=>1
            ],
            [
                'nombre'=>'jane',
                'codigo_voz'=>'ingles',
                'idioma_id'=>1
            ],
            [
                'nombre'=>'emily',
                'codigo_voz'=>'ingles',
                'idioma_id'=>1
            ],
            [
                'nombre'=>'virginia',
                'codigo_voz'=>'ingles',
                'idioma_id'=>1
            ]
        ];
        foreach ($voces as $dato) {
            Voces::create($dato);
        }
        // 
        $voces = [
            [
                'nombre'=>'jose',
                'codigo_voz'=>'español',
                'idioma_id'=>2
            ],
            [
                'nombre'=>'pablo',
                'codigo_voz'=>'español',
                'idioma_id'=>2
            ],
            [
                'nombre'=>'diego',
                'codigo_voz'=>'español',
                'idioma_id'=>2
            ],
            [
                'nombre'=>'rocio',
                'codigo_voz'=>'español',
                'idioma_id'=>2
            ],
            [
                'nombre'=>'isabel',
                'codigo_voz'=>'español',
                'idioma_id'=>2
            ],
            [
                'nombre'=>'evelin',
                'codigo_voz'=>'español',
                'idioma_id'=>2
            ]
        ];
        foreach ($voces as $dato) {
            Voces::create($dato);
        }
        // 
        $voces = [
            [
                'nombre'=>'marcel',
                'codigo_voz'=>'frances',
                'idioma_id'=>3
            ],
            [
                'nombre'=>'albert',
                'codigo_voz'=>'frances',
                'idioma_id'=>3
            ],
            [
                'nombre'=>'blaise',
                'codigo_voz'=>'frances',
                'idioma_id'=>3
            ],
            [
                'nombre'=>'simone',
                'codigo_voz'=>'frances',
                'idioma_id'=>3
            ],
            [
                'nombre'=>'edith',
                'codigo_voz'=>'frances',
                'idioma_id'=>3
            ],
            [
                'nombre'=>'juliette',
                'codigo_voz'=>'frances',
                'idioma_id'=>3
            ]
        ];
        foreach ($voces as $dato) {
            Voces::create($dato);
        }
        // 
        $voces = [
            [
                'nombre'=>'franz',
                'codigo_voz'=>'Aleman',
                'idioma_id'=>4
            ],
            [
                'nombre'=>'karl',
                'codigo_voz'=>'Aleman',
                'idioma_id'=>4
            ],
            [
                'nombre'=>'otto',
                'codigo_voz'=>'Aleman',
                'idioma_id'=>4
            ],
            [
                'nombre'=>'anne',
                'codigo_voz'=>'Aleman',
                'idioma_id'=>4
            ],
            [
                'nombre'=>'nina',
                'codigo_voz'=>'Aleman',
                'idioma_id'=>4
            ],
            [
                'nombre'=>'emmy',
                'codigo_voz'=>'Aleman',
                'idioma_id'=>4
            ]
        ];
        foreach ($voces as $dato) {
            Voces::create($dato);
        }
        //

        $voces = [
            [
                'nombre'=>'enzo',
                'codigo_voz'=>'Italiano',
                'idioma_id'=>5
            ],
            [
                'nombre'=>'dante',
                'codigo_voz'=>'Italiano',
                'idioma_id'=>5
            ],
            [
                'nombre'=>'galileo',
                'codigo_voz'=>'Italiano',
                'idioma_id'=>5
            ],
            [
                'nombre'=>'grazia',
                'codigo_voz'=>'Italiano',
                'idioma_id'=>5
            ],
            [
                'nombre'=>'elsa',
                'codigo_voz'=>'Italiano',
                'idioma_id'=>5
            ],
            [
                'nombre'=>'gina',
                'codigo_voz'=>'Italiano',
                'idioma_id'=>5
            ]
        ];
        //
        foreach ($voces as $dato) {
            Voces::create($dato);
        }
        //
        $voces = [
            [
                'nombre'=>'vasco',
                'codigo_voz'=>'Portugues',
                'idioma_id'=>6
            ],
            [
                'nombre'=>'paulo',
                'codigo_voz'=>'Portugues',
                'idioma_id'=>6
            ],
            [
                'nombre'=>'luis',
                'codigo_voz'=>'Portugues',
                'idioma_id'=>6
            ],
            [
                'nombre'=>'amalia',
                'codigo_voz'=>'Portugues',
                'idioma_id'=>6
            ],
            [
                'nombre'=>'mariza',
                'codigo_voz'=>'Portugues',
                'idioma_id'=>6
            ],
            [
                'nombre'=>'ivete',
                'codigo_voz'=>'Portugues',
                'idioma_id'=>6
            ]
        ];
        foreach ($voces as $dato) {
            Voces::create($dato);
        }
        //
        $categorias = [
            [
                'nombre' => 'Histórico',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895297/xwtmw3pesm83jw5mm8bb.png',
            ],
            [
                'nombre' => 'Cocina',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895347/m21iillxsxydvn8idd5y.png',
            ],
            [
                'nombre' => 'Deportes',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895236/aqy622n2agf4ch67ykkv.png',
            ],
            [
                'nombre' => 'Educación',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895153/qrxthbzltuyzlx88sd1e.png',
            ],
            [
                'nombre' => 'Horror',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701892200/vvvcskm6iy2bfaougz2a.png',
            ],
            [
                'nombre' => 'Codigo',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895262/f3pjv41cjvkvvoe6cv9c.png',
            ],
            [
                'nombre' => 'Arte y Literatura',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895203/q1dqrs8h6mtjwsfn77yd.png',
            ],
            [
                'nombre' => 'Biografía  /n Autobiografía',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895507/xiajqayrzlrzav3hjlqw.png',
            ],
            [
                'nombre' => 'Drama',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701892801/jgawzkk7b3wugmtxprja.png',
            ],
            [
                'nombre' => 'Fantasía',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895371/pkmf7h6ifkrzvpbktpek.png',
            ],
            [
                'nombre' => 'Ficción',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701892871/dc4n0uubansnhx2xdg2x.png',
            ],
            [
                'nombre' => 'Humor',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895184/upbketvczqsabih1xcwt.png',
            ],
            [
                'nombre' => 'Religioso',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895089/gcwgba8lhyvounm3p4yi.png',
            ],
            [
                'nombre' => 'Suspenso',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895447/xxc4n7xnkywmtv3exvjg.png',
            ],
            [
                'nombre' => 'Thriller',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895323/x67mafsuzjv48fbivimd.png',
            ],
            [
                'nombre' => 'Viajes  /\n Fotografía',
                'descripcion' => 'https://res.cloudinary.com/da9xsfose/image/upload/v1701895121/sngt9slyj5oydwcjwx4m.png',
            ]
               
         ];
         foreach ($categorias as $dato) {
            Categoria::create($dato);
        }
        $datosEjemplo = [
            [
                'nombre' => 'Estructura y Vida',
                'autor' => 'Autor 1',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/65510201ca039.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699818632/ocemr26xzpl2nwnjiejb.jpg',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Arquitectura General',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/65510134c293f.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806861/portada-Los_viajes_de_Marco_Polo_ar5avv.png',
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Fundamentos de Informatica',
                'autor' => 'Autor 2',
                'descripcion' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806861/portada-Los_viajes_de_Marco_Polo_ar5avv.png',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806861/portada-la_vuelta_al_mundo_en_80_dias_fkdlhb.png',
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'agricultura sostenible',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655101774b1b5.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806861/portada-En_El_Camino_jabrhn.png',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Espacio publico',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655101acef4da.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806861/portada-Los_viajes_de_Gulliver_wtxuhb.jpg',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Nociones Inmunologicas',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/65510201ca039.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806829/portada-El_hombre_duplicado_yak8rl.png',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Arquitectura Moderna',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/6551027c76a64.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806829/portada-El_resplandor_ia01qj.png',
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Informatica 2',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655102976abc1.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806829/portada-El_hombre_que_perseguia_su_sombra_klgisb.png',
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Manual de Horticultura',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655102cd98696.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806829/portada-Los_hombres_me_explican_cosas_d4kzcy.png',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Arquitectura Contemporanea',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655102e4f3f0e.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806828/portada-El_codigo_da_vinci_wkrls5.png',
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Informatica 1',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/6551032b342db.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806790/portada-El_juego_de_Gerald_oow7zz.png',
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Agricultura Sostenible',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/6551035705692.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806790/portada-El_silencio_de_los_corderos_quttml.png',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Ingenieria Quimica',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655103a194dcb.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806790/portada-La_sombra_del_viento_y49mwp.png',
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Ingenieria Civil',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655103c675a4c.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806790/portada-La_chica_del_tren_agqchc.png',
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Guia Para Ganar musculo',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655103f12e289.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806789/portada-El_psicoanalista_i6w62n.jpg',
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Guia Nutricional',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/6551040f6c15a.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806829/portada-El_resplandor_ia01qj.png',
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Cocina Asiatica',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/6551067c3f293.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806861/portada-En_El_Camino_jabrhn.png',
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Cocina Venezonala',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655106e7d4841.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806861/portada-la_vuelta_al_mundo_en_80_dias_fkdlhb.png',
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Resetas de ensaladas',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655107020c706.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806790/portada-El_juego_de_Gerald_oow7zz.png',
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Recetas para el metabolismo',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/65510723a250b.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806790/portada-La_sombra_del_viento_y49mwp.png',
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Croquetas Gourmet',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/65510738c0d77.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806829/portada-Los_hombres_me_explican_cosas_d4kzcy.png',
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Cocina Oriental',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/6551075e2364d.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806829/portada-El_hombre_duplicado_yak8rl.png',
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Cocina Cubana',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/65512500a5df2.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1682963190/cld-sample-4.jpg',
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Estiramientos Saludable',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655125e7b943e.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1682963190/cld-sample-4.jpg',
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Homeotopia',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/6551260a08915.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806861/portada-Los_viajes_de_Gulliver_wtxuhb.jpg',
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Psicologia y Deporte',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/655126230142b.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1682963190/cld-sample-3.jpg',
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'nombre' => 'Movimiento creativo',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/6551263b37db4.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699806790/portada-La_sombra_del_viento_y49mwp.png',
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Estiramientos Deportivos',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/65512652f3506.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1699818817/isdjopwfsp8zb6tnbiyk.jpg',
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Suplementos',
                'autor' => 'autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/65512674e66e0.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1682963178/samples/food/spices.jpg',
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Educacion Fisica',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/6551268fa8f3f.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1682963174/samples/people/bicycle.jpg',
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Fortunata y Jacinta',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/Drama/Fortunata+y+Jacinta.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1682963189/cld-sample.jpg',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Hamlet Tragedia',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/Drama/Hamlet+-+William+Shakespare.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1683749527/eediool3lugkaie4rqt9.jpg',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'La muerte de ivan Illich',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/Drama/La-muerte-de-Iv--n-Ilich.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/image/upload/v1682963172/samples/people/jazz.jpg',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Las Penas del Joven Werther',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/Drama/Las+penas+del+joven+Werther.pdf',
                'foto_portada' => 'https://res.cloudinary.com/dirau81x6/video/upload/v1682963186/samples/cld-sample-video.mp4',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Romeo y Julieta',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/Drama/romeo_y_julieta_-_william_shakespeare.pdf',
                'foto_portada' => 'imagen2.jpg',
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'nombre' => 'Funciones y Concepciones',
                'autor' => 'Autor 2',
                'descripcion' => 'https://librosw1.s3.amazonaws.com/test/6551027c76a64.pdf',
                'foto_portada' => 'imagen2.jpg',
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Puedes agregar más datos de ejemplo aquí...
        ];
        foreach ($datosEjemplo as $dato) {
            Libro::create($dato);
        }
    }
}
