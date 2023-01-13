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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->nullable()->constrained('departments')->onDelete('cascade');
            $table->string('name_en');
            $table->string('name_ar');
            $table->boolean('gender')->default(0);###   Male: 0, Female:1
            $table->integer('graduation_year');
            $table->float('average');
            $table->integer('round'); ### 0: First, 1: Second, 2: Third
            $table->string('image_path')->nullable();


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
        Schema::dropIfExists('students');
    }
};
