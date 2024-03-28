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
        Schema::create('town_buildings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_type_id')->constrained('building_types');
            $table->foreignId('town_id')->constrained('towns');
            $table->smallInteger('level');
            $table->dateTime('construction_finish_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('town_buildings');
    }
};
