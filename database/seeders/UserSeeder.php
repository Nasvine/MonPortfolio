<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tab = [
            [
                'name'         => 'NASSARA Kévine',
                'email'        => 'vinenassara@gmail.com',
                'password'     => bcrypt('Toto__2022'),
            ]
        ];
        
        User::insert($tab);
    }
}
