<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armor_details', function (Blueprint $table) {
            $table->id();
            $table->string('partArmor');
            $table->string('materials1Armor');
            $table->string('materials2Armor');
            $table->string('materials3Armor');
            $table->string('materials4Armor');
            $table->string('talent1Armor');
            $table->string('talent2Armor');
            $table->string('talent3Armor');
            $table->string('talent4Armor');

            // $table->unsignedBigInteger('armor_id');
            // $table->foreign('armor_id')->references('id')->on('armors');
            $table->foreignId('armor_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armor_details');
    }
};
