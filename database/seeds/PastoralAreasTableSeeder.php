<?php

use Illuminate\Database\Seeder;

class PastoralAreas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pastoral_areas')->insert([
        [ //1
        'name' => 'Zona Oriental',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [ //2
        'name' => 'Zona Occidental',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [ //3
        'name'  => 'Zona de Masaya',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [ //3
        'name'  => 'Zona de Granada',
        'created_at' => now(),
        'updated_at' => now(),
      ]
    ]);
    }
}
