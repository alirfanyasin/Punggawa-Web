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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->longText('description');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('guidebook_link')->nullable();
            $table->string('registration_link')->nullable();
            $table->string('category');
            $table->unsignedBigInteger("fund")->nullable();
            $table->string("no_rek")->nullable();
            $table->string('poster');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};
