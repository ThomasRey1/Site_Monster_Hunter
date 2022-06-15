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
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->string('nameMonster');
            $table->string('imageMonster');
            $table->string('imageTwoMonster');
            $table->longText('descrMonster');
            $table->string('imageElementMonster');
            $table->string('imageFleauMonster');
            $table->longText('WeaknessMonster');
            $table->string('imageNoviceMonster');
            $table->string('imageExpertMonster');
            $table->string('iconMonster');
            $table->boolean('greatMonster');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monsters');
    }
};
