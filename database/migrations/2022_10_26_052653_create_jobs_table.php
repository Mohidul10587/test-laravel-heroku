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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('folder_name');
            $table->string('job_id');
            $table->string('job_type');
            $table->string('instruction');
            $table->string('total_image');
            $table->string('amount');
            $table->string('goole_drive_link');
            $table->string('deadline_date');
            $table->string('deadline_time');
            $table->string('empoyee_name');
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
        Schema::dropIfExists('jobs');
    }
};
