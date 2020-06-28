<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntiBiogramDataAntiBioticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anti_biogram_data_pathogen_anti_biotic', function (Blueprint $table) {
            $table->integer('anti_biogram_data_pathogen_id');
            $table->integer('anti_biotic_id');
            $table->string('isolates_number');
            $table->string('year');
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
        Schema::dropIfExists('anti_biogram_data_pathogen_anti_biotic');
    }
}