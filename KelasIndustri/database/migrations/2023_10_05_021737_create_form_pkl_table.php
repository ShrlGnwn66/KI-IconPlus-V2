<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormPklTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_pkl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('participant_name')->nullable();
            $table->boolean('gender')->nullable();
            $table->string('department')->nullable();
            $table->string('nisnim')->nullable();
            $table->string('participant_contact')->nullable();
            $table->string('agency_name')->nullable();
            $table->string('placement')->nullable();
            $table->date('start_intern_period')->nullable();
            $table->date('end_intern_period')->nullable();
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
        Schema::dropIfExists('form_pkl');
    }
}
