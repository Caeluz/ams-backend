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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("email")->unique();
            $table->string("firstName");
            $table->string("middleName")->nullable();
            $table->string("lastName");
            $table->string("gender");
            $table->integer("age");
            $table->string("guardian");
            $table->string("guardianContact");
            $table->string("apiKey")->unique();
            $table->string("absences");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
