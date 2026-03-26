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
        Schema::table('about_university', function (Blueprint $table) {
            $table->text('kommutator_phone')->nullable();
            $table->text('qabul_phone')->nullable();
            $table->text('ishonch_phone')->nullable();
            $table->text('map_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_university', function (Blueprint $table) {
            $table->dropColumn(['kommutator_phone', 'qabul_phone', 'ishonch_phone', 'map_link']);
        });
    }
};
