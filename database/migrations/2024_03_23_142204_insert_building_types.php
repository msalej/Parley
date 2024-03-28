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
        DB::table('building_types')->insert([
            ['name' => 'Town hall', 'base_construction_time' => '00:00:10', 'level_time_multiplier' => 10],
            ['name' => 'Storage', 'base_construction_time' => '00:00:6', 'level_time_multiplier' => 8],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('building_types')->delete();
    }
};
