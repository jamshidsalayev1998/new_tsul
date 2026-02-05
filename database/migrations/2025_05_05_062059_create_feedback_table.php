<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->tinyInteger('rating')->unsigned();
            $table->enum('type', ['feedback', 'complaint', 'suggestion'])->nullable();
            $table->text('message')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 - yangi 1 - korilgan 2 - jarayonda 3 - hal qilingan');
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
        Schema::dropIfExists('feedback');
    }
}
