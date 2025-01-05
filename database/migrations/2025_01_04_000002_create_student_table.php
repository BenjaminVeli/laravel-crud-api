<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('language');
            $table->timestamps();
            $table->foreignId('grade_id')->references('id')->on('grade')->onDelete('cascade');
        });

        DB::table(table: 'student')->insert([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'phone' => '123456789',
            'language' => 'Spanish',
            'grade_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
