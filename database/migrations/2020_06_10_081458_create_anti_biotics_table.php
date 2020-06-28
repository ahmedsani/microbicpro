<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntiBioticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anti_biotics', function (Blueprint $table) {
            $table->id();
            $table->decimal('avg_cost', 13);
            $table->string('brand');
            $table->string('anti_biogram_data_pathogen_id');
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
        Schema::dropIfExists('anti_biotics');
    }
}