<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animationstudio_id')->constrained('animationstudios');
            $table->foreignId('country_id')->constrained('countries');
            $table->string('name');
            $table->string('image')->default('https://fond-ecran-manga.fr/wp-content/uploads/2020/04/Assassination-Classroom-Nagisa-Karma-Korosensei-Poster-by-450x600.png');
            $table->text('description');
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
        Schema::dropIfExists('animes');
    }
}
