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
        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('Имя','name');
            $table->renameColumn('Фамилия','fam');
            $table->renameColumn('Рост','rost');
            $table->renameColumn('Группа','grup');
            $table->renameColumn('Средний_балл','sr');
            $table->renameColumn('Возраст','yer');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
