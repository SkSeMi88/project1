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
        Schema::create('managers', function (Blueprint $table) {

            $table->id();
            $table->timestamps();

            $table->string('name');

            $table->boolean('is_entered')->nullable();
            $table->timestamp('entered_at')->nullable();

            $table->boolean('is_excluded')->nullable();
            $table->timestamp('excluded_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};
