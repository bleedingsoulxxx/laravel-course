<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('students')->insert([
            'first_name' => 'Joel',
            'middle_name' => 'Mapano',
            'last_name' => 'Esquilla',
        ]);

         DB::table('students')->insert([
            'first_name' => 'Jason',
            'middle_name' => 'koreano',
            'last_name' => 'Hallazgo',
        ]);

          DB::table('students')->insert([
            'first_name' => 'Agape',
            'middle_name' => 'Dumandan',
            'last_name' => 'Mejares',
        ]);
    }
}
