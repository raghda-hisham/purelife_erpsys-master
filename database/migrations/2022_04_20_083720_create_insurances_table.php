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
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->string('ins_code');
            $table->string('ins_value');
            $table->string('ins_start');
            $table->string('ins_end');
            $table->string('med_value');
            $table->string('med_start');
            $table->string('med_end');
            $table->timestamps();
            $table->foreignId('employee_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurances');
    }
};
