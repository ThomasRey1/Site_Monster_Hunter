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
        Schema::create('fauns', function (Blueprint $table) {
            $table->id();
            $table->string('nameFaun');
            $table->string('imageFaun');
            $table->string('imageTwoFaun');
            $table->longText('descrFaun');
            $table->string('iconFaun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fauns');
    }
};
