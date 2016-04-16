<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \ManageMe\User();
        $admin->name = 'Admin';
        $admin->email = 'admin@klinik52.clinic';
        $admin->password = bcrypt('yEHi1Zzggak3ZRns');
        $admin->save();
        $admin->attachRole(1);

        $doctor = new \ManageMe\User();
        $doctor->name = 'Doctor Doom';
        $doctor->email = 'doom@klinik52.clinic';
        $doctor->password = bcrypt('BP8vFbgeZ57oXu1P');
        $doctor->save();
        $doctor->attachRole(2);

        $clerk = new \ManageMe\User();
        $clerk->name = 'Mr Clerk';
        $clerk->email = 'clerk@klinik52.clinic';
        $clerk->password = bcrypt('uJh4GzwwzDbdugUb');
        $clerk->save();
        $clerk->attachRole(3);
    }
}
