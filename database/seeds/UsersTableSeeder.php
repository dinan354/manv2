<?php

use Illuminate\Database\Seeder;
use RaccoonSoftware\Slug\Facade\Slug;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super Admin (1)
        DB::table('users')->insert([
          'name' => 'Dinan Riqal',
          'email' => 'dinan@laravel.id',
          'password' => bcrypt('laravel2016'),
          'slug' => Slug::convert('Dinan Riqal')
        ]);
        // Super Admin (1)
        DB::table('users')->insert([
          'name' => 'Heru Joko',
          'email' => 'herujokoutomo@gmail.com',
          'password' => bcrypt('12345'),
          'slug' => Slug::convert('Heru Joko')
        ]);
        // Super Admin (2)
        DB::table('users')->insert([
          'name' => 'Istia Budi',
          'email' => 'istiabudi@gmail.com',
          'password' => bcrypt('passwordku2016'),
          'slug' => Slug::convert('Istia Budi')
        ]);
        // Administrator (3)
        DB::table('users')->insert([
          'name' => 'administrator',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('adminku2016'),
          'slug' => Slug::convert('administrator')
        ]);
        // 4
        DB::table('users')->insert([
          'name' => 'Guru Wiyono',
          'email' => 'guru@gmail.com',
          'password' => bcrypt('guruku2016'),
          'slug' => Slug::convert('Guru Wiyono')
        ]);
        // 5
        DB::table('users')->insert([
          'name' => 'Murid Murid',
          'email' => 'murid@gmail.com',
          'password' => bcrypt('muridku2016'),
          'slug' => Slug::convert('Murid Murid')
        ]);
        // 6
        DB::table('users')->insert([
          'name' => 'Sukamti',
          'email' => 'orangtua@gmail.com',
          'password' => bcrypt('orangtuaku2016'),
          'slug' => Slug::convert('Sukamti')
        ]);

        $faker = Faker\Factory::create();
        for ($i=0; $i < 200 ; $i++) {
          App\User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('testing'),
            'slug' => Slug::convert($faker->name)
          ]);
        }

    }
}
