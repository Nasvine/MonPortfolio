<?php

namespace Database\Seeders;

use App\Models\admin\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tab = [
            [
                'name'              => 'HTML & CSS',
                'progression_color' => 'bg-primary',
                'progression'       => '70',
            ],
            [
                'name'              => 'VusJS & React',
                'progression_color' => 'bg-danger',
                'progression'       => '60',
            ],
            [
                'name'              => 'PHP & Javascript',
                'progression_color' => 'bg-success',
                'progression'       => '55',
            ],
            [
                'name'              => 'Laravel et Flutter',
                'progression_color' => 'bg-info',
                'progression'       => '65',
            ],
            [
                'name'              => 'Dart & Python',
                'progression_color' => 'bg-warning',
                'progression'       => '66',
            ],
            [
                'name'              => 'Wordpress',
                'progression_color' => 'bg-primary',
                'progression'       => '70',
            ],
        ];
        
        Skill::insert($tab);
    }
}
