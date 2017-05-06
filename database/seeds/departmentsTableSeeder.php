<?php

use Illuminate\Database\Seeder;

class departmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Department::class,100)->create();
    }
}
