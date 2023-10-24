<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormGuestTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_guest_teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agency_name')->nullable();
            $table->string('subject_exam')->nullable();
            $table->date('exam_date')->nullable();
            $table->time('exam_time')->nullable();
            $table->string('responsible_teacher')->nullable();
            $table->string('responsible_contact')->nullable();
            $table->string('apply_letter')->nullable();
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
        Schema::dropIfExists('form_guest_teacher');
    }
}
