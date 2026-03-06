<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('youth_sport_events', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
            // optionally add foreign key: $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });

        Schema::table('scientific_events', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
        });

        Schema::table('international_opportunities', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('youth_sport_events', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('scientific_events', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('international_opportunities', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
