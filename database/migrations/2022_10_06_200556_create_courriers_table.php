<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courriers', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('objet');
            $table->string('name')->nullable();
            $table->mediumText('content')->nullable();
            $table->integer('nbrpieces');
            $table->foreignId('collaborateur_id');
            $table->foreignId('contact_id');
            $table->foreign('contact_id')->references('name')->on('contacts')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('collaborateur_id')->references('name')->on('users')->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('courriers');
    }
}
