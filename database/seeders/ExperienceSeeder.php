<?php

namespace Database\Seeders;

use App\Models\admin\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tab = [
            [
                'poste'          => 'Développeur web et mobile',
                'entreprise'     => 'PACIFIQUE GROUP',
                'description'    => 
                "
                    Développement et Réalisation en cours d'une application d'échange de monnaire avec Laravel 10.
                    Réalisation en cours d’un site web de gestion de livraison pour une entreprise avec Laravel 10.
                ",
                'statut'         => 'CDD',
                'date_debut'     => 'Mars 2023',
                'date_fin'       => 'Actuellement',
            ],
            [
                'poste'          => 'Développeur web et mobile',
                'entreprise'     => 'DA DIGIT ALL',
                'description'    => 
                "
                    Apport de plusieurs fonctionnalités sur le site web de Master Digit développé avec Laravel 8.
                    Réalisation d’un site web de gestion de stock pour KeylaShop.
                ",
                'statut'         => 'Stage Professionnel',
                'date_debut'     => 'Juin 2022',
                'date_fin'       => 'Février 2023',
            ],
            [
                'poste'          => 'Développeur font-end et UX design ',
                'entreprise'     => 'RINTIO',
                'description'    => 
                "
                    Appropriation du framework Vus.js.
                    Conception d'un site de gestion de stock en pharmacie avec Vus.js.  
                    Réalisation de plusieurs maquettes de site web avec Figma.
                ",
                'statut'         => 'Stage Professionnel',
                'date_debut'     => 'Février 2022',
                'date_fin'       => 'Juin 2022',
            ],
            [
                'poste'          => 'Maintenancier en Informatique',
                'entreprise'     => 'Global Bissness Consulting',
                'description'    => 
                "
                    Maintenance des ordinateurs portables et bureautiques.
                    Câblage réseau local pour des entreprises.
                    Installation d'un poste de travail complet.
                    Maintenance curatives et préventives des ordinateurs.
                    Réparation des ordinateurs.
                ",
                'statut'         => 'Stage Professionnel',
                'date_debut'     => 'Septembre 2021',
                'date_fin'       => 'Février 2022',
            ],
            [
                'poste'          => 'Maintenancier en Informatique',
                'entreprise'     => 'TECHNOLOGIE DE POINTE BÉNIE',
                'description'    => 
                "
                    Conception d'un site web pour l'entreprise avec les langages HTML, CSS et PHP native.
                    Appropriation du routeur Mikrotik et mise en place d'un réseau local d'échanges des fichiers entre les stagiaires et le secrétariat.
                    Réalisation d’un système de gestion automatique de facturation mensuelle d’eau.
                ",
                'statut'         => 'Stage Académique',
                'date_debut'     => 'Avril 2021',
                'date_fin'       => 'Juillet 2021',
            ]
        ];

        Experience::insert($tab);
    }
}
