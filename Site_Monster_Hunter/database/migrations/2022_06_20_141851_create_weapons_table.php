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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->string('nameWeapon');
            $table->string('imageWeapon');
            $table->string('attackWeapon');
            $table->string('imageTranchWeapon');
            $table->string('elementWeapon');
            $table->string('imageElementWeapon');
            $table->string('affiniteWeapon');
            $table->string('defenseWeapon');
            $table->string('materials1Weapon');
            $table->string('materials2Weapon');
            $table->string('materials3Weapon');
            $table->string('materials4Weapon');
            $table->string('fabrication1Weapon');
            $table->string('fabrication2Weapon');
            $table->string('fabrication3Weapon');
            $table->string('fabrication4Weapon');

            
            $table->unsignedBigInteger('weapon_type_id');
            $table->foreign('weapon_type_id')->references('id')->on('weapon_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weapons');
    }
};
