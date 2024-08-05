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
        Schema::create('form1s', function (Blueprint $table) {
            $table->id();
            $table->string('form1_field')->nullable();
            $table->string('form2_field')->nullable();
            $table->string('form3_field')->nullable();
            $table->string('form4_field')->nullable();
            $table->string('form5_field')->nullable();
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
        Schema::dropIfExists('form1s');
    }
};
