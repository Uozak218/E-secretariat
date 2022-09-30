<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Courriers extends Migration
{
    public function up()
    {
        Schema::create('courriers', function (Blueprint $table) 
        {    
            $table->id();
            $table->string('type');
            $table->string('objet');
            $table->integer('nbrpieces');
            $table->foreignId('contact_id');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
