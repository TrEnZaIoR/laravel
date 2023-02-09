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
        Schema::create('prepods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fam');
            $table->string('rost');
            $table->string('grup');
            $table->float('sr');
            $table->string('yer');
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
        Schema::dropIfExists('prepods');
    }
};
