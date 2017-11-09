<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
        [ //1
          'types' => 'Catedral',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //2
          'types' => 'Parroquia',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [ //3
          'types'  => 'Capilla',
          'created_at' => now(),
          'updated_at' => now(),
        ]
      ]);
    }
}
