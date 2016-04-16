<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        # 1
        $admin = new \ManageMe\Models\Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator';
        $admin->save();

        # 2
        $admin = new \ManageMe\Models\Role();
        $admin->name         = 'doctor';
        $admin->display_name = "Clinic's doctor";
        $admin->save();

        # 3
        $owner = new \ManageMe\Models\Role();
        $owner->name         = 'clerk';
        $owner->display_name = "Doctor's clerk or secretary";
        $owner->save();

    }
}
