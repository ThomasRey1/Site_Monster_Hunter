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
        Schema::create('armors', function (Blueprint $table) {
            $table->id();
            $table->string('nameArmor');
            $table->string('levelArmor');
            $table->longText('aspectArmor');
            $table->string('defenseArmor');
            $table->string('fireArmor');
            $table->string('waterArmor');
            $table->string('thunderArmor');
            $table->string('iceArmor');
            $table->string('dragonArmor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armors');
    }
};
