<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id('id_exam');
            $table->string('title', 40)->nullable();
            $table->integer('student_id')->unsigned()->nullable();
            $table->string('note', 40);
            $table->string('partial', 30);
            $table->foreignId('id_matters')->unsigned();
            $table->foreignId('id_student')->unsigned();
            $table->foreignId('id_period')->unsigned();
            

            $table->foreign('id_matters')->references('id_matters')->on('matters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_student')->references('id_student')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_period')->references('id_period')->on('period')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
