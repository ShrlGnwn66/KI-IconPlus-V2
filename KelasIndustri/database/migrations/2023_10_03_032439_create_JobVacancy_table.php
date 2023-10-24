<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JobVacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picture')->nullable();
            $table->string('title')->nullable();
            $table->string('title_job')->nullable();
            $table->longText('job_description')->nullable();
            $table->string('title_qualifications')->nullable();
            $table->longText('qualifications')->nullable();
            $table->string('placement')->nullable();
            $table->string('work_hours')->nullable();
            $table->date('expired_date')->nullable();
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
        Schema::dropIfExists('JobVacancy');
    }
}
