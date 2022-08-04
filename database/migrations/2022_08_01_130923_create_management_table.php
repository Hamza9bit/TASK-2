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
        Schema::create('management', function (Blueprint $table) {
            $table->id();           
            $table->string('email');
            $table->string('name');
            $table->string('job_title');
            $table->string('grade')->default(' ');
            $table->string('comment')->default(' ');;
            $table->string('Address');
            $table->string('Phone');
            $table->boolean('Report1')->default(false);
            $table->boolean('Report2')->default(false);
            $table->boolean('Report3')->default(false);
            $table->boolean('Report4')->default(false);
            $table->boolean('Report5')->default(false);
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
        Schema::dropIfExists('management');
    }
};
