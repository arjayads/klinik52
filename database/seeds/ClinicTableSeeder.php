<?php

use Illuminate\Database\Seeder;

class ClinicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Clinic')->insert(
            [
                'name'    => 'ABC Clinic',
                'address'    => 'XYZ Street, MNO City'
            ]
        );
    }
}
