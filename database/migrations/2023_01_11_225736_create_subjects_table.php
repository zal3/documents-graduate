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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->nullable()->constrained('departments')->onDelete('cascade');
            $table->string('name_en');
            $table->string('name_ar');
            $table->integer('course')->default(1); //### first: 1, second:2
            $table->integer('stage')->default(1); //### first: 1, second:2, third:3 , fourth:4
            $table->integer('unit')->default(1); //### first: 1, second:2, third:3 , fourth:4

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
        Schema::dropIfExists('subjects');
    }
};
