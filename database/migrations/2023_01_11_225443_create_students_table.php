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
            $table->foreignId('unid_id')->nullable()->constrained('unids')->onDelete('cascade');
            $table->string('name_en');
            $table->string('name_ar');
            $table->boolean('gender')->default(false);###   Male: 0, Female:1
            $table->float('average')->nullable();
            $table->string('average_written')->nullable();
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
