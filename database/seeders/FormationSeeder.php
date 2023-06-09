<?php

namespace Database\Seeders;

use App\Models\admin\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tab = [
            [
                'formation'    => 'Licence 3 Génie Électrique et Informatique option Informatique et Télécommunications',
                'ecole'        => 'Institut National Supérieur de Technologie Industrielle du Benin',
                'date_debut'   => 'Décembre 2018',
                'date_fin'     => 'Juillet 2021',
            ],
            [
                'formation'    => 'Baccalauréat Série C',
                'ecole'        => 'College d’Enseignement General de Pahou',
                'date_debut'   => 'Septembre 2017',
                'date_fin'     => 'Juillet 2018',
            ],
            [
                'formation'    => "Brevet d'Etude du Premier Cycle (MC)",
                'ecole'        => 'College d’Enseignement General de Pahou',
                'date_debut'   => 'Octobre 2014',
                'date_fin'     => 'Juillet 2015',
            ],
            [
                'formation'    => "Certificat d'Etude du Primaire",
                'ecole'        => 'Complexe Scolaire Saint Joel',
                'date_debut'   => 'Octobre 2010',
                'date_fin'     => 'Juillet 2011',
            ],
        ];
        
        Formation::insert($tab);
    }
}
