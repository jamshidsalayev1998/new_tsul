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
        Schema::create('faculty_events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->string('title_uz');
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();

            $table->text('description_uz')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();

            $table->dateTime('event_date')->nullable();

            $table->string('location_uz')->nullable();
            $table->string('location_ru')->nullable();
            $table->string('location_en')->nullable();

            $table->text('speakers_uz')->nullable();
            $table->text('speakers_ru')->nullable();
            $table->text('speakers_en')->nullable();

            $table->text('participation_rules_uz')->nullable();
            $table->text('participation_rules_ru')->nullable();
            $table->text('participation_rules_en')->nullable();

            $table->string('image')->nullable();
            $table->integer('status')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty_events');
    }
};
