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
        Schema::create('vacations_balances', function (Blueprint $table) {
            $table->id();
            $table->string('vacations_balances');
            $table->string('start_date');
            $table->string('current_balances');
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
        Schema::dropIfExists('vacations_balances');
    }
};
