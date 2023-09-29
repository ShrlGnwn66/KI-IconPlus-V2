<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormPaidInternTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_paid_intern', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agency_name')->nullable();
            $table->string('participant_name')->nullable();
            $table->string('department')->nullable();
            $table->string('graduation_year')->nullable();
            $table->boolean('laptop_device')->nullable();
            $table->boolean('driver_license')->nullable();
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
        Schema::dropIfExists('form_paid_intern');
    }
}
