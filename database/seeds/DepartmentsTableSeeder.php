<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departments')->insert([
        [ //1
          'name' => 'Managua',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //2
          'name' => 'Masaya',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //3
          'name' => 'León',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Granada',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Jinotepe',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Carazo',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Estelí',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Rivas',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Chinandega',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Chontales',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Madriz',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Matagalpa',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Nueva Segovia',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Boaco',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Rio San Juan',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Atlántico Sur',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Jinotega',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Atlántico Norte',
          'created_at' => now(),
          'updated_at' => now(),
        ]
      ]);
    }
}
