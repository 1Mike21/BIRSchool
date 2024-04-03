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
        Schema::create('poly_resources', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->string('img')->nullable();
            $table->morphs('resourceable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poly_resources');
    }
};
