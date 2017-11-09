<?php

use Illuminate\Database\Seeder;

class MunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('municipalities')->insert([
        [ //1
          'name' => ' Managua',
          'departments_id' => 1,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //2
          'name' => 'Ciudad Sandino',
          'departments_id' => 1,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //3
          'name' => 'Crucero',
          'departments_id' => 1,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Mateare',
          'departments_id' => 1,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'San Francisco Libre',
          'departments_id' => 1,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'San Rafael del Sur',
          'departments_id' => 1,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Ticuantepe',
          'departments_id' => 1,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //4
          'name' => 'Tipitapa',
          'departments_id' => 1,
          'created_at' => now(),
          'updated_at' => now(),
        ]
        ]);
    }
}
