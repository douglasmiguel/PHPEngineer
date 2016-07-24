<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectTableSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'id'            => 1,
                'title'         => 'Alimentos Sem Mitos',
                'description'   => 'Project for USP (Universidade of São Paulo) on healthy eating. Responsibilities: application layout (HTML, CSS, jQuery), admin development using Laravel 5.2, BladeTemplate and AdminLTE and website development using Laravel 5.2 and BladeTemplate.',
                'url'           => 'http://alimentossemmitos.com.br/',
                'year'          => '2016',
                'slug'          => 'alimentos-sem-mitos',
                'technologies'  => [1, 2, 4, 5, 6, 10, 11, 14, 17, 20, ],
                'images'        => [
                    [
                        'image'         => 'alimentossemmitos/1.png',
                        'description'   => 'Project\'s main page.',
                    ],
                    [
                        'image'         => 'alimentossemmitos/2.png',
                        'description'   => 'Admin: page and posts list.',
                    ],
                    [
                        'image'         => 'alimentossemmitos/3.png',
                        'description'   => 'Admin: edit post',
                    ],
                ],
            ],
            [
                'id'            => 2,
                'title'         => 'Sistema de Ensino',
                'description'   => 'Maintenance and development of new modules for the project “Education System”: a program for schools throughout Brazil, with modules for managing teachers, students, grades and absences and for the integration with the didactic content of the published by FTD. Using: Laravel 4.2 for RESTFull API\'s, MySQL, MongoDB, ElasticSearch, AngularJS, Bootstrap.',
                'url'           => 'https://se.ftd.com.br/',
                'year'          => '2015',
                'slug'          => 'ftd-sistema-de-ensino',
                'technologies'  => [5, 6, 11, 12, 14, 15, 19, ],
                'images'        => [
                    [
                        'image'         => 'editoraftd/1.png',
                        'description'   => 'Project\'s main page. AngularJS with Bootstrap that consumes a REST API.',
                    ],
                    [
                        'image'         => 'editoraftd/2.png',
                        'description'   => 'Educational questions system that utilizes the REST API and get data from ElasticSearch.',
                    ],
                    [
                        'image'         => 'editoraftd/3.png',
                        'description'   => 'User management screen in the Admin.',
                    ],
                ],
            ],
            [
                'id'            => 3,
                'title'         => 'Vivo Som de Chamada',
                'description'   => 'Project developed for Vivo (Telecom company) at Wunderman. In this project I did the specification in conjunction with India\'s development team. They developed an API to purchase songs for touch mobile devices. Responsibilities: meetings with the development team, orientation to the Wunderman Design team, implementation of HTML, CSS, JavaScript (jQuery) and implementation of the API.',
                'url'           => 'http://somdechamada.vivo.com.br/',
                'year'          => '2014',
                'slug'          => 'vivo-som-de-chamada',
                'technologies'  => [1, 2, 3, 4, ],
                'images'        => [
                    [
                        'image'         => 'vivosomdechamada/1.png',
                        'description'   => 'Project\'s main page.',
                    ],
                    [
                        'image'         => 'vivosomdechamada/2.png',
                        'description'   => 'Form for product activation via SMS.',
                    ],
                    [
                        'image'         => 'vivosomdechamada/3.png',
                        'description'   => 'Client API which was developed by India team of developers in Java.',
                    ],
                ],
            ],
            [
                'id'            => 4,
                'title'         => 'TAM Fidelidade 20 anos',
                'description'   => 'Development of the hotsite and scripts (PHP) to generate gigantic photos on the grid for printing and attaching on two of the airplanes of Brazil’s largest airline.<br><br><strong>Promotional video:</strong><a href="https://www.youtube.com/watch?v=R1dJmt5hGCk">https://www.youtube.com/watch?v=R1dJmt5hGCk</a><br><br><strong>Video with the gigantic photos being attached to the airplane:</strong><a href="https://www.youtube.com/watch?v=NZGMGk1s4iI">https://www.youtube.com/watch?v=NZGMGk1s4iI</a>',
                'url'           => 'http://exame.abril.com.br/marketing/noticias/tam-cobre-aviao-com-10-mil-fotografias-de-clientes-e-fas',
                'year'          => '2014',
                'slug'          => 'tam-fidelidade-20-anos',
                'technologies'  => [5, ],
                'images'        => [
                    [
                        'image'         => 'tamfidelidade/1.jpg',
                        'description'   => 'Airplane with stickers applied after campaign with photos of customers and Facebook fans.',
                    ],
                    [
                        'image'         => 'tamfidelidade/2.png',
                        'description'   => 'Airplane with stickers applied after campaign with photos of customers and Facebook fans.',
                    ],
                    [
                        'image'         => 'tamfidelidade/3.jpg',
                        'description'   => 'Airplane with stickers applied after campaign with photos of customers and Facebook fans.',
                    ],
                ],
            ],
            [
                'id'            => 5,
                'title'         => 'Danone',
                'description'   => 'Project developed at Wunderman, new Brazilian website for Danone, a yogurt brand.',
                'url'           => 'http://danone.com.br/',
                'year'          => '2013',
                'slug'          => 'danone',
                'technologies'  => [1, 2, 3, 4, 20, ],
                'images'        => [
                    [
                        'image'         => 'danone/1.png',
                        'description'   => 'Project\'s main page.',
                    ],
                    [
                        'image'         => 'danone/2.png',
                        'description'   => 'About.',
                    ],
                    [
                        'image'         => 'danone/3.png',
                        'description'   => 'Recipe.',
                    ],
                ],
            ],
            [
                'id'            => 6,
                'title'         => 'Linode Hosting',
                'description'   => 'Since 2012 I maintain a structure of Linux servers (Ubuntu) to host some of mine personal projects and some customers projects. I made the configuration with PHP 5.6, nginx and also dedicated MySQL servers. I developed bash scripts for backup routines and other necessities. Currently I keep the machines updated and check them day-to-day.',
                'url'           => 'https://www.linode.com/',
                'year'          => '2012',
                'slug'          => 'linode-hosting',
                'technologies'  => [5, 11, 12, 13, 14, ],
                'images'        => [
                    [
                        'image'         => 'linode/1.png',
                        'description'   => 'Linode painel.',
                    ],
                    [
                        'image'         => 'linode/2.png',
                        'description'   => 'Linode painel.',
                    ],
                    [
                        'image'         => 'linode/3.png',
                        'description'   => 'SSH client.',
                    ],
                ],
            ],
            [
                'id'            => 7,
                'title'         => 'GPX.tag',
                'description'   => 'Gigafotos project developed for a Canadian client. It was a great challenge converting giant photos on GigaPan format for Quadtree. On the front-end we used Microsoft\'s Seadragon library. I also development a Admin with: SlimFramework + TwigTemplate.',
                'url'           => 'http://www.gigapixel.com/gpxtag/',
                'year'          => '2012',
                'slug'          => 'gpx-tag',
                'technologies'  => [1, 2, 3, 4, 5, 7, 9, 11, 16, 20, ],
                'images'        => [
                    [
                        'image'         => 'gpxtag/1.png',
                        'description'   => 'Project\'s main page.',
                    ],
                    [
                        'image'         => 'gpxtag/2.png',
                        'description'   => 'Sample tag created in the project.',
                    ],
                    [
                        'image'         => 'gpxtag/3.png',
                        'description'   => 'Snapshot feature.',
                    ],
                ],
            ],
            [
                'id'            => 8,
                'title'         => 'Dafra Motos',
                'description'   => 'Site for a Brazilian motorcycle manufacturer that was developed using Symfony framework 1.4 + MySQL.',
                'url'           => 'http://www.daframotos.com.br/',
                'year'          => '2011',
                'slug'          => 'dafra-motos',
                'technologies'  => [1, 2, 3, 4, 5, 8, 11, 20, ],
                'images'        => [
                    [
                        'image'         => 'daframotos/1.png',
                        'description'   => 'Project\'s main page.',
                    ],
                    [
                        'image'         => 'daframotos/2.png',
                        'description'   => 'Integration with Google Maps to show the dealers.',
                    ],
                    [
                        'image'         => 'daframotos/3.png',
                        'description'   => 'Bike details.',
                    ],
                ],
            ],
            [
                'id'            => 9,
                'title'         => 'Gazeta Esportiva',
                'description'   => 'GazetaEsportiva is the largest sports online daily in Brazil and in 2009 I worked on the redesign of the entire design project. This site has millions of monthly visits and it was an honor to have worked on this project.',
                'url'           => 'http://www.gazetaesportiva.com/',
                'year'          => '2009',
                'slug'          => 'gazeta-esportiva',
                'technologies'  => [1, 2, 3, 5, 11, 13, 18, 20, ],
                'images'        => [
                    [
                        'image'         => 'gazetaesportiva/1.png',
                        'description'   => 'Recovered screen in Internet Archive. Project\'s main page.',
                    ],
                    [
                        'image'         => 'gazetaesportiva/2.png',
                        'description'   => 'Recovered screen in Internet Archive. Report on the World Cup 2010.',
                    ],
                    [
                        'image'         => 'gazetaesportiva/3.png',
                        'description'   => 'Current project\'s main page.',
                    ],
                ],
            ],
            [
                'id'            => 10,
                'title'         => 'Gazeta Press',
                'description'   => 'This project has been redesigned (layout) in the recent years but it still uses my back-end code for managing photos. It was the first project I developed in São Paulo.',
                'url'           => 'http://gazetapress.com/',
                'year'          => '2008',
                'slug'          => 'gazeta-press',
                'technologies'  => [1, 2, 3, 5, 11, 13, 20, ],
                'images'        => [
                    [
                        'image'         => 'gazetapress/1.png',
                        'description'   => 'Screen showing a picture with watermark, processing done with ImageMagick.',
                    ],
                    [
                        'image'         => 'gazetapress/2.png',
                        'description'   => 'Screen list of photo\'s collections available for users to purchase.',
                    ],
                    [
                        'image'         => 'gazetapress/3.png',
                        'description'   => 'Project\'s main page.',
                    ],
                ],
            ],
            [
                'id'            => 11,
                'title'         => 'Fácil Tecnologias',
                'description'   => 'The first version of this project was developed in 2005/2006 for managing a publishing company that produces educational materials for transit schools. This publisher has a software license to which I have developed a customer usage control. A REST is used to activate the project and a SERIAL for control use. All projects are being used to this day.',
                'url'           => 'http://cms.faciltecnologias.com.br/',
                'year'          => '2006',
                'slug'          => 'facil-tecnologias',
                'technologies'  => [1, 2, 3, 5, ],
                'images'        => [
                    [
                        'image'         => 'faciltecnologias/1.png',
                        'description'   => 'Screen of the system new version, developed by me in 2012 with SlimFramework + TwigTemplate.',
                    ],
                    [
                        'image'         => 'faciltecnologias/2.png',
                        'description'   => 'Screen of the system new version, developed by me in 2012 with SlimFramework + TwigTemplate.',
                    ],
                    [
                        'image'         => 'faciltecnologias/3.png',
                        'description'   => 'Screen of the system new version, developed by me in 2012 with SlimFramework + TwigTemplate.',
                    ],
                ],
            ],
            [
                'id'            => 12,
                'title'         => 'Portal do Sêmen',
                'description'   => 'When I was 16 years old, I idealized this project with my partner at the time. It was my first endeavor. The project was launched in 2004. It was the first website in Brazil to sell specialized bovine semen. The website works as a catalog and we performed the mediation on the commercialization of bovine semen for artificial insemination. The project was soon copied by the competition. For about a year, our website was considered the reference for price and value on the Brazilian market. After two years, we sold the company.',
                'url'           => 'http://www.portaldosemen.com.br/',
                'year'          => '2004',
                'slug'          => 'portal-do-semen',
                'technologies'  => [1, 2, 3, 5, 20, ],
                'images'        => [
                    [
                        'image'         => 'portaldosemen/1.png',
                        'description'   => 'Project\'s main page.',
                    ],
                    [
                        'image'         => 'portaldosemen/2.png',
                        'description'   => 'Screen with the list of semen doses available for sale.',
                    ],
                    [
                        'image'         => 'portaldosemen/3.png',
                        'description'   => 'Screen with details about the animal family tree and semen dose details.',
                    ],
                ],
            ],
            [
                'id'            => 13,
                'title'         => 'Cachaça Segredo de Araxá',
                'description'   => 'One of the first projects I did in my professional life, a site developed using tables and Dreamweaver. :)',
                'url'           => 'http://cachacasegredodearaxa.com.br/',
                'year'          => '2003',
                'slug'          => 'cachaca-segredo-de-araxa',
                'technologies'  => [1, 2, 3, 5, 20, ],
                'images'        => [
                    [
                        'image'         => 'cachacasegredodearaxa/1.png',
                        'description'   => 'Project\'s main page.',
                    ],
                    [
                        'image'         => 'cachacasegredodearaxa/2.png',
                        'description'   => 'Product list.',
                    ],
                    [
                        'image'         => 'cachacasegredodearaxa/3.png',
                        'description'   => 'Contact form.',
                    ],
                ],
            ],
        ];
        foreach($projects as $project)
        {
            DB::table('project')->insert([
                'id'            => $project['id'],
                'title'         => $project['title'],
                'description'   => $project['description'],
                'url'           => $project['url'],
                'year'          => $project['year'],
                'slug'          => $project['slug'],
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]);
            foreach($project['technologies'] as $technology)
            {
                DB::table('project_technology')->insert([
                    'project_id'    => $project['id'],
                    'technology_id' => $technology,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ]);
            }
            foreach($project['images'] as $image)
            {
                DB::table('project_image')->insert([
                    'project_id'    => $project['id'],
                    'image'         => $image['image'],
                    'description'   => $image['description'],
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ]);
            }
        }
    }
}
