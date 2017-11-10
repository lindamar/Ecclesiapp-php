<?php

use Illuminate\Database\Seeder;

class pastoral_areas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
