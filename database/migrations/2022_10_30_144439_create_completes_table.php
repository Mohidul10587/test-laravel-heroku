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
        Schema::create('completes', function (Blueprint $table) {
            $table->id();
            $table->string('folder_name');
            $table->string('job_id');
            $table->string('job_type');
            $table->string('instruction');
            $table->string('total_image');
            $table->string('amount');
            $table->string('google_drive_link');
            $table->string('employee_email');
            $table->string('employee_name');
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
        Schema::dropIfExists('completes');
    }
};
