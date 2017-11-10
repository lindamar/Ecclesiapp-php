<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PrivilegesTableSeeder::class);
        $this->call(UserTypesTableSeeder::class);
        $this->call(CategoriesTableSeeder ::class);
        $this->call(DepartmentsTableSeeder ::class);
        $this->call(MunicipalitiesTableSeeder ::class);
        $this->call(DioceseTableSeeder ::class);
    }
}
