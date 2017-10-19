<?php

use Illuminate\Database\Seeder;
use App\User;


class AddPermissionToRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $izinCSuperadmin = Permission::find(1); // izin create superadmin
        $izinUSuperadmin = Permission::find(2); // izin update superadmin
        $izinDSuperadmin = Permission::find(3); // izin delete superadmin
        $izinCAdmin = Permission::find(4); // izin create administrator
        $izinUAdmin = Permission::find(5); // izin update administrator
        $izinDAdmin = Permission::find(6); // izin delete administrator
        $izinCTeacher = Permission::find(7); // izin create teacher
        $izinUTeacher = Permission::find(8); // izin update teacher
        $izinDTeacher = Permission::find(9); // izin delete teacher
        $izinCStudent = Permission::find(10); // izin create student
        $izinUStudent = Permission::find(11); // izin update student
        $izinDStudent = Permission::find(12); // izin delete student
        $izinCParent = Permission::find(13); // izin create parent
        $izinUParent = Permission::find(14); // izin update parent
        $izinDParent = Permission::find(15); // izin delete parent
        $izinCBlog = Permission::find(16); // izin create parent
        $izinUBlog = Permission::find(17); // izin update parent
        $izinDBlog = Permission::find(18); // izin delete parent

        // == Super Administrator ==
        $userSuperadmin = User::find(1); // id 1
        $userSuperadmin_2 = User::find(2); // id 2
        $superadminRole = Role::find(1);
        $superadminRole->permissions()->attach([
          $izinCSuperadmin->id,
          $izinUSuperadmin->id,
          $izinDSuperadmin->id,
          $izinCAdmin->id,
          $izinUAdmin->id,
          $izinDAdmin->id
        ]);
        $userSuperadmin->roles()->attach($superadminRole->id);
        $userSuperadmin_2->roles()->attach($superadminRole->id);

        // == Administrator ==
        $userAdmin = User::find(3);
        $adminRole = Role::find(2);
        $adminRole->permissions()->attach([
          $izinCTeacher->id,
          $izinUTeacher->id,
          $izinDTeacher->id,
          $izinCStudent->id,
          $izinUStudent->id,
          $izinDStudent->id,
          $izinCParent->id,
          $izinUParent->id,
          $izinDParent->id,
          $izinCBlog->id,
          $izinUBlog->id,
          $izinDBlog->id
        ]);
        $userAdmin->roles()->attach($adminRole->id);
        // == Teacher ==
        $userTeacher = User::find(4);
        $teacherRole = Role::find(3);
        $teacherRole->permissions()->attach([
          $izinCStudent->id,
          $izinUStudent->id,
          $izinDStudent->id,
          $izinCBlog->id,
          $izinUBlog->id,
          $izinDBlog->id
        ]);
        $userTeacher->roles()->attach($teacherRole->id); // seting user guru menjadi role guru
        // === Student ===
        $userStudent = User::find(5);
        $studentRole = Role::find(4);
        $studentRole->permissions()->attach([
          $izinCBlog->id,
          $izinUBlog->id,
          $izinDBlog->id
        ]);
        $userStudent->roles()->attach($studentRole->id);


        // === Parent ===
        $userParent = User::find(6);
        $parentRole = Role::find(5);
        $parentRole->permissions()->attach([
          $izinCBlog->id,
          $izinUBlog->id,
          $izinDBlog->id
        ]);
        $userParent->roles()->attach($parentRole->id);

    }
}
