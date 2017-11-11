<?php

use Illuminate\Database\Seeder;

class DioceseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('diocese')->insert([
        [ //1
          'name' => 'Arquidiocesis de Managua',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //2
          'name' => 'Diocesis de León',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //3
          'name'  => 'Diocesis de Granada',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //3
          'name'  => 'Diocesis de Juigalpa',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //3
          'name'  => 'Diocesis de Matagalpa',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //3
          'name'  => 'Diocesis de Jinotega',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //3
          'name'  => 'Diocesis de Estelí',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //3
          'name'  => 'Vicariato Apostólico de Bluefields',
          'created_at' => now(),
          'updated_at' => now(),
        ]
    ]);

    }
}
