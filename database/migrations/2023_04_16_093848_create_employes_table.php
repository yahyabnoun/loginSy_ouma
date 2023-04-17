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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->date('date_embauche');
            $table->string('email')->unique();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('grade_id')->references('id')->on('grade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
