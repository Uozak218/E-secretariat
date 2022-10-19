<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annotations', function (Blueprint $table) {
            $table->id();
            $table->string('name_person');
            $table->mediumText('note');
            $table->foreignId('courrier_id');
            $table->foreignId('user_id');
            $table->foreign('courrier_id')->references('id')->on('courriers')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('annotations');
    }
}
