<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string  ('hiring_date');
            $table->string('insurance_code')->nullable();
            $table->string('insurance_value')->nullable();
            $table->string  ('insurance_start')->nullable();
            $table->string  ('insurance_end')->nullable();
            $table->string  ('med_insurance_start')->nullable();
            $table->string  ('med_insurance_end')->nullable();
            $table->enum('work_hours', [12, 8]);
            $table->enum('shift', ['صباحي', 'مسائي']);
            $table->enum('gender', ['أنثى', 'ذكر']);
            $table->string('personal_id');
            $table->string('visa_num')->nullable();
            $table->string ('retirement_date')->nullable();
            $table->decimal('salary', $precision = 8, $scale = 2);
            $table->text('papers');
            $table->string ('paper_completed')->nullable();
            $table->timestamps();
            $table->foreignId('position_id')->constrained();
            $table->foreignId('department_id')->constrained();
            $table->foreignId('location_id')->constrained();
            $table->string  ('birthday');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}


