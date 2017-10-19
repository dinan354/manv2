<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //1
      $createSuperAdministrator = new Permission;
      $createSuperAdministrator->name = 'Create Super Administrator';
      $createSuperAdministrator->slug = 'superadmin.create';
      $createSuperAdministrator->description = 'Permission to create Super Administrator';
      $createSuperAdministrator->save();
      //2
      $updateSuperAdministrator = new Permission;
      $updateSuperAdministrator->name = 'Update Super Administrator';
      $updateSuperAdministrator->slug = 'superadmin.update';
      $updateSuperAdministrator->description = 'Permission to update Super Administrator';
      $updateSuperAdministrator->save();
      //3
      $deleteSuperAdministrator = new Permission;
      $deleteSuperAdministrator->name = 'Delete Administrator';
      $deleteSuperAdministrator->slug = 'superadmin.delete';
      $deleteSuperAdministrator->description = 'Permission to delete Super Administrator';
      $deleteSuperAdministrator->save();

      //4
      $createAdministrator = new Permission;
      $createAdministrator->name = 'Create Administrator';
      $createAdministrator->slug = 'administrator.create';
      $createAdministrator->description = 'Permission to create Administrator';
      $createAdministrator->save();
      //5
      $updateAdministrator = new Permission;
      $updateAdministrator->name = 'Update Administrator';
      $updateAdministrator->slug = 'administrator.update';
      $updateAdministrator->description = 'Permission to update Administrator';
      $updateAdministrator->save();
      //6
      $deleteAdministrator = new Permission;
      $deleteAdministrator->name = 'Delete Administrator';
      $deleteAdministrator->slug = 'administrator.delete';
      $deleteAdministrator->description = 'Permission to delete Administrator';
      $deleteAdministrator->save();

      //7
      $createTeacher = new Permission;
      $createTeacher->name = 'Create Teacher';
      $createTeacher->slug = 'teacher.create';
      $createTeacher->description = 'Permission to create Teacher';
      $createTeacher->save();
      //8
      $updateTeacher = new Permission;
      $updateTeacher->name = 'Update Teacher';
      $updateTeacher->slug = 'teacher.update';
      $updateTeacher->description = 'Permission to update Teacher';
      $updateTeacher->save();
      //9
      $deleteTeacher = new Permission;
      $deleteTeacher->name = 'Delete Teacher';
      $deleteTeacher->slug = 'teacher.delete';
      $deleteTeacher->description = 'Permission to delete Teacher';
      $deleteTeacher->save();

      //10
      $createStudent = new Permission;
      $createStudent->name = 'Create Student';
      $createStudent->slug = 'student.create';
      $createStudent->description = 'Permission to create Student';
      $createStudent->save();
      //11
      $updateStudent = new Permission;
      $updateStudent->name = 'Update Student';
      $updateStudent->slug = 'student.update';
      $updateStudent->description = 'Permission to update Student';
      $updateStudent->save();
      //12
      $deleteStudent = new Permission;
      $deleteStudent->name = 'Delete Student';
      $deleteStudent->slug = 'student.delete';
      $deleteStudent->description = 'Permission to delete Student';
      $deleteStudent->save();

      //13
      $createParent = new Permission;
      $createParent->name = 'Create Parent';
      $createParent->slug = 'parent.create';
      $createParent->description = 'Permission to create Parent';
      $createParent->save();
      //14
      $updateParent = new Permission;
      $updateParent->name = 'Update Parent';
      $updateParent->slug = 'parent.update';
      $updateParent->description = 'Permission to update Parent';
      $updateParent->save();
      //15
      $deleteParent = new Permission;
      $deleteParent->name = 'Delete Parent';
      $deleteParent->slug = 'parent.delete';
      $deleteParent->description = 'Permission to delete Parent';
      $deleteParent->save();

      // 16
      $createBlog = new Permission;
      $createBlog->name = 'Create Blog';
      $createBlog->slug = 'blog.create';
      $createBlog->description = 'Permission to create Blog';
      $createBlog->save();
      // 17
      $createBlog = new Permission;
      $createBlog->name = 'Update Blog';
      $createBlog->slug = 'blog.update';
      $createBlog->description = 'Permission to update Blog';
      $createBlog->save();
      // 18
      $createBlog = new Permission;
      $createBlog->name = 'Delete Blog';
      $createBlog->slug = 'blog.delete';
      $createBlog->description = 'Permission to delete Blog';
      $createBlog->save();

    }
}
