<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('pseudo')->default('defaultpseudo');
            $table->string('firstname')->default('defaultfirstname');
            $table->string('lastname')->default('defaultlastname');
            $table->string('location')->default('defaultlocation');
            $table->string('email')->unique();
            $table->string('status')->default('defaultstatus');
            //$table->binary('avatar'); Le blob/binary c'est nul avec les seeders
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
