<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_types')->insert([
            [ //1
              'type' => 'Admin',
              'privileges_id' => '4',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
            ],
            [ //2
              'type' => 'Presb',
              'privileges_id' => '3',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
            ],
            [ //3
              'type' => 'Secr',
              'privileges_id' => '2',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
            ],
            [ //4
              'type' => 'Fel',
              'privileges_id' => '1',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
            ]
          ]);
    }
}
