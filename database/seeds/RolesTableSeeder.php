<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $superadminRole = new Role;
      $superadminRole->name = 'Super Administrator';
      $superadminRole->slug = 'superadmin';
      $superadminRole->description = 'Super Administrator';
      $superadminRole->save();

      $adminRole = new Role;
      $adminRole->name = 'Administrator';
      $adminRole->slug = 'administrator';
      $adminRole->description = 'Administrator';
      $adminRole->save();

      $teacherRole = new Role;
      $teacherRole->name = 'Teacher';
      $teacherRole->slug = 'teacher';
      $teacherRole->description = 'Teacher';
      $teacherRole->save();

      $studentRole = new Role;
      $studentRole->name = 'Student';
      $studentRole->slug = 'student';
      $studentRole->description = 'Student';
      $studentRole->save();

      $parentRole = new Role;
      $parentRole->name = 'Parent';
      $parentRole->slug = 'parent';
      $parentRole->description = 'Parent';
      $parentRole->save();
    }
}
