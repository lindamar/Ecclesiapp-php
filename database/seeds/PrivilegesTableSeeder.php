<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PrivilegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privileges')->insert([
          [ //1
            'type' => 'R',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [ //2
            'type' => 'RU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [ //3
            'type' => 'CRU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [ //4
            'type' => 'CRUD',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ]
        ]);
    }
}
