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
        Schema::create('state_contents', function (Blueprint $table) {
            $table->id();
            $table->string('days')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->enum('status',[1,0])->default(1);
            $table->foreignId('state_id')->nullable()->constrained('states')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**o c 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('state_contents');
    }
};
