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
        // $this->call(PermissionTableSeeder::class);
        // $this->call(RolesTableSeeder::class);
        // $this->call(AddPermissionToRole::class);
        $this->call(PageSettingsSeeder::class);
        $this->call(AddSlugSeeder::class);
    }
}
