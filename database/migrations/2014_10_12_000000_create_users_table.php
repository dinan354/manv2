<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('last_login_date')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->rememberToken();
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->string('url_website', 50)->nullable();
            $table->enum('gender', ['L', 'P'])->nullable();
            $table->string('position', 50)->nullable();
            $table->string('pangkat', 5)->nullable();
            $table->string('golongan', 5)->nullable();
            $table->string('nip', 50)->nullable();
            $table->string('nisn', 50)->nullable();
            $table->string('height', 10)->nullable();
            $table->string('weight', 10)->nullable();
            $table->string('avatar', 100)->nullable();
            $table->string('city',30)->nullable();
            $table->text('bio')->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('status', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
