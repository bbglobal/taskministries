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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_image')->nullable();
            $table->string('title');
            $table->unsignedBigInteger('teacher');
            $table->foreign('teacher')
                  ->references('id')
                  ->on('teachers')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('sub_title');
            $table->integer('fee');
            $table->string('link')->nullable();
            $table->string('category')->nullable(); 
            $table->text('description')->nullable();
            $table->enum('status', ['0', '1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
